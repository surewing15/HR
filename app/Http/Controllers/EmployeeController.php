<?php

namespace App\Http\Controllers;

use App\Imports\EmployeesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\MasterlistModel;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = MasterlistModel::all();
        return view('admin.masterlist.index', compact('employees'));
    }

    // Add the store method
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'middle_name' => 'nullable|string|max:255',
                'gender' => 'required|in:male,female',
                'status' => 'required|in:single,married,separated,widowed,divorced',
                'birthdate' => 'required|date',
                'position_title' => 'required|string|max:255',
                'contact_number' => 'required|string|max:20',
                'educational_attainment' => 'required|max:255',
                'department' => 'required|max:255',
                'salary' => 'required|numeric|min:0',
                'email' => 'required|email|max:255',
                'work_status' => 'required|in:job_order,permanent'
            ]);

            $employee = MasterlistModel::create($validated);

            // For AJAX requests
            if ($request->ajax()) {
                return response()->json([
                    'message' => 'Employee created successfully',
                    'employee' => $employee,
                    'redirect' => route('masterlist.index')
                ], 201);
            }

            // For regular form submissions
            return redirect()->route('masterlist.index')->with('success', 'Employee created successfully');

        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json(['error' => 'An error occurred while creating the employee'], 500);
            }
            return back()->withErrors(['error' => 'An error occurred while creating the employee']);
        }
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        try {
            Excel::import(new EmployeesImport, $request->file('file'));
            return redirect()->back()->with('success', 'Employees imported successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'There was an error importing the file: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        try {
            $employee = MasterlistModel::findOrFail($id);
            return response()->json($employee);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Employee not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $employee = MasterlistModel::findOrFail($id);

            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'middle_name' => 'nullable|string|max:255',
                'gender' => 'required|in:male,female',
                'status' => 'required|in:single,married,separated,widowed,divorced',
                'birthdate' => 'required|date',
                'position_title' => 'required|string|max:255',
                'contact_number' => 'required|string|max:20',
                'educational_attainment' => 'required|max:255',
                'salary' => 'required|numeric|min:0',
                'email' => 'required|email|max:255',
                'work_status' => 'required|in:job_order,permanent'
            ]);

            $employee->update($validated);

            return response()->json([
                'message' => 'Employee updated successfully',
                'employee' => $employee
            ]);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Employee not found'], 404);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the employee'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $employee = MasterlistModel::findOrFail($id);
            $employee->delete();
            return redirect()->back()->with('success', 'Employee deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error deleting employee: ' . $e->getMessage()]);
        }
    }
}
