@extends('theme.layout')
@section('content')
    <div class="container mt-5">
        <div class="content-panel-box p-4 border rounded bg-white shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Faculty Master List</h4>
            </div>


            <!-- Viewing Department Button-->
            <div class="nk-block-tools d-flex justify-content-end mb-3">
                <li class="nk-block-tools-opt">
                    <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none">
                        <em class="icon ni ni-plus"></em>
                    </a>
                    <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex">
                        <em class="icon ni ni-eye"></em><span>View Department</span>
                    </a>
                </li>
            </div>

            <!-- Table Card -->
            <div class="card card-bordered card-preview mt-4">
                <div class="card-inner">
                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Gender</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Birthdate</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Position Title</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Contact Number</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Educational Attainment</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Work Status</span></th>
                                {{-- <th class="nk-tb-col"><span class="sub-text">Action</span></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faculty as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->first_name }} {{ $member->middle_name }} {{ $member->last_name }}</td>
                                    <td>{{ $member->gender }}</td>
                                    <td>{{ $member->status }}</td>
                                    <td>{{ $member->birthdate }}</td>
                                    <td>{{ $member->position_title }}</td>
                                    <td>{{ $member->contact_number }}</td>
                                    <td>{{ $member->educational_attainment }}</td>
                                    <td>{{ $member->work_status }}</td>
                                    {{-- <td>
                                        <a href="{{ route('faculty.edit', $member->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('faculty.destroy', $member->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>

    <!-- Modal for Adding Product -->
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any"
        data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
        <div class="content-panel-box p-4 border rounded bg-white shadow-sm">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">View Departments</h5>
                    <div class="nk-block-des">
                        <p>List of employees to view total for each department.</p>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <!-- Form to Add Department -->
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="p_sku">Add Department</label>
                                <div class="form-control-wrap">
                                    <input type="text" name="p_sku" class="form-control" id="p_sku" required>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                <em class="icon ni ni-plus"></em><span>Add New</span>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
