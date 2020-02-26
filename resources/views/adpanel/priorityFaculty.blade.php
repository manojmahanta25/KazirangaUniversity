@extends('adpanel.rectra.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="m-b-30 m-t-0">Faculty</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Priority</th>
                        <th>ID</th>
                        <th>Name </th>
                        <th>Email</th>
                        <th>Deptartment</th>
                        <th>Designation</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($facdet as $row)
                        <tr>
                            <td>{{$row->priority}} <button class="badge badge-danger" onclick="event.preventDefault();
                                    document.getElementById('deleteform{{$row->faculty_id}}').submit();"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                            <td>{{ $row->faculty_id }}</td>
                            <td>{{$row->title}}. {{$row->givenName}} {{$row->familyName}}
                                @if($row->isDean)<span class="badge badge-primary badge-pill" style="float: right;">DEAN</span>@endif
                                @if($row->isHod)<span class="badge badge-warning badge-pill" style="float: right;">HOD</span>@endif
                            </td>
                            <td>{{$row->email}}</td>
                            <td>@foreach($row->departments->pluck('depart_code') as $dept)
                                    <span class="badge badge-primary badge-pill"">{{$dept}}</span> @endforeach
                            </td>
                            <td>@foreach($row->designations->pluck('name') as $name)
                                    <span class="badge badge-primary badge-pill"">{{$name}}</span> @endforeach</td>

                            <form id="deleteform{{$row->faculty_id}}" method="post" action="{{route('admin.deleteFaculty',$row->faculty_id)}}">
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
                <h4 class="m-t-0 m-b-30">SET Priority After</h4>
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.prioritysetFaculty')}}">
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="facid">Faculty ID</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Enter Faculty ID" name="facid"  id="facid" required>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Enter Faculty ID before whom" name="facidafter"  id="facidafter" required>
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
