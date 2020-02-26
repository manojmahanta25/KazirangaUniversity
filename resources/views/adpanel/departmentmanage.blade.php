@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.addDept')}}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
                    <h4 class="m-b-30 m-t-0">Department</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Dept</th>
                            <th>Name</th>
                            <th>School</th>
                            <th>Total Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deptlist as $row)
                            <tr>
                                <td>{{$row->depart_code}}</td>
                                <td>{{$row->depart_name}} </td>
                                <td>{{$row->school}}</td>
                                <td>{{count($row->faculty)}}</td>
                                <td><a class="badge badge-dark" href="{{route('admin.editDept',$row->depart_code)}}">Edit</a> <button class="badge badge-danger" onclick="event.preventDefault();
                                        document.getElementById('deleteformd{{$row->depart_code}}').submit();"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                <form id="deleteformd{{$row->depart_code}}" method="post" action="{{route('admin.deleteDept',$row->depart_code)}}">
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

@endsection
