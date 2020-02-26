@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Details</h4>
                    {!! Form::open(['enctype'=>'multipart/form-data','route' => 'admin.addCldb','class'=>'form-horizontal','role'=>'form']) !!}
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="depart_code">Type</label>
                        <div class="col-sm-6">
                            {!! Form::select('type',['cl'=>'Collaboration','kp'=>'Knowledge Partner'],null,['placeholder'=>'please select','class'=>'form-control']) !!}
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="name">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder = "Enter Name" id="name" name="name" >
                        </div>
                        <label class="col-sm-2 control-label" for="name">Image</label>
                        <div class="col-sm-4">
                            <input type="file" name="clfile" class="filestyle" data-buttonname="btn-dark">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="weblink">WebLink</label>
                        <div class="col-sm-10">
                            <input type="url" name="weblink" id="weblink" class="form-control" placeholder = "Enter website link" >
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="description">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" class="form-control summernote" rows="9"></textarea>
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
