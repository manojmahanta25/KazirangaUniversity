@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Details</h4>
                    {!! Form::open(['route' => 'admin.addSchooldb','class'=>'form-horizontal','role'=>'form']) !!}
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="school_code">School Code</label>
                        <div class="col-sm-6">
                            <input data-parsley-type="number"  type="text" class="form-control"  placeholder="Enter School Code" id="school_code" name="school_code" required >
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="school_name">School Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder = "School Name" id="school_name" name="school_name" required>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="meta_key">Meta Keywords</label>
                        <div class="col-sm-10">
                            <textarea  id="meta_key" name="smeta_key" class="form-control" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="sdes_key">Meta Description</label>
                        <div class="col-sm-10">
                            <textarea type="text" id="sdes_key" name="sdes_key" class="form-control" ></textarea>
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
