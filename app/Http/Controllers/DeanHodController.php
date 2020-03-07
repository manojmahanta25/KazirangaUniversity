<?php

namespace App\Http\Controllers;

use App\Dean;
use App\Faculty;
use App\Hod;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DeanHodController extends Controller
{
    private $_user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->_user=Auth::user(); // returns user
            return $next($request);
        });
    }
    public function deanSet(Request $request){
        $deanid=$request->facid;
        $deanof=$request->deanof;
        Dean::updateOrCreate(
            ['school' => $deanof],
            ['faculty_id' => $deanid]
        );
        session()->flash('success', 'Dean Set Successfully');
        $data=[
            'message'=>'Dean Updated',
            'task'=>$request->facid.'updated on'.$deanof
        ];
        $this->sentNotification($data);
        return redirect()->back();
    }
    public function hodSet(Request $request){
        $hodid=$request->facid;
        $hodof=$request->hodof;
        Hod::updateOrCreate(
            ['department' => $hodof],
            ['faculty_id' => $hodid]
        );
        $data=[
            'message'=>'HOD Updated',
            'task'=>$request->facid.'updated on'.$hodof
        ];
        $this->sentNotification($data);
        session()->flash('success', 'HOD Set Successfully');

        return redirect()->back();
    }
    public function sentNotification($data){
        User::find(1)->notify(new UserNotification($this->_user,$data));
    }
}
