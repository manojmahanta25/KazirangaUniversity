@extends('adpanel.rectra.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Details</h4>
                    {!! Form::open(['route' => 'admin.addDesgndb','class'=>'form-horizontal','role'=>'form']) !!}
                    @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="facultyid">Faculty ID</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" readonly value ="KU -"  id="static">
                            </div>
                            <div class="col-sm-2">
                                <input data-parsley-type="number"  type="text" class="form-control"  placeholder="Enter ID" id="facid" name="facid" required >
                            </div>
                            <label class="col-sm-2 control-label" for="status">Status</label>
                            <div class="col-sm-2">
                                <select type="text" class="form-control" id="status" name="status" required>
                                    <option value="oncampus" selected>On Campus</option>
                                    <option value="visiting">Visting</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="fname">Name</label>
                            <div class="col-sm-2">
                                <select type="text" class="form-control" id="title" name="title" required>
                                    <option value="Mr" selected>MR.</option>
                                    <option value="Ms">MS.</option>
                                    <option value="Dr">DR.</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder = "First name" id="fname" name="fname" required>
                            </div>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email" class="form-control"  value="@kazirangauniversity.in" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="designation">Designation</label>
                            <div class="col-sm-10">
                                {!! Form::select('designation[]', $designation, 'null',['class'=>'form-control tag_selector','multiple']); !!}
                                <span class="help-block"><small>Only use commma ( , ) to seperate the designation. Don't write "Dean" or "Hod" as designation.</small></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="school">Schools</label>
                            <div class="col-sm-4">
                                {!! Form::select('school[]', $school, 'null',['class'=>'form-control tag_selector','multiple']); !!}
                            </div>
                            <label class="col-sm-2 control-label" for="school">DEPT</label>
                            <div class="col-sm-4">
                                {!! Form::select('dept[]', $depart, 'null',['class'=>'form-control tag_selector','multiple']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Check If</label>
                            <div class="col-sm-1 col-md-1 col-xl-1 checkbox checkbox-danger">
                                <input type="checkbox" id="dean" name="dean" onclick="enableDisable(this.checked, 'deansel')">
                                <label for="dean">Dean</label>
                            </div>
                            <div class="col-sm-4 ">
                                {!! Form::select('densel', $school, 'null',['placeholder'=>'Please Select...','id'=>'deansel','class'=>'form-control','disabled']); !!}

                            </div>
                            <div class="col-sm-1 col-md-1 col-xl-1 checkbox checkbox-success">
                                <input type="checkbox" id="hod" name="hod" onclick="enableDisable(this.checked, 'hodsel')">
                                <label for="hod">HOD</label>
                            </div>
                            <div class="col-sm-4 ">
                                {!! Form::select('hodsel', $depart, 'null',['placeholder'=>'Please Select...','id'=>'hodsel','class'=>'form-control','disabled']); !!}

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

@section('javascript')
    <script language="javascript">

        function enableDisable(bEnable, textBoxID)
        {
            document.getElementById(textBoxID).disabled = !bEnable
        }
    </script>
    @endsection
