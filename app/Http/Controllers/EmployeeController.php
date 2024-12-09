<?php

namespace App\Http\Controllers;

use App\Imports\EmployeesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\MasterlistModel;
use Illuminate\Support\Facades\DB;

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
                'employee_id' => 'required|string|max:255',
                'first_name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'middle_initial' => 'nullable|string|max:1',
                'contact_information' => 'required|string|max:100',
                'employment_status' => 'required|string|max:50',
                'job_title' => 'required|string|max:100',
                'department' => 'required|string|max:100',
                'job_type' => 'required|string|max:255'
            ]);

            $employee = MasterlistModel::create($validated);

            if ($request->ajax()) {
                return response()->json([
                    'message' => 'Employee created successfully',
                    'employee' => $employee,
                    'redirect' => route('masterlist.index')
                ], 201);
            }

            return redirect()->route('masterlist.index')
                ->with('success', 'Employee created successfully');

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
    public function show($id)
    {
        try {
            // First get the masterlist record
            $masterlistEmployee = MasterlistModel::findOrFail($id);

            // Then get the matching personal information using employee_id
            $personalInfo = DB::table('personal_informations')
                ->where('employee_id', $masterlistEmployee->employee_id)
                ->first();

            // Combine the data
            $employeeData = [
                // Masterlist data
                'employee_id' => $masterlistEmployee->employee_id,
                'first_name' => $masterlistEmployee->first_name,
                'last_name' => $masterlistEmployee->last_name,
                'middle_initial' => $masterlistEmployee->middle_initial,
                'contact_information' => $masterlistEmployee->contact_information,
                'employment_status' => $masterlistEmployee->employment_status,
                'job_title' => $masterlistEmployee->job_title,
                'department' => $masterlistEmployee->department,
                'job_type' => $masterlistEmployee->job_type,

                // Personal information (if available)
                'date_of_birth' => $personalInfo ? $personalInfo->date_of_birth : null,
                'place_of_birth' => $personalInfo ? $personalInfo->place_of_birth : null,
                'sex' => $personalInfo ? $personalInfo->sex : null,
                'civil_status' => $personalInfo ? $personalInfo->civil_status : null,
                'height' => $personalInfo ? $personalInfo->height : null,
                'weight' => $personalInfo ? $personalInfo->weight : null,
                'blood_type' => $personalInfo ? $personalInfo->blood_type : null,
                'gsis_no' => $personalInfo ? $personalInfo->gsis_no : null,
                'pagibig_no' => $personalInfo ? $personalInfo->pagibig_no : null,
                'philhealth_no' => $personalInfo ? $personalInfo->philhealth_no : null,
                'sss_no' => $personalInfo ? $personalInfo->sss_no : null,
                'tin_no' => $personalInfo ? $personalInfo->tin_no : null
            ];

            return response()->json($employeeData);
        } catch (\Exception $e) {
            \Log::error('Error in show method: ' . $e->getMessage());
            return response()->json(['error' => 'Error fetching employee data: ' . $e->getMessage()], 500);
        }
    }
}