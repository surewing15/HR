@extends('employee_theme.layout')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Import and Export Excel Data</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Import Form --}}
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="file" class="form-label">Upload Excel File</label>
                <input type="file" name="file" id="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Import Data</button>
        </form>

        {{-- Export Button --}}
        <a href="{{ route('export') }}" class="btn btn-success">Export Data</a>

        {{-- Table to Display Imported Data --}}
        <div class="mt-4">
            <h4>Data Preview</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <!-- Add other columns based on your data -->
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <!-- Display other data fields as necessary -->
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
