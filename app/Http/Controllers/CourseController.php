<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\School;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facdet= Course::all();
        $facdetTrash= Course::onlyTrashed()->get();
        $datare=1;
        $school = $this->schoolFetch();
        $depart = $this->deptFetch();
        return view('adpanel.viewCourse',compact('facdet','datare','facdetTrash','school','depart'));
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
        $editor =1;
        return view('adpanel.addCourse',compact('school','depart','editor'));
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
            'clfile' => 'image|mimes:jpeg,png,jpg,svg|max:8000',
            'weblink' => 'mimes:pdf|max:8000',
            'code' => 'required',
            'name' => 'required',
            'type' => 'required',
            'recruiment' => 'required',
            'skill' => 'required',
            'lang' => 'required',
            'student' => 'required|numeric',
            'projects' => 'required|numeric',
            'mode' => 'required',
            'internships' => 'required|numeric',
            'description' => 'nullable',
            'eligibility' => 'nullable',
            'nfee' => 'nullable|numeric',
            'intfee' => 'nullable|numeric',
            'duration'=>'required',
        ]);

        if(Course::where('course_code',$request->code)->exists()){
            return redirect()->back()->withErrors(['Course code already Exist']);
        }

        $courseEl =[
        'course_code'=>$request->code,
        'course_name'=>$request->name,
        'type'=>$request->type,
        'campus_recruitment'=>$request->recruiment,
        'skill_level'=>$request->skill,
        'language'=>$request->lang,
        'batch_size'=>$request->student,
        'duration'=>$request->duration,
        'projects'=>$request->projects,
        'mode'=>$request->mode,
        'internship'=>$request->internships,
        'description'=>$request->description,
        'eligibility'=>$request->eligibility,
//        'meta_tag'=>$request->,
//        'meta_des'=>$request->,
        'fee_inr'=>$request->nfee,
        'fee_usd'=>$request->intfee
        ];
        $course=Course::create($courseEl);
        if($request->school) {
            $course->school()->attach($request->school);
        }
        if($request->dept) {
            $course->department()->attach($request->dept);
        }
        if($request->hasFile('clfile'))
        {
            $filenameWithExt = $request->file('clfile')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('clfile')->getClientOriginalExtension();

            $fileNameToStore=$course->course_code.'.jpg';
            $destinationPath = public_path('/storage/courses/image/'.$fileNameToStore);
            $resize_image = Image::make($request->file('clfile')->getRealPath());
            $resize_image->resize(360, 360, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->orientate();
            $resize_image->save($destinationPath,'80','jpg');
            $course->update(['image'=>'storage/courses/image/'.$fileNameToStore]);
        }
        if($request->hasFile('weblink'))
        {
            $filenameWithExt = $request->file('weblink')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('weblink')->getClientOriginalExtension();

            $fileNameToStore=$course->course_code.'.'.$extension;
            $path = $request->file('weblink')->storeAs('public/courses/syllabus',$fileNameToStore);
            $course->update(['syllabus'=>'storage/courses/syllabus'.$fileNameToStore]);
        }
        return redirect(route('admin.Course'))->with('success', 'Successfully Created!!');
        //image clfile //weblink sylabus
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
    public function edit(Course $cid)
    {
        $school = $this->schoolFetch();
        $depart = $this->deptFetch();
        $editor =1;
        return view('adpanel.editCourse',compact('school','depart','editor','cid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Course $cid)
    {
        $this->validate($request,[
            'clfile' => 'image|mimes:jpeg,png,jpg,svg|max:8000',
            'weblink' => 'mimes:pdf|max:8000',
            'code' => 'required',
            'name' => 'required',
            'type' => 'required',
            'recruiment' => 'required',
            'skill' => 'required',
            'lang' => 'required',
            'student' => 'required|numeric',
            'projects' => 'required|numeric',
            'mode' => 'required',
            'internships' => 'required|numeric',
            'description' => 'nullable',
            'eligibility' => 'nullable',
            'nfee' => 'nullable|numeric',
            'intfee' => 'nullable|numeric',
            'duration'=>'required',
        ]);


        $courseEl =[
            'course_name'=>$request->name,
            'type'=>$request->type,
            'campus_recruitment'=>$request->recruiment,
            'skill_level'=>$request->skill,
            'language'=>$request->lang,
            'batch_size'=>$request->student,
            'duration'=>$request->duration,
            'projects'=>$request->projects,
            'mode'=>$request->mode,
            'internship'=>$request->internships,
            'description'=>$request->description,
            'eligibility'=>$request->eligibility,
//        'meta_tag'=>$request->,
//        'meta_des'=>$request->,
            'fee_inr'=>$request->nfee,
            'fee_usd'=>$request->intfee
        ];
        $cid->update($courseEl);
        if($request->school) {
            $cid->school()->sync($request->school);
        }
        if($request->dept) {
            $cid->department()->sync($request->dept);
        }
        if($request->hasFile('clfile'))
        {
            $filenameWithExt = $request->file('clfile')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('clfile')->getClientOriginalExtension();

            $fileNameToStore=$cid->course_code.'.jpg';
            $destinationPath = public_path('/storage/courses/image/'.$fileNameToStore);
            $resize_image = Image::make($request->file('clfile')->getRealPath());
            $resize_image->resize(360, 360, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->orientate();
            $resize_image->save($destinationPath,'80','jpg');

        }
        if($request->hasFile('weblink'))
        {
            $filenameWithExt = $request->file('weblink')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('weblink')->getClientOriginalExtension();

            $fileNameToStore=$cid->syllabus;
            $path = $request->file('weblink')->storeAs('public/courses/syllabus',$fileNameToStore);

        }
        return redirect(route('admin.Course'))->with('success', 'Successfully Created!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $cid)
    {
        $cid->delete();

        session()->flash('success', 'Deleted Successfully');

        return redirect()->back();
    }
    public function restore($cid)
    {
        Course::onlyTrashed()->where('course_code', $cid)->restore();

        session()->flash('success', 'Restore Successfully');

        return redirect()->back();
    }
}
