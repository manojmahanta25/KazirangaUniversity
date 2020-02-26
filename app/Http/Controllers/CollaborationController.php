<?php

namespace App\Http\Controllers;

use App\Collaboration;
use App\Department;
use App\School;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class CollaborationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborations=Collaboration::all();
        $ClTrash=Collaboration::onlyTrashed()->get();
        $datare=1;
        return view('adpanel.viewCollaboration',compact('datare','collaborations','ClTrash'));
    }
    public function schoolFetch() {
        $comp=  School::all()->toArray();
        $subevent = [];
        foreach ($comp as $elements){
            $subevent[$elements['school_code']] = $elements['school_name'];
        }
        return $subevent;
    }
    public function deptFetch() {
        $comp=  Department::all()->toArray();
        $subevent = [];
        foreach ($comp as $elements){
            $subevent[$elements['school']][$elements['depart_code']] = $elements['depart_name'];
        }
        return $subevent;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school = $this->schoolFetch();
        $depart = $this->deptFetch();
        $editor=1;
        return view('adpanel.addCollaboration',compact('depart','school','editor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'clfile' => 'image|mimes:jpeg,png,jpg,svg|required|max:8000',
            'name' => 'required',
            'type' => 'required'
        ]);
        $priority = Collaboration::withTrashed()->max('priority');
        $priority =($priority ==0 || $priority ==NULL)? 0: $priority;
        $collaboration = Collaboration::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'description'=>$request->description,
            'web_link'=>$request->weblink,
            'priority'=>++$priority
        ]);
        if($request->hasFile('clfile'))
        {
            $filenameWithExt = $request->file('clfile')->getClientOriginalName();
            $extension = $request->file('clfile')->getClientOriginalExtension();

            $fileNameToStore=$collaboration->id.'.jpg';
            $destinationPath = public_path('/storage/collaboration/'.$fileNameToStore);
            $resize_image = Image::make($request->file('clfile')->getRealPath());
            $resize_image->resize(360, 360, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->orientate();
            $resize_image->save($destinationPath,'80','jpg');
            $collaboration->update(['image_link'=>'storage/collaboration/'.$fileNameToStore]);
        }

        if($request->school) {
            $collaboration->school()->attach($request->school);
        }
        if($request->dept)
        {
            $collaboration->department()->attach($request->dept);
        }
        session()->flash('success', 'Created Successfully');

        return redirect(route('admin.Cl'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaboration $cid)
    {
        $school = $this->schoolFetch();
        $depart = $this->deptFetch();
        $editor=1;
        return view('adpanel.editCollaboration',compact('editor','school','depart','cid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'clfile' => 'image|mimes:jpeg,png,jpg,svg|max:8000',
            'name' => 'required',
            'type' => 'required'
        ]);
        $collaboration = Collaboration::where('id',$id)->firstOrFail();
        $collaboration->update([
            'name'=>$request->name,
            'type'=>$request->type,
            'description'=>$request->description,
            'web_link'=>$request->weblink,
        ]);
        if($request->hasFile('clfile'))
        {
            $filenameWithExt = $request->file('clfile')->getClientOriginalName();
            $extension = $request->file('clfile')->getClientOriginalExtension();

            $fileNameToStore=$collaboration->id.'.jpg';
            $destinationPath = public_path('/storage/collaboration/'.$fileNameToStore);
            $resize_image = Image::make($request->file('clfile')->getRealPath());
            $resize_image->resize(360, 360, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->orientate();
            $resize_image->save($destinationPath,'80','jpg');
            $collaboration->update(['image_link'=>'storage/collaboration/'.$fileNameToStore]);
        }
        if($request->school) {
            $collaboration->school()->sync($request->school);
        }
        if($request->dept)
        {
            $collaboration->department()->sync($request->dept);
        }
        session()->flash('success', 'Updated Successfully');

        return redirect(route('admin.Cl'));
    }

    public function updatePriority(Request $request){

        $main = Collaboration::withTrashed()->select('priority')->where('id',$request->cid)->firstOrFail();
        $second = Collaboration::withTrashed()->select('priority')->where('id',$request->cidafter)->firstOrFail();
        if($main>$second) {
            DB::update(' update collaborations
         set priority = case when priority = ? then ?
                    when priority>= ? and priority <= ? then priority + 1
                    else priority
               end', [$main->priority, $second->priority,$second->priority,$main->priority]);
        }elseif ($main==$second){
            return redirect(route('admin.Cl'))->withErrors(['Same Priority']);
        }
        else
        {
            DB::update(' update collaborations
         set priority = case when priority = ? then ?
                    when priority>= ? and priority <= ? then priority - 1 
                    else priority
               end', [$main->priority, $second->priority,$main->priority,$second->priority,]);
        }
        session()->flash('success', 'Priority Updated Successfully');

        return redirect(route('admin.Cl'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaboration $cid)
    {
        $cid->delete();

        session()->flash('success', 'Deleted Successfully');

        return redirect()->back();
    }
    public function restore($cid)
    {
        Collaboration::onlyTrashed()->where('id', $cid)->restore();

        session()->flash('success', 'Restore Successfully');

        return redirect()->back();
    }
}
