<?php

namespace App\Http\Controllers;

use App\Department;
use App\Designation;
use App\Faculty;
use App\Notifications\UserNotification;
use App\School;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SchoolController extends Controller
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
        $schoollist = School::all();
        $datare=1;
        return view('adpanel.schoolmanage',compact('datare','schoollist'));
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
        $schoollist = School::all();
        $datare=1;


        return view('adpanel.addSchool',compact('datare','schoollist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $priority = School::max('s_order');
        School::create([
            'school_code'=>strtoupper($request->school_code),
            'school_name'=>ucwords($request->school_name),
            'smeta_key'=>$request->smeta_key,
            'sdes_key'=>$request->sdes_key,
            's_order'=>++$priority
        ]);
        $data=[
            'message'=>'School Created',
            'task'=>'With ID'.$request->school_code
        ];
        $this->sentNotification($data);
        session()->flash('success', 'Created Successfully');

        return redirect(route('admin.School'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $sid)
    {
        $schoollist = School::all();
        $datare=1;
        return view('adpanel.editSchool',compact('datare','schoollist','sid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,School $sid)
    {
        $sid->update([
            'school_name'=>$request->school_name,
            'smeta_key'=>$request->smeta_key,
            'sdes_key'=>$request->sdes_key,
        ]);
        $data=[
            'message'=>'School update',
            'task'=>$request->school_name.' Changes made'
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Updated Successfully');

        return redirect(route('admin.School'));
    }
    public function updatePriority(Request $request){

        $main = School::select('s_order')->where('school_code',$request->schoolid)->firstOrFail();
        $second = School::select('s_order')->where('school_code',$request->schoolidafter)->firstOrFail();
        if($main>$second) {
            DB::update(' update schools
         set s_order = case when s_order = ? then ?
                    when s_order>= ? and s_order <= ? then s_order + 1
                    else s_order
               end', [$main->s_order, $second->s_order,$second->s_order,$main->s_order]);
        }
        elseif ($main==$second){
            return redirect(route('admin.School'))->withErrors(['Same Priority']);
        }else
        {
            DB::update(' update schools
            set s_order = case when s_order = ? then ?
                    when s_order>= ? and s_order <= ? then s_order - 1
                    else s_order
               end', [$main->s_order, $second->s_order,$main->s_order,$second->s_order]);

        }
        $data=[
            'message'=>'School priority update',
            'task'=>$request->schoolid.' with '.$request->schoolidafter
        ];
        $this->sentNotification($data);
        session()->flash('success', 'Priority Updated Successfully');

        return redirect(route('admin.School'));


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $sid)
    {
        $sid->delete();
        $data=[
            'message'=>'School Deleted',
            'task'=>$sid->school_code.' Deleted'
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Deleted Successfully');

        return redirect(route('admin.School'));
    }
    public function sentNotification($data){
        User::find(1)->notify(new UserNotification($this->_user,$data));
    }
}
