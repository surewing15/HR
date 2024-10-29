<?php

namespace App\Http\Controllers;

use App\Models\User; // Make sure 'User' model is correctly set up to access the data
use App\Imports\UserDataImport;
use App\Exports\UserDataExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all records from the User model
        $users = User::all();

        // Pass the data to the view
        return view('employee_theme.pds.index', compact('users'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);

        Excel::import(new UserDataImport, $request->file('file'));

        return redirect()->route('index')->with('success', 'Data Imported Successfully!');
    }

    public function export()
    {
        return Excel::download(new UserDataExport, 'user_data.xlsx');
    }
}