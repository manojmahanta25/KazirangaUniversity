<?php

namespace App\Http\Controllers;

use App\Department;
use App\Designation;
use App\Notifications\UserNotification;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DepartmentController extends Controller
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
        $deptlist = Department::all();
        $datare=1;
        return view('adpanel.departmentmanage',compact('datare','deptlist'));
    }
    public function schoolFetch() {
        $comp=  School::all()->toArray();
        $subevent = [];
        foreach ($comp as $elements){
            $subevent[$elements['school_code']] = $elements['school_name'];
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
        $schoollist = $this->schoolFetch();
        return view('adpanel.addDepartment',compact('schoollist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Department::create([
            'depart_code'=>strtoupper($request->depart_code),
            'depart_name'=>ucwords($request->depart_name),
            'school'=>$request->school,
        ]);

        $data=[
            'message'=>'Department Created',
            'task'=>'Where name: '.$request->depart_name
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Created Successfully');

        return redirect(route('admin.Dept'));
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
    public function edit(Department $did)
    {

        $schoollist = $this->schoolFetch();
        $datare=1;
        return view('adpanel.editDepartment',compact('datare','schoollist','did'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Department $did)
    {
        $did->update([
            'depart_name'=>$request->depart_name,
            'school'=>$request->school,
            ]);

        $data=[
            'message'=>'Department Update',
            'task'=>'Where name: '.$request->depart_name
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Updated Successfully');

        return redirect(route('admin.Dept'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $did)
    {
        $did->delete();

        $data=[
            'message'=>'Department Deleted',
            'task'=>'Where name: '.$did->depart_name
        ];
        $this->sentNotification($data);

        session()->flash('success', 'Deleted Successfully');

        return redirect(route('admin.Dept'));
    }
    public function sentNotification($data){
        User::find(1)->notify(new UserNotification($this->_user,$data));
    }
}
