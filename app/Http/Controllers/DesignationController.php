<?php

namespace App\Http\Controllers;

use App\Department;
use App\Designation;
use App\Notifications\UserNotification;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class DesignationController extends Controller
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
        $desglist = Designation::all();
        $datare=1;
        return view('adpanel.designationmanage',compact('datare','desglist'));
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
        return view('adpanel.addDesignation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $priority = Designation::max('d_priority');
        $priority =($priority ==0 || $priority ==NULL)? 0: $priority;
        Designation::create([
            'name'=>ucwords($request->name),
            'd_visible'=>($request->visible)? true: false,
            'd_priority'=>++$priority
        ]);

        $data=[
            'message'=>'Designation Store',
            'task'=>'Where name: '.$request->name
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Created Successfully');

        return redirect(route('admin.Desig'));
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
     * @param Designation $des
     * @return \Illuminate\Http\Response
     */
    public function edit(Designation $des)
    {
        return view('adpanel.editDesignation',compact('datare','schoollist','des'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Designation $des
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designation $des)
    {
        $des->update([
            'name'=>ucwords($request->name),
            'd_visible'=>($request->visible)? true: false,
        ]);

        $data=[
            'message'=>'Designation Update',
            'task'=>'Where name: '.$des->name
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Updated Successfully');

        return redirect(route('admin.Desig'));
    }
    public function updatePriority(Request $request){

        $main = Designation::select('d_priority')->where('id',$request->desid)->firstOrFail();
        $second = Designation::select('d_priority')->where('id',$request->desidafter)->firstOrFail();
        if($main>$second) {
            DB::update(' update designations
         set d_priority = case when d_priority = ? then ?
                    when d_priority>= ? and d_priority <= ? then d_priority + 1
                    else d_priority
               end', [$main->d_priority, $second->d_priority,$second->d_priority,$main->d_priority]);
        }
        elseif ($main==$second){
            return redirect(route('admin.School'))->withErrors(['Same Priority']);
        }else
        {
            DB::update(' update designations
            set d_priority = case when d_priority = ? then ?
                    when d_priority>= ? and d_priority <= ? then d_priority - 1
                    else d_priority
               end', [$main->d_priority, $second->d_priority,$main->d_priority,$second->d_priority]);

        }

        $data=[
            'message'=>'Designation Update',
            'task'=>$main.' with '.$second
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Priority Updated Successfully');

        return redirect(route('admin.Desig'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Designation $des
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Designation $des)
    {
        $des->delete();

        $data=[
            'message'=>'Designation Deleted',
            'task'=>'Where name: '.$des->name
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Deleted Successfully');

        return redirect(route('admin.Desig'));
    }
    public function sentNotification($data){
        User::find(1)->notify(new UserNotification($this->_user,$data));
    }

}
