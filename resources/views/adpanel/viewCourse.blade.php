@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.addCourse')}}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>

                    <h4 class="m-b-30 m-t-0">Course</h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course</th>
                            <th>Type</th>
                            <th>Duration</th>
                            <th>National Fee</th>
                            <th>International Fee</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($facdet as $row)
                            <tr>
                                <td>{{ $row->course_code }}</td>
                                <td>{{$row->course_name}}</td>
                                <td>{{$row->type}}</td>
                                <td>{{$row->duration}}</td>
                                <td>{{$row->fee_inr}}</td>
                                <td>{{$row->fee_usd}}</td>
                                <td><a class="badge badge-dark" href="{{route('admin.editCourse',$row->course_code)}}">Edit</a> <button class="badge badge-danger" onclick="event.preventDefault();
                                        document.getElementById('deleteform{{$row->course_code}}').submit();"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                <form id="deleteform{{$row->course_code}}" method="post" action="{{route('admin.deleteCourse',$row->course_code)}}">
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-b-30 m-t-0">Course Deleted</h4>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course</th>
                            <th>Type</th>
                            <th>Duration</th>
                            <th>National Fee</th>
                            <th>International Fee</th>
                            <th>Options</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($facdetTrash as $row)
                            <tr>
                                <td>{{ $row->course_code }}</td>
                                <td>{{$row->course_name}}</td>
                                <td>{{$row->type}}</td>
                                <td>{{$row->duration}}</td>
                                <td>{{$row->fee_inr}}</td>
                                <td>{{$row->fee_usd}}</td>
                                <td> <button class="badge badge-success" onclick="event.preventDefault();
                                        document.getElementById('restoreform{{$row->course_code}}').submit();"><i class="fa fa-recycle" aria-hidden="true"></i></button></td>
                                <form id="restoreform{{$row->course_code}}" method="post" action="{{route('admin.restoreCourse',$row->course_code)}}">
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
