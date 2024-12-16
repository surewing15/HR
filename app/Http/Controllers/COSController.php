<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\COSModel;
use Illuminate\Http\Request;
use App\Models\MasterlistModel;

class COSController extends Controller
{
    public function index()
    {
        // Retrieve all contractuals with their related masterlist data
        $cosreps = COSModel::with('masterlist')->get();

        // Pass the $contractuals variable to the view
        return view('admin.record.jacos', compact('cosreps'));
    }


    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'date_of_birth' => 'required|date',
        'gender' => 'required|in:male,female',
        'level_of_cs_eligibility' => 'required|string|max:255',
        'work_status' => 'required|string|max:255',
        'years_of_service' => 'required|string|max:255',
        'nature_of_work' => 'required|string|max:255',
        'specific_nature_of_work' => 'required|string|max:255',
        'masterlist_id' => 'required|exists:masterlist,id',
    ], [
        'masterlist_id.required' => 'The masterlist ID is mandatory.',
        'masterlist_id.exists' => 'The specified masterlist ID does not exist.',
    ]);

    try {
        $masterRecord = MasterlistModel::findOrFail($validatedData['masterlist_id']);

        COSModel::create([
            'masterlist_id' => $masterRecord->id,
            'date' => $validatedData['date_of_birth'],
            'sex' => $validatedData['gender'],
            'eligibility' => $validatedData['level_of_cs_eligibility'],
            'workstatus' => $validatedData['work_status'],
            'yearsofservice' => $validatedData['years_of_service'],
            'natureofwork' => $validatedData['nature_of_work'],
            'specificnatureofwork' => $validatedData['specific_nature_of_work'],
        ]);

        return redirect()->route('contractuals.index')->with('success', 'Personnel added successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
    }
}

    public function searchMasterlist(Request $request)
    {
        $query = $request->input('query');
        
        if (!$query) {
            return response()->json([]);
        }

        $employees = MasterlistModel::where('first_name', 'like', "%$query%")
            ->orWhere('last_name', 'like', "%$query%")
            ->orWhere('job_type', 'like', "%$query%")
            ->get(['id', 'first_name', 'last_name', 'job_type', 'department']);

        return response()->json($employees);
        }
}
