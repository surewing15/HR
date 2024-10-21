<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;

class StaffController extends Controller
{
    public function job()
    {
        $employees = EmployeeModel::whereHas('department', function ($query) {
            $query->where('depart_name', 'Job Order');
        })->with('department')->get();

        return view('admin.staff.job', compact('employees'));
    }
    public function permanent()
    {
        $employees = EmployeeModel::whereHas('department', function ($query) {
            $query->where('depart_name', 'Permanent');
        })->with('department')->get();

        return view('admin.staff.permanent', compact('employees'));
    }
}
