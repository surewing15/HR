<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterlistModel;
use App\Models\RankModel;
use Illuminate\Support\Facades\DB;

class RankController extends Controller
{
    public function index()
    {
        $ranks = RankModel::with('masterlist')->get();
        $employees = MasterlistModel::paginate(10);

        return view('admin.ranks.index', compact('employees', 'ranks'));
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'm_emp' => 'required|string|max:255',
            'field' => 'required|string|max:255',
            'current_qua' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        // Split the full name into first and last name
        $nameParts = explode(' ', $request->inp_fn);
        $firstName = $nameParts[0];
        $lastName = end($nameParts);

        // More flexible name matching
        $masterRecord = MasterlistModel::where(function ($query) use ($firstName, $lastName) {
            $query->where('first_name', 'LIKE', "%{$firstName}%")
                ->where('last_name', 'LIKE', "%{$lastName}%");
        })->first();

        if (!$masterRecord) {
            return redirect()->back()
                ->withErrors(['m_emp' => 'Employee not found in master list.'])
                ->withInput();
        }

        $rankData = new RankModel([
            'masterlist_id' => $masterRecord->id,
            'field' => $request->field,
            'current_qua' => $request->current_qua,
            'current_rank' => $request->role,
        ]);

        $rankData->save();

        return redirect()->back()->with('success', 'Employee rank updated successfully.');
    }

    // public function saveEmployee(Request $request)
    // {

    //     $request->validate([
    //         'm_emp' => 'required|string|max:255',
    //         'field' => 'required|string|max:255',
    //         'current_qua' => 'required|string|max:255',
    //         'role' => 'required|string|max:255',
    //     ]);

    //     try {

    //         $employee = new RankModel();
    //         $employee->full_name = $request->input('m_emp');
    //         $employee->field = $request->input('field');
    //         $employee->current_qualification = $request->input('current_qua');
    //         $employee->current_rank = $request->input('role');
    //         $employee->save();


    //         return redirect()->back()->with('success', 'Employee saved successfully.');
    //     } catch (\Exception $e) {

    //         return redirect()->back()->with('error', 'Failed to save employee: ' . $e->getMessage());
    //     }
    // }

    public function update(Request $request)
    {
        // Validate input
        $request->validate([
            'r_emp' => 'required|string',
            'updated_field' => 'required|string',
            'updated_qua' => 'required|string',
            'updated_rank' => 'required|string',
        ]);

        // Find the employee's ID (assuming r_emp contains the name)
        $employeeName = $request->input('r_emp');
        $employee = RankModel::with('masterlist')
            ->whereHas('masterlist', function ($query) use ($employeeName) {
                $query->where(DB::raw("CONCAT(first_name, ' ', last_name)"), $employeeName);
            })
            ->first();

        if (!$employee) {
            return redirect()->back()->withErrors(['r_emp' => 'Employee not found.']);
        }

        // Update the fields
        $employee->update([
            'updated_field' => $request->input('updated_field'),
            'updated_qua' => $request->input('updated_qua'),
            'updated_rank' => $request->input('updated_rank'),
        ]);

        // Redirect or return success response
        return redirect()->back()->with('success', 'Record updated successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        $employees = RankModel::with([
            'masterlist' => function ($q) {
                $q->select('id', 'first_name', 'last_name', 'job_type', 'department');
            }
        ])
            ->whereHas('masterlist', function ($q) use ($query) {
                $q->where('first_name', 'LIKE', "%{$query}%")
                    ->orWhere('last_name', 'LIKE', "%{$query}%");
            })
            ->select('id', 'masterlist_id')
            ->limit(10)
            ->get()
            ->map(function ($rank) {
                return [
                    'id' => $rank->masterlist->id,
                    'first_name' => $rank->masterlist->first_name,
                    'last_name' => $rank->masterlist->last_name,
                    'job_type' => $rank->masterlist->job_type,
                    'department' => $rank->masterlist->department
                ];
            });

        return response()->json($employees);
    }
    public function searchMasterlist(Request $request)
    {
        $query = $request->get('query');

        $employees = MasterlistModel::where('first_name', 'LIKE', "%{$query}%")
            ->orWhere('last_name', 'LIKE', "%{$query}%")
            ->select('id', 'first_name', 'last_name', 'middle_name', 'job_type', 'department')
            ->limit(10)
            ->get();

        return response()->json($employees);
    }
}