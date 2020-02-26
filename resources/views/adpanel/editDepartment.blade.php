@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Details</h4>
                    {!! Form::open(['route' => ['admin.editDeptdb',$did->depart_code],'class'=>'form-horizontal','role'=>'form']) !!}
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="depart_code">Department Code</label>
                        <div class="col-sm-6">
                            <input data-parsley-type="number" readonly type="text" class="form-control" value="{{$did->depart_code}}" placeholder="Enter Department Code" id="depart_code" name="depart_code" required >
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="depart_name">Department Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="{{$did->depart_name}}" placeholder = "Department Name" id="depart_name" name="depart_name" required>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="school">School</label>
                        <div class="col-sm-10">
                            {!! Form::select('school', $schoollist, $did->school,['placeholder'=>'Please Select...','id'=>'school','class'=>'form-control']); !!}
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
