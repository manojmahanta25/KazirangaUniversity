@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Add Course</h4>
                    {!! Form::open(['enctype'=>'multipart/form-data','route' => 'admin.addCoursedb','class'=>'form-horizontal','role'=>'form']) !!}
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="type">Type</label>
                        <div class="col-sm-4">
                            {!! Form::select('type',['UG'=>'Under Graduate','PG'=>'Post Graduate','INT'=>'Integrated','L'=>'Lateral','PhD'=>'Doctor of Philosophy'],null,['id'=>'type','placeholder'=>'please select','class'=>'form-control']) !!}
                        </div>
                        <label class="col-sm-2 control-label" for="code">Course Code</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder = "Enter Course Code" id="code" name="code" >
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="name">Course Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder = "Enter Course Name" id="name" name="name" >
                        </div>
                        <label class="col-sm-2 control-label" for="name">Image</label>
                        <div class="col-sm-4">
                            <input type="file" name="clfile" class="filestyle" data-buttonname="btn-dark">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="weblink">Syllabus Link</label>
                        <div class="col-sm-10">
                            <input type="file" name="weblink" id="weblink" class="filestyle" data-buttonname="btn-dark">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="recruiment">Campus recruitment</label>
                        <div class="col-sm-4">
                            {!! Form::select('recruiment',['YES'=>'Yes','NO'=>'No'],null,['id'=>'recruiment','placeholder'=>'please select','class'=>'form-control']) !!}
                        </div>
                        <label class="control-label col-sm-2" for="duration">Duration</label>
                        <div class="col-sm-4">
                            {!! Form::select('duration',['1 year'=>'1 year','2 years'=>'2 years','3 years'=>'3 years','4 years'=>'4 years','4.6 years'=>'4.6 years','5 years'=>'5 years','6 years'=>'6 years','6.6 years'=>'6.6 years','8 years'=>'8 years'],null,['id'=>'duration','placeholder'=>'please select','class'=>'form-control']) !!}

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="skill">Skill level</label>
                        <div class="col-sm-4">
                            {!! Form::select('skill',['ALL LEVEL'=>'All level'],null,['id'=>'skill','placeholder'=>'please select','class'=>'form-control']) !!}
                        </div>
                        <label class="control-label col-sm-2" for="lang">Language</label>
                        <div class="col-sm-4">
                            {!! Form::select('lang',['English'=>'English'],null,['id'=>'lang','placeholder'=>'please select','class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="student">Batch Size</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Number of student" id="student" name="student" required>
                        </div>
                        <label class="control-label col-sm-2" for="projects">Projects</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Number of projects" id="projects" name="projects" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="internships">Internships</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Number of internships" id="internships" name="internships" required>
                        </div>
                        <label class="control-label col-sm-2" for="mode">Mode</label>
                        <div class="col-sm-4">
                            {!! Form::select('mode',['Full Time Campus Based'=>'Full Time Campus Based','Part Time Campus Based'=>'Part Time Campus Based'],null,['id'=>'mode','placeholder'=>'please select','class'=>'form-control']) !!}

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="internships">National Fee</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" placeholder="National Fee" id="nfee" name="nfee" required>
                        </div>
                        <label class="control-label col-sm-2" for="internships">International Fee</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" placeholder="International Fee" id="intfee" name="intfee" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="description">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" class="form-control summernote" rows="9"></textarea>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="eligibility">Eligibility</label>
                        <div class="col-sm-10">
                            <textarea name="eligibility" id="eligibility" class="form-control summernote" rows="9"></textarea>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="school">School</label>
                        <div class="col-sm-4">
                            {!! Form::select('school[]', $school, 'null',['placeholder'=>'Please Select...','id'=>'school','class'=>'form-control tag_selector','multiple']); !!}
                        </div>
                        <label class="col-sm-2 control-label" for="dept">Department</label>
                        <div class="col-sm-4">
                            {!! Form::select('dept[]', $depart, 'null',['placeholder'=>'Please Select...','id'=>'dept','class'=>'form-control tag_selector','multiple']); !!}
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-l-10"  name="sbtnfac">Submit</button>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col -->
    </div>
    <!-- End row -->
@endsection
