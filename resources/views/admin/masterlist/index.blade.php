@extends('theme.layout')
@section('content')


<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h4>Employee Master List</h4>
        <!-- Import form on the top right -->
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex align-items-center">
            @csrf
            <div class="me-2">
                <label for="file" class="form-label">Choose Spreadsheet</label>
                <input type="file" name="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Import</button>
        </form>
    </div>

    <p>List of Employees Masterlist.</p>

    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display error message -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Employee Table -->
    <div class="card card-bordered card-preview mt-4">
        <div class="card-inner">
            <!-- Using a wrapper for responsiveness -->
            <div class="table-responsive">
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
                            <th class="nk-tb-col"><span class="sub-text">Salary</span></th>
                            <th class="nk-tb-col"><span class="sub-text">Work Status</span></th>
                            <th class="nk-tb-col"><span class="sub-text">Action</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamically populated rows will go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>




@endsection
