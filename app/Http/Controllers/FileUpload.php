<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\User;

class FileUpload extends Controller
{
    private $_user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->_user=Auth::user(); // returns user
            return $next($request);
        });
    }
   public function profilePic(Request $request, Faculty $fid)
   {
      $this->validate($request,[
          'profile' => 'image|mimes:jpeg,png,jpg,svg|required|max:8000'
      ]);
       if($request->hasFile('profile'))
       {
           $filenameWithExt = $request->file('profile')->getClientOriginalName();

           $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

           $extension = $request->file('profile')->getClientOriginalExtension();

           $fileNameToStore=$fid->faculty_id.'.jpg';
           $destinationPath = public_path('/storage/faculty/'.$fileNameToStore);
           $resize_image = Image::make($request->file('profile')->getRealPath());
           $resize_image->resize(360, 360, function($constraint){
               $constraint->aspectRatio();
           });
           $resize_image->orientate();
           $resize_image->save($destinationPath,'80','jpg');
           $fid->update(['image'=>'storage/faculty/'.$fileNameToStore]);
       }
       $data=[
           'message'=>'Faculty Profile pic',
           'task'=>'Where ID: '.$fid->faculty_id
       ];
       $this->sentNotification($data);
       return redirect()->back()->with('success','Profile Updated');
   }
    public function sentNotification($data){
        User::find(1)->notify(new UserNotification($this->_user,$data));
    }


}
