@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.addCl')}}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
                    <h4 class="m-b-30 m-t-0">Collaboration</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL Order</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Total School</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collaborations as $row)
                            <tr>
                                <td>{{$row->priority}}</td>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}} </td>
                                <td>{{count($row->school)}}</td>
                                <td><a class="badge badge-dark" href="{{route('admin.editCl',$row->id)}}">Edit</a> <button class="badge badge-danger" onclick="event.preventDefault();
                                        document.getElementById('deleteformdd{{$row->id}}').submit();"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                <form id="deleteformdd{{$row->id}}" method="post" action="{{route('admin.deleteCl',$row->id)}}">
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
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.prioritysetCl')}}">
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="schoolid">Collaboration</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Enter Collaboration ID" name="cid"  id="cid" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Enter Collaboration ID on whom" name="cidafter"  id="cidafter" required>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-b-30 m-t-0">Faculty Deleted</h4>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>SL Order</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Total School</th>
                                    <th>Options</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ClTrash as $row)
                                    <tr>
                                        <td>{{$row->priority}}</td>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}} </td>
                                        <td>{{count($row->school)}}</td>
                                        <td> <button class="badge badge-success" onclick="event.preventDefault();
                                                document.getElementById('restoreform{{$row->id}}').submit();"><i class="fa fa-recycle" aria-hidden="true"></i></button></td>
                                        <form id="restoreform{{$row->id}}" method="post" action="{{route('admin.restoreCl',$row->id)}}">
                                            @method('PUT')
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
@endsection
