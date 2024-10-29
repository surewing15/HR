@extends('employee_theme.layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Employee Data</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('employee.update') }}" method="POST">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Surname</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Date of Birth</th>
                    <!-- Add other fields as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td><input type="hidden" name="employees[{{ $loop->index }}][id]" value="{{ $employee->id }}">{{ $employee->id }}</td>
                        <td><input type="text" name="employees[{{ $loop->index }}][surname]" value="{{ $employee->surname }}"></td>
                        <td><input type="text" name="employees[{{ $loop->index }}][first_name]" value="{{ $employee->first_name }}"></td>
                        <td><input type="text" name="employees[{{ $loop->index }}][middle_name]" value="{{ $employee->middle_name }}"></td>
                        <td><input type="date" name="employees[{{ $loop->index }}][date_of_birth]" value="{{ $employee->date_of_birth->format('Y-m-d') }}"></td>
                        <!-- Add other fields as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
    </form>
</div>
@endsection
