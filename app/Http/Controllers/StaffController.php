<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterlistModel;

class StaffController extends Controller
{
    public function index()
    {
        // Retrieve only faculty members (job_type = 'faculty')
        $faculty = MasterlistModel::where('job_type', 'staff')->get();

        // Pass the filtered data to the view
        return view('admin.masterlist.faculty.index', compact('faculty'));
    }
    // public function permanent()
    // {
    //     $employees = EmployeeModel::whereHas('department', function ($query) {
    //         $query->where('depart_name', 'Permanent');
    //     })->with('department')->get();

    //     return view('admin.staff.permanent', compact('employees'));
    // }
}