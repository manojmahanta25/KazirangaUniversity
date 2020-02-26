<?php

namespace App\Http\Controllers;

use App\Dean;
use App\Faculty;
use App\Hod;
use Illuminate\Http\Request;

class DeanHodController extends Controller
{
    public function deanSet(Request $request){
        $deanid=$request->facid;
        $deanof=$request->deanof;
        Dean::updateOrCreate(
            ['school' => $deanof],
            ['faculty_id' => $deanid]
        );
        session()->flash('success', 'Dean Set Successfully');

        return redirect()->back();
    }
    public function hodSet(Request $request){
        $hodid=$request->facid;
        $hodof=$request->hodof;
        Hod::updateOrCreate(
            ['department' => $hodof],
            ['faculty_id' => $hodid]
        );
        session()->flash('success', 'HOD Set Successfully');

        return redirect()->back();
    }
}
