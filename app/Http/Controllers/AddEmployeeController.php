<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\DepartmentModel;

class AddEmployeeController extends Controller
{

    public function index()
    {

        $addemployees = EmployeeModel::with('department')->get();
        return view('admin.addemployees.index', compact('addemployees'));
    }

    public function save(Request $request)
    {

        $validated = $request->validate([
            'inp_fn' => 'required|string|max:255',
            'inp_ln' => 'required|string|max:255',
            'inp_email' => 'required|email|unique:add_employee,emp_email',
            'inp_phone' => 'nullable|string|max:15',
            'department_id' => 'required|string|max:255',
        ]);


        EmployeeModel::create([
            'emp_first_name' => $validated['inp_fn'],
            'emp_last_name' => $validated['inp_ln'],
            'emp_email' => $validated['inp_email'],
            'emp_phone_number' => $request->input('inp_phone'),
            'department_id' => $validated['department_id'],
        ]);


        return redirect()->route('employee.index')->with('success', 'Employee registered successfully!');
    }

    public function showForm()
    {

        $departments = DepartmentModel::select('department_id', 'depart_name')->get();
        $addemployees = EmployeeModel::all();
        return view('admin.addemployees.index', compact('departments', 'addemployees'));
    }


}
