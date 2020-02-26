@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="m-b-30 m-t-0">Designation</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL Order</th>
                            <th>ID</th>
                            <th>Name </th>
                            <th>Visible</th>
                            <th>Total Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($desglist as $row)
                            <tr>
                                <td>{{$row->d_priority}}</td>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}} </td>
                                <td>{{($row->d_visible)? 'Visible': 'Invisible'}}</td>
                                <td>{{count($row->faculty)}}</td>
                                <td><a class="badge badge-dark" href="{{route('admin.editDesgn',$row->id)}}">Edit</a> <button class="badge badge-danger" onclick="event.preventDefault();
                                        document.getElementById('deleteformdd{{$row->id}}').submit();"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                <form id="deleteformdd{{$row->id}}" method="post" action="{{route('admin.deleteDesgn',$row->id)}}">
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
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.prioritysetDesgn')}}">
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="schoolid">Designation</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Enter Designation ID" name="desid"  id="desid" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Enter Designation ID before whom" name="desidafter"  id="desidafter" required>
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

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-t-0 m-b-30">Create Designation</h4>
                        {!! Form::open(['route' => 'admin.addDesgndb','class'=>'form-horizontal','role'=>'form']) !!}
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="depart_code">Designation</label>
                            <div class="col-sm-6">
                                <input  type="text" class="form-control"  placeholder="Enter Designation" id="name" name="name" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="depart_name">Visible</label>
                            <div class="col-sm-1 col-md-1 col-xl-1 checkbox checkbox-primary">
                                <input type="checkbox" id="visible" name="visible" checked>
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


@endsection
