<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\DepartmentModel;
use App\Models\MasterlistModel;
use Illuminate\Http\Request;

class AddEmployeeController extends Controller
{
    public function index()
    {
        $masterlists = MasterlistModel::all();
        $employmentStatuses = ['Job Order', 'Permanent', 'Contract of Service'];
        $jobTypes = ['Faculty', 'Staff'];
        $departments = DB::table('tbl_departments')->where('role', 'faculty')->get();

        return view('admin.addemployees.index', compact('employmentStatuses', 'jobTypes', 'departments', 'masterlists'));
    }

    private function capitalizeWords($string)
    {
        return ucwords(strtolower($string));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'middle_initial' => 'nullable|string|max:1',
                'contact_information' => 'required|string|max:50',
                'employment_status' => 'required|string|in:Job Order,Permanent,Contract of Service',
                'job_title' => 'required|string|max:100',
                'department' => 'required|string|max:100',
                'job_type' => 'required|string|in:Faculty,Staff'
            ]);

            // Capitalize fields
            $validatedData['first_name'] = $this->capitalizeWords($validatedData['first_name']);
            $validatedData['last_name'] = $this->capitalizeWords($validatedData['last_name']);
            $validatedData['job_title'] = $this->capitalizeWords($validatedData['job_title']);
            $validatedData['middle_initial'] = $validatedData['middle_initial']
                ? strtoupper($validatedData['middle_initial'])
                : null;

            // Generate employee ID
            $employeeId = $this->generateEmployeeId($request->job_type);

            // Generate password
            $password = $validatedData['last_name'] . date('md'); // Example logic
            $hashedPassword = Hash::make($password);

            // Save the employee
            MasterlistModel::create([
                'employee_id' => $employeeId,
                'full_name' => $validatedData['first_name'] . ' ' .
                    ($validatedData['middle_initial'] ? $validatedData['middle_initial'] . '. ' : '') .
                    $validatedData['last_name'],
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'middle_initial' => $validatedData['middle_initial'],
                'contact_information' => $validatedData['contact_information'],
                'employment_status' => $validatedData['employment_status'],
                'job_title' => $validatedData['job_title'],
                'department' => $validatedData['department'],
                'job_type' => $validatedData['job_type'],
                'password' => $hashedPassword,
                'plain_password' => $password,
            ]);

            // Optionally send the password via email
            // Mail::to($request->email)->send(new EmployeeWelcomeMail($password));

            return redirect()->route('addemployees.index')
                ->with('success', "Employee added successfully. Password: $password");
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to save employee: ' . $e->getMessage()]);
        }
    }

    private function generateEmployeeId($jobType)
    {
        $prefix = ($jobType === 'Faculty') ? 'F' : 'S';
        $yearMonth = date('Ym');
        do {
            $lastEmployee = MasterlistModel::where('employee_id', 'LIKE', "$prefix$yearMonth%")
                ->orderBy('id', 'desc')
                ->first();
            $nextId = $lastEmployee ? (int) substr($lastEmployee->employee_id, 7) + 1 : 1;
            $employeeId = $prefix . $yearMonth . str_pad($nextId, 3, '0', STR_PAD_LEFT);
        } while (MasterlistModel::where('employee_id', $employeeId)->exists());

        return $employeeId;
    }
}