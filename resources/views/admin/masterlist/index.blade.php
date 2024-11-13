@extends('theme.layout')
@section('content')

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h4>Employee Master List</h4>
            <div class="d-flex gap-2">

                <!-- Import form -->
                <form action="{{ route('employees.import') }}" method="POST" enctype="multipart/form-data"
                    class="d-flex align-items-center">
                    @csrf
                    <div class="me-2">
                        <label for="file" class="form-label">Choose Spreadsheet</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
            </div>
        </div>

        <p></p>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display error message -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Employee Table or No Data Message -->
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">

            </div>
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col"><span class="sub-text">#</span></th>
                                <th class="nk-tb-col"><span class="sub-text">First Name</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Last Name</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Middle Name</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Gender</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Birthdate</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Position Title</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Contact Number</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Educational Attainment</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Salary</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Email</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Work Status</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Action</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $index => $employee)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->middle_name }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->status }}</td>
                                    <td>{{ \Carbon\Carbon::parse($employee->birthdate)->format('m/d/Y') }}</td>
                                    <td>{{ $employee->position_title }}</td>
                                    <td>{{ $employee->contact_number }}</td>
                                    <td>{{ $employee->educational_attainment }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->work_status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"
                                            onclick="openEditModal({{ $employee->id }})">Edit</button>
                                        <form action="{{ route('masterlist.destroy', $employee->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <!-- Edit Modal -->

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross-sm"></em>
                    </a>
                    <div class="modal-body">
                        <h1 class="nk-block-title page-title">Edit Employee</h1>
                        <hr class="mt-2 mb-2">

                        <form id="editEmployeeForm" method="POST">
                            @csrf
                            <input type="hidden" id="edit_employee_id" name="employee_id">
                            <!-- First Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_first_name">First Name <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit_first_name" name="first_name"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <!-- Last Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_last_name">Last Name <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit_last_name" name="last_name"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <!-- Middle Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_middle_name">Middle Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit_middle_name"
                                            name="middle_name">
                                    </div>
                                </div>
                            </div>

                            <!-- Gender -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_gender">Gender <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="edit_gender" name="gender" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_status">Status <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="edit_status" name="status" required>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="separated">Separated</option>
                                            <option value="widowed">Widowed</option>
                                            <option value="divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Birthdate -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_birthdate">Birthdate <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="edit_birthdate" name="birthdate"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <!-- Position Title -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_position_title">Position Title <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="edit_position_title" name="position_title"
                                            required>
                                            <option value="">Select Position Title</option>
                                            <option value="watchman">Administrative Aide</option>
                                            <option value="watchman">Watchman</option>
                                            <option value="librarian">Librarian</option>
                                            <option value="maintenance">Maintenance</option>
                                            <option value="professionals">Professionals</option>
                                            <option value="architect">Architect</option>
                                            <option value="office_staff">Office Staff</option>
                                            <option value="utility">Utility</option>
                                            <option value="driver">Driver</option>
                                            <option value="instructor_i">Instructor I</option>
                                            <option value="instructor_ii">Instructor II</option>
                                            <option value="instructor_iii">Instructor III</option>
                                            <option value="assistant_professor_i">Assistant Professor I</option>
                                            <option value="assistant_professor_ii">Assistant Professor II</option>
                                            <option value="assistant_professor_iii">Assistant Professor III</option>
                                            <option value="assistant_professor_iv">Assistant Professor IV</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Number -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_contact_number">Contact Number <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="tel" class="form-control" id="edit_contact_number"
                                            name="contact_number" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Educational Attainment -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_educational_attainment">Educational Attainment
                                            <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="edit_educational_attainment"
                                            name="educational_attainment" required>
                                            <option value="">Select Educational Attainment</option>
                                            <option value="high_school">High School</option>
                                            <option value="associate_degree">Associate Degree</option>
                                            <option value="bachelor_degree">Bachelor's Degree</option>
                                            <option value="master_degree">Master's Degree</option>
                                            <option value="doctorate_degree">Doctorate Degree</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Salary -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_salary">Salary <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="edit_salary" name="salary"
                                            step="0.01" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_email">Email <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="edit_email" name="email"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <!-- Work Status -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="edit_work_status">Work Status <b
                                                class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="edit_work_status" name="work_status" required>
                                            <option value="">Select Work Status</option>
                                            <option value="job_order">Job Order</option>
                                            <option value="permanent">Permanent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->

                            <div class="row mt-4">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script>
            function openEditModal(employeeId) {
                // Clear previous error messages
                $('.is-invalid').removeClass('is-invalid');
                $('.invalid-feedback').remove();

                // Make an AJAX request to get employee data
                $.ajax({
                    url: `/masterlist/${employeeId}/edit`,
                    method: 'GET',
                    success: function(response) {
                        // Populate the form with employee data
                        $('#edit_employee_id').val(employeeId);
                        $('#edit_first_name').val(response.first_name);
                        $('#edit_last_name').val(response.last_name);
                        $('#edit_middle_name').val(response.middle_name);
                        $('#edit_gender').val(response.gender);
                        console.log('Status from response:', response.status);
                        $('#edit_status').val(response.status).trigger('change');
                        $('#edit_birthdate').val(response.birthdate);
                        $('#edit_position_title').val(response.position_title);
                        $('#edit_contact_number').val(response.contact_number);
                        $('#edit_educational_attainment').val(response.educational_attainment);
                        $('#edit_salary').val(response.salary);
                        $('#edit_email').val(response.email);
                        $('#edit_work_status').val(response.work_status);

                        $('#editModal').modal('show');
                    },
                    error: function(xhr) {
                        console.error('Error Response:', xhr.responseText);
                        alert('Error fetching employee data');
                    }
                });
            }

            // Handle form submission
            $('#editEmployeeForm').on('submit', function(e) {
                e.preventDefault();

                const employeeId = $('#edit_employee_id').val();
                const formData = new FormData(this);

                $.ajax({
                    url: `/masterlist/${employeeId}/update`,
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.message) {
                            alert(response.message);
                            // Redirect to the masterlist index page
                            window.location.href = '/masterlist';
                        }
                    },
                    error: function(xhr) {
                        console.error('Error Response:', xhr.responseText);
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(field => {
                                const input = $(`#edit_${field}`);
                                if (input.length) {
                                    input.addClass('is-invalid');
                                    input.after(
                                        `<div class="invalid-feedback">${errors[field][0]}</div>`
                                    );
                                }
                            });
                        } else {
                            alert('An error occurred while updating the employee');
                        }
                    }
                });
            });

            // Clear validation errors when modal is hidden
            $('#editModal').on('hidden.bs.modal', function() {
                $('.is-invalid').removeClass('is-invalid');
                $('.invalid-feedback').remove();
                $('#editEmployeeForm')[0].reset();
            });
        </script>
    </div>

@endsection
