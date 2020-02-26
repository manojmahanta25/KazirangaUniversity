@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Details</h4>
                    {!! Form::open(['route' => ['admin.editDesgndb',$des->id],'class'=>'form-horizontal','role'=>'form']) !!}
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="depart_code">Designation</label>
                        <div class="col-sm-6">
                            <input  type="text" class="form-control" value="{{$des->name}}"  placeholder="Enter Designation" id="name" name="name" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="depart_name">Visible</label>
                        <div class="col-sm-1 col-md-1 col-xl-1 checkbox checkbox-primary">
                            <input type="checkbox" id="visible" name="visible" {{($des->d_visible)? 'checked':''}}>
                            <label for="visible">visible</label>
                        </div>

                    </div>
                    <div class="col-sm-2">

                        <button type="submit" class="btn btn-success waves-effect waves-light m-l-10"  name="sbtndes">Submit</button>
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
