@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Profile Photo</h4>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                             @if(file_exists(public_path('storage/faculty/'.$fid->faculty_id.'.jpg')))
                                <img src="{{URL::asset('storage/faculty/'.$fid->faculty_id.'.jpg')}}"  class="img-responsive" alt="avatar">
                                 @else
                                <img src="{{URL::asset('storage/faculty/avatar.png')}}"  class="img-responsive" alt="avatar">
                            @endIf

                        </div>
                        <div class="col-sm-4">
                            <form method="post" enctype="multipart/form-data" action="{{route('admin.addprofilPic',$fid->faculty_id)}}" >
                                @csrf
                                <div class="form-group">
                                    <p></p>
                                    <input type="file" name="profile" class="filestyle" data-buttonname="btn-dark" required>
                                </div>

                                <input type="submit" name="fileupload" value="Upload" class="button btn-dark btn-lg">
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Details</h4><p style="color: firebrick"></p>
                    {!! Form::open(['route' => ['admin.editFacultydb',$fid->faculty_id],'class'=>'form-horizontal','role'=>'form']) !!}
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="facultyid">Faculty ID</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" readonly value ="{{ $fid->faculty_id }}"  id="static">
                            </div>
                            <label class="col-sm-2 control-label" for="status">Status</label>
                            <div class="col-sm-2">
                                {!! Form::select('status', ['oncampus'=>'On Campus', 'visiting'=>'Visting'], $fid->status,['class'=>'form-control']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="fname">Name</label>
                            <div class="col-sm-2">
                                {!! Form::select('title', ['Mr'=>'MR.', 'Ms'=>'MS.','Dr'=>'DR.'], $fid->title,['class'=>'form-control']); !!}
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{ $fid->givenName }}" name="fname" id="fname">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{ $fid->familyName }}" name="lname" id="lname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email" class="form-control" value="{{ $fid->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="desgn">Designation</label>
                            <div class="col-sm-10">
                                {!! Form::select('designation[]', $designation, $fid->designations->pluck('id'),['class'=>'form-control tag_selector','multiple']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Website</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="website" id="website" value="{{ $fid->website }}" id="example-text-input">
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="school">Schools</label>
                        <div class="col-sm-4">
                            {!! Form::select('school[]', $school, $fid->schools->pluck('school_code'),['class'=>'form-control tag_selector','multiple']); !!}
                        </div>
                        <label class="col-sm-2 control-label" for="school">DEPT</label>
                        <div class="col-sm-4">
                            {!! Form::select('dept[]', $depart, $fid->departments->pluck('depart_code'),['class'=>'form-control tag_selector','multiple']); !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label " for="qualification">Academic Qualification</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" rows="9" id="qualification" name="qualification" >{{isset($fid->facultyDet->qualification)? $fid->facultyDet->qualification:'' }}</textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label " for="experience">Experience</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" rows="9" id="experience" name="experience" >{{isset($fid->facultyDet->experience)? $fid->facultyDet->experience:'' }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label " for="works">Works</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" rows="9" id="works" name="works" >{{isset($fid->facultyDet->works)? $fid->facultyDet->works:'' }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label " for="awards">Career Highlights</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" rows="9" id="awards" name="awards" >{{isset($fid->facultyDet->awards)? $fid->facultyDet->awards:'' }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label " for="publications">Publications</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" rows="9" id="publications" name="publications" >{{isset($fid->facultyDet->publications)? $fid->facultyDet->publications:'' }}</textarea>
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <button type="submit" name="sbtn" class="btn btn-success waves-effect waves-light m-l-10">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div>
        <!-- col -->
    </div>
    <!-- End row -->
@endsection
