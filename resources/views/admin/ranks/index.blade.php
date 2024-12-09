@extends('theme.layout')
@section('content')


    {{-- message --}}

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Employee Faculty Update Ranks</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employee Faculty Ranks</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#updateRankModal">
                            Open Update Rank
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <!-- Content Starts -->





            <!-- Modal -->
            <div class="modal fade" id="updateRankModal" tabindex="-1" aria-labelledby="updateRankModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateRankModalLabel">Update Employee Rank</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="{{ route('rank.update') }}" method="POST">
                                @csrf

                                <!-- Employee Input -->
                                <div class="mb-3">
                                    <label for="r_emp" class="form-label">Employee</label>
                                    <input type="text" id="r_emp" name="r_emp" class="form-control"
                                        autocomplete="off">
                                    <ul id="r_emp_results" class="position-absolute w-100 list-unstyled shadow bg-white"
                                        style="z-index: 1000; display: none;"></ul>
                                </div>

                                <!-- Update Field Input -->
                                <div class="mb-3">
                                    <label for="updateField" class="form-label">Update Field</label>
                                    <input type="text" id="updateField" name="updated_field" class="form-control"
                                        placeholder="Enter Update Field">
                                </div>

                                <!-- Update Qualification Input -->
                                <div class="mb-3">
                                    <label for="updateQualification" class="form-label">Update Qualification</label>
                                    <input type="text" id="updateQualification" name="updated_qua" class="form-control"
                                        placeholder="Enter Update Qualification">
                                </div>

                                <!-- Rank Dropdown -->
                                <div class="mb-3">
                                    <label for="updated_rank" class="form-label">Ranks</label>
                                    <select class="form-select" id="updated_rank" name="updated_rank">
                                        <option value="">Select Ranks</option>
                                        <option value="Instructor I">Instructor I</option>
                                        <option value="Instructor II">Instructor II</option>
                                        <option value="Instructor III">Instructor III</option>
                                        <option value="Assistant Professor I">Assistant Professor I</option>
                                        <option value="Assistant Professor II">Assistant Professor II</option>
                                        <option value="Assistant Professor III">Assistant Professor III</option>
                                        <option value="Assistant Professor IV">Assistant Professor IV</option>
                                    </select>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">

                        </table>
                    </div>
                </div>
            </div>
            <!-- /Content End -->
        </div>
        <!-- /Page Content -->

        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title"></h4>
                    <div class="nk-block-des">

                    </div>
                </div>
            </div>
            <!-- resources/views/table-view.blade.php -->
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Field</th>
                                <th>Current Qualification</th>
                                <th>Current Rank (A.Y.)</th>
                                <th>Updated Field</th>
                                <th>Updated Qualification</th>
                                <th>Updated Rank (A.Y.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ranks as $rank)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rank->masterlist->first_name }} {{ $rank->masterlist->last_name }}</td>
                                    <td>{{ $rank->field }}</td>
                                    <td>{{ $rank->current_qua }}</td>
                                    <td>{{ $rank->current_rank }}</td>
                                    <td>{{ $rank->updated_field }}</td>
                                    <td>{{ $rank->updated_qua }}</td>
                                    <td>{{ $rank->updated_rank }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- .card-preview -->
        </div>
    </div>




    <!-- Button to Open the Modal -->
    <!-- Button to Trigger Modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrationModal">
        View Data
    </button>

    <!-- Modal Structure -->
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Close Button -->
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>

                <div class="modal-body">
                    <h1 class="nk-block-title page-title">Data</h1>
                    <hr class="mt-2 mb-2">

                    <!-- Success and Error Messages -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Registration Form -->
                    <form action="{{ route('employee.save') }}" method="POST">
                        @csrf
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_fn">Full Name <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Full Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" class="form-control" id="m_emp" name="m_emp"
                                        placeholder="Enter Full Name here..." required>
                                    <ul id="m_emp_results" class="autocomplete-list"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="role">Current Ranks <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Select a Ranks here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-user"></em>
                                    </div>
                                    <select class="form-control" id="role" name="role" required
                                        onchange="filterPositionOptions()">

                                        <option value="">Select Rank</option>
                                        <option value="instructor-i">Instructor I</option>
                                        <option value="instructor-ii">Instructor II</option>
                                        <option value="instructor-iii">Instructor III</option>
                                        <option value="assistant-professor-i">Assistant Professor I</option>
                                        <option value="assistant-professor-ii">Assistant Professor II</option>
                                        <option value="assistant-professor-iii">Assistant Professor III</option>
                                        <option value="assistant-professor-iv">Assistant Professor IV</option>


                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_fn">Current Qualification here. <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Current Qualification here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" class="form-control" id="current_qua" name="current_qua"
                                        placeholder="Enter Field here..." required value="">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="inp_fn">Current Field <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Field here.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text" class="form-control" id="field" name="field"
                                        placeholder="Enter Field here..." required value="">
                                </div>
                            </div>
                        </div>

                        <!-- Role Selection -->


                        <!-- Position Selection (Filtered by Role) -->


                        <!-- Submit Button -->
                        <div class="row mt-4">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <em class="icon ni ni-save"></em>&ensp; Submit New Employee
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- JavaScript to Filter Positions Based on Role -->
                    {{-- <script>
                        function filterPositionOptions() {
                            const role = document.getElementById("role").value;
                            const staffOptions = document.querySelectorAll(".staff-options option");
                            const facultyOptions = document.querySelectorAll(".faculty-options option");

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
                    </script> --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/search.js"></script>

    <script>
        $(document).ready(function() {
            $('#r_emp').on('keyup', function() {
                var query = $(this).val();

                if (query.length >= 2) {

                    $('#r_emp_results').html(
                        '<li class="text-center"><div class="spinner-border spinner-border-sm" role="status"></div> Searching...</li>'
                    ).show();

                    $.ajax({
                        url: "{{ route('employees.search') }}",
                        type: "GET",
                        data: {
                            'query': query
                        },
                        success: function(data) {
                            $('#r_emp_results').empty();
                            console.log('Response:', data);

                            if (data.length > 0) {
                                $.each(data, function(key, value) {
                                    var fullName = value.first_name + ' ' + value
                                        .last_name;

                                    $('#r_emp_results').append(
                                        '<li class="p-2 hover:bg-gray-100" data-id="' +
                                        value.id + '">' +
                                        '<div class="employee-name">' + fullName +
                                        '</div>' +
                                        '<div class="employee-details">' +
                                        (value.job_type ? value
                                            .job_type : 'No Position') +
                                        ' • ' +
                                        (value.department ? value.department :
                                            'No Department') +
                                        '</div>' +
                                        '</li>'
                                    );
                                });
                                $('#r_emp_results').show();
                            } else {
                                $('#r_emp_results').html(
                                    '<li class="text-center">No results found</li>').show();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            $('#r_emp_results').html(
                                '<li class="text-center text-danger">Error occurred while searching</li>'
                            ).show();
                        }
                    });
                } else {
                    $('#r_emp_results').hide();
                }
            });

            $(document).on('click', '#r_emp_results li', function() {
                if ($(this).data('id')) {
                    var name = $(this).find('.employee-name').text();
                    var id = $(this).data('id');
                    $('#r_emp').val(name);
                    $('#r_emp_results').hide();
                }
            });


            $(document).on('click', function(e) {
                if (!$(e.target).closest('.form-group').length) {
                    $('#r_emp_results').hide();
                }
            });


            $('#r_emp').on('focus', function() {
                if ($(this).val().length >= 2) {
                    $('#r_emp_results').show();
                }
            });
        });

        //////
        $(document).ready(function() {
            var searchTimeout;
            var autocompleteResults = $('#m_emp_results');

            $('#m_emp').on('keyup', function() {
                clearTimeout(searchTimeout);
                var query = $(this).val();

                if (query.length < 2) {
                    autocompleteResults.hide().empty();
                    return;
                }

                autocompleteResults.html(
                    '<li class="text-center"><div class="spinner-border spinner-border-sm" role="status"></div> Searching...</li>'
                ).show();

                searchTimeout = setTimeout(function() {
                    $.ajax({
                        url: "{{ route('masterlist.search') }}",
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            autocompleteResults.empty();

                            if (data.length > 0) {
                                data.forEach(function(employee) {
                                    var fullName = employee.first_name + ' ' +
                                        (employee.middle_name ? employee
                                            .middle_name + ' ' : '') +
                                        employee.last_name;

                                    var listItem = $('<li>')
                                        .attr('data-id', employee.id)
                                        .html(
                                            '<div class="employee-name">' +
                                            fullName + '</div>' +
                                            '<div class="employee-details">' +
                                            (employee.job_type ? employee
                                                .job_type : 'No Position'
                                            ) +
                                            ' • ' +
                                            (employee.department ? employee
                                                .department : 'No Department') +
                                            '</div>'
                                        );

                                    autocompleteResults.append(listItem);
                                });
                                autocompleteResults.show();
                            } else {
                                autocompleteResults.html(
                                        '<li class="text-center">No results found</li>')
                                    .show();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Search error:', error);
                            autocompleteResults.html(
                                '<li class="text-center text-danger">Error occurred while searching</li>'
                            ).show();
                        }
                    });
                }, 300);
            });


            $(document).on('click', '#m_emp_results li', function() {
                if ($(this).data('id')) {
                    var selectedName = $(this).find('.employee-name').text();
                    $('#m_emp').val(selectedName);
                    autocompleteResults.hide();
                }
            });


            $(document).on('click', function(e) {
                if (!$(e.target).closest('.form-control-wrap').length) {
                    autocompleteResults.hide();
                }
            });


            $('#m_emp').on('focus', function() {
                if ($(this).val().length >= 2) {
                    autocompleteResults.show();
                }
            });
        });
    </script>





    {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}


@endsection
