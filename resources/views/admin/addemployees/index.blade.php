@extends('theme.layout')
@section('content')
    <h4 class="header">Manage Employee</h4>
    <div class="nk-block-head-content">
        <div class="nk-block-des text-soft">
            <p>List of employeess added.</p>
        </div>
    </div>


    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;
                                Register New Employee

                            </button>

                        </span>
                        <table class="datatable-init-export nowrap table" data-export-title="Export">
                            <thead>
                                <tr>
                                    <th width="20">#</th>
                                    <th>Employee Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Department/Designation</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($addemployees as $key => $employee)
                                    <tr style="cursor: pointer" data-role="{{ $employee->role }}">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $employee->emp_first_name }} {{ $employee->emp_last_name }}</td>
                                        <td>{{ $employee->emp_phone_number }}</td>
                                        <td>{{ $employee->emp_email }}</td>
                                        <td>{{ $employee->department->depart_name ?? 'No Department' }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-block btn-light bg-white text-dark">
                                                <em class="icon ni ni-edit"></em>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title">Register New Employee</h1>
                    <hr class="mt-2 mb-2">

                    {{-- Display success message --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Display error messages --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Registration Form --}}
                    <form action="{{ route('employee.save') }}" method="POST">
                        @csrf
                        <!-- First Name -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_fn">First Name <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the First Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_fn" name="inp_fn"
                                        placeholder="Enter First Name here..." required value="{{ old('inp_fn') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_ln">Last Name <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Last Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_ln" name="inp_ln"
                                        placeholder="Enter Last Name here..." required value="{{ old('inp_ln') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_email">Email <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the email address here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-mail"></em>
                                    </div>
                                    <input type="email" class="form-control" id="inp_email" name="inp_email"
                                        placeholder="Enter Email here..." required value="{{ old('inp_email') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_phone">Phone Number</label>
                                    <span class="form-note">Specify the phone number here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-call"></em>
                                    </div>
                                    <input type="text" class="form-control" id="inp_phone" name="inp_phone"
                                        placeholder="Enter Phone Number here..." value="{{ old('inp_phone') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Role -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="role">Role <b class="text-danger">*</b></label>
                                    <span class="form-note">Select a role here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-user"></em>
                                    </div>
                                    <select class="form-control" id="role" name="role" required
                                        onchange="filterPositionOptions()">
                                        <option value="">Select role</option>
                                        <option value="staff">Staff</option>
                                        <option value="faculty">Faculty</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Position -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="position">Position <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Select a Position here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-user"></em>
                                    </div>
                                    <select class="form-control" id="position" name="department_id" required>

                                        <option value="">Select Position</option>
                                        @foreach ($staffDepartments as $staff)
                                            <option value="{{ $staff->department_id }}" class="staff-option">
                                                {{ $staff->depart_name }}</option>
                                        @endforeach
                                        @foreach ($facultyDepartments as $faculty)
                                            <option value="{{ $faculty->department_id }}" class="faculty-option">
                                                {{ $faculty->depart_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mt-4">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <em class="icon ni ni-save"></em>&ensp;
                                    Submit New Employee
                                </button>
                            </div>
                        </div>
                    </form>

                    <script>
                        function filterPositionOptions() {
                            const role = document.getElementById("role").value;
                            const staffOptions = document.querySelectorAll(".staff-option");
                            const facultyOptions = document.querySelectorAll(".faculty-option");

                            if (role === "staff") {
                                staffOptions.forEach(option => option.style.display = "block");
                                facultyOptions.forEach(option => option.style.display = "none");
                            } else if (role === "faculty") {
                                staffOptions.forEach(option => option.style.display = "none");
                                facultyOptions.forEach(option => option.style.display = "block");
                            } else {
                                staffOptions.forEach(option => option.style.display = "none");
                                facultyOptions.forEach(option => option.style.display = "none");
                            }
                        }
                    </script>
                </div>
            @endsection
