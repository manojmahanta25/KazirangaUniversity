<?php

namespace App\Http\Controllers;

use App\Dean;
use App\Department;
use App\Designation;
use App\Faculty;
use App\FacultyDetails;
use App\Hod;
use App\Notifications\UserNotification;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $_user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->_user=Auth::user(); // returns user
            return $next($request);
        });

    }
    public function index()
    {
        $facdet= Faculty::all();
        $facdetTrash= Faculty::onlyTrashed()->get();
        $datare=1;
        $school = $this->schoolFetch();
        $depart = $this->deptFetch();
        return view('adpanel.viewfaculty',compact('facdet','datare','facdetTrash','school','depart'));
    }
    public function priorityIndex()
    {
        $facdet= Faculty::orderBy('priority')->get();
        $datare=1;
        return view('adpanel.priorityFaculty',compact('facdet','datare'));
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
    public function designationFetch() {
        $comp=  Designation::all()->toArray();
        $subevent = [];
        foreach ($comp as $elements){
            $subevent[$elements['id']] = $elements['name'];
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
        $designation= $this->designationFetch();
        return view('adpanel.addFaculty',compact('depart','school','designation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $priority = Faculty::withTrashed()->max('priority');
        $priority =($priority ==0 || $priority ==NULL)? 0: $priority;
        $faculty = Faculty::create([
            'faculty_id'=>'KU'.$request->facid,
            'title'=>$request->title,
            'givenName'=>$request->fname,
            'familyName'=>$request->lname,
            'email'=>$request->email,
            'status'=>$request->status,
            'priority'=>++$priority
        ]);
        if(isset($request->dean))
        {
            Dean::updateOrCreate(
                ['school' => $request->densel],
                ['faculty_id' => 'KU'.$request->facid]
            );
        }
        if(isset($request->hod))
        {
            Hod::updateOrCreate(
                ['department' => $request->hodsel],
                ['faculty_id' => 'KU'.$request->facid]
            );
        }
        if($request->school) {
            $faculty->schools()->attach($request->school);
        }
        if($request->dept) {
            $faculty->departments()->attach($request->dept);
        }
        if($request->designation) {
            $faculty->designations()->attach($request->designation);
        }

        $data=[
            'message'=>'Faculty Created',
            'task'=>'Where ID: '.$request->facid
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Created Successfully');

        return redirect(route('admin.addFaculty'));
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
    public function edit(Faculty $fid)
    {
        $school = $this->schoolFetch();
        $depart = $this->deptFetch();
        $designation= $this->designationFetch();
        $editor =1;
        return view('adpanel.editFaculty',compact('fid','depart','school','designation','editor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $faculty = Faculty::where('faculty_id',$id)->firstOrFail();
        $faculty->update([
            'title'=>$request->title,
            'givenName'=>$request->fname,
            'familyName'=>$request->lname,
            'email'=>$request->email,
            'status'=>$request->status,
        ]);
        if($request->school) {
            $faculty->schools()->sync($request->school);
        }
        if($request->dept) {
            $faculty->departments()->sync($request->dept);
        }
        if($request->designation) {
            $faculty->designations()->sync($request->designation);
        }
        FacultyDetails::updateOrCreate(
            ['faculty_id' => $id],
            [   'qualification' => ($request->qualification==""|| $request->qualification==NULL)? NULL: $request->qualification,
                'experience' => ($request->experience==""|| $request->experience==NULL)? NULL: $request->experience,
                'works' => ($request->works==""|| $request->works==NULL)? NULL: $request->works,
                'awards' => ($request->awards==""|| $request->awards==NULL)? NULL: $request->awards,
                'publications' => ($request->publications==""|| $request->publications==NULL)? NULL: $request->publications
                ]
        );

        $data=[
            'message'=>'Faculty Update',
            'task'=>'Where ID: '.$id
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Updated Successfully');

        return redirect(route('admin.Faculty'));
    }

    public function updatePriority(Request $request){

        $main = Faculty::withTrashed()->select('priority')->where('faculty_id',$request->facid)->firstOrFail();
        $second = Faculty::withTrashed()->select('priority')->where('faculty_id',$request->facidafter)->firstOrFail();
       if($main>$second) {
            DB::update(' update faculties
         set priority = case when priority = ? then ?
                    when priority>= ? and priority <= ? then priority + 1
                    else priority
               end', [$main->priority, $second->priority,$second->priority,$main->priority]);
        }elseif ($main==$second){
           return redirect(route('admin.priorityFaculty'))->withErrors(['Same Priority']);
       }
       else
        {
            DB::update(' update faculties
         set priority = case when priority = ? then ?
                    when priority>= ? and priority <= ? then priority - 1
                    else priority
               end', [$main->priority, $second->priority,$main->priority,$second->priority,]);
        }

        $data=[
            'message'=>'Faculty Priority Update',
            'task'=>$main.' with '.$second
        ];
        $this->sentNotification($data);
        session()->flash('success', 'Priority Updated Successfully');

        return redirect(route('admin.priorityFaculty'));


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $fid)
    {
        $fid->delete();

        $data=[
            'message'=>'Faculty Delete',
            'task'=>'Where ID: '.$fid->faculty_id
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Deleted Successfully');

        return redirect()->back();
    }
    public function restore($fid)
    {
        Faculty::onlyTrashed()->where('faculty_id', $fid)->restore();

        $data=[
            'message'=>'Faculty Restored',
            'task'=>'Where ID: '.$fid
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Restore Successfully');

        return redirect()->back();
    }
    public function sentNotification($data){
        User::find(1)->notify(new UserNotification($this->_user,$data));
    }
}
