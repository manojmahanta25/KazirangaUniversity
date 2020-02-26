@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.addSchool')}}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
                    <h4 class="m-b-30 m-t-0">School</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL Order</th>
                            <th>Name </th>
                            <th>Code</th>
                            <th>Total Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($schoollist as $row)
                            <tr>
                                <td>{{$row->s_order}}</td>
                                <td>{{$row->school_name}} </td>
                                <td>{{$row->school_code}}</td>
                                <td>{{count($row->faculty)}}</td>
                                <td><a class="badge badge-dark" href="{{route('admin.editSchool',$row->school_code)}}">Edit</a> <button class="badge badge-danger" onclick="event.preventDefault();
                                        document.getElementById('deleteforms{{$row->school_code}}').submit();"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                <form id="deleteforms{{$row->school_code}}" method="post" action="{{route('admin.deleteSchool',$row->school_code)}}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Set Order</h4>
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.prioritysetSchool')}}">
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="schoolid">School</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Enter School Code" name="schoolid"  id="schoolid" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Enter School Code before whom" name="schoolidafter"  id="schoolidafter" required>
                            </div>
                            <div class="col-sm-2">
                                @csrf
                                <button type="submit" class="btn btn-success waves-effect waves-light m-l-10"  name="sbtnpriority">Submit</button>
                            </div>
                        </div>

                    </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
@endsection
