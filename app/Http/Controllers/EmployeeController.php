<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function index()
{
    $users = UserModel::all(); // Fetch all users or use any required filter

    return view('index', compact('users'));
}

    public function showUploadForm()
    {
        return view('employee.upload');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new EmployeesImport, $request->file('file'));

        return redirect()->route('employee.upload')->with('success', 'Employee data imported successfully.');
    }
}