<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestModel;

class RequestController extends Controller
{
    public function index()
    {
        // Fetch all employees from the database
        $coe = RequestModel::all();

        // Return the view with employee data
        return view('employee_theme.request.index', compact('coe'));
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'inp_fn' => 'required|string|max:50',
            'inp_ln' => 'required|string|max:50',
            'inp_email' => 'required|email',
            'inp_position' => 'nullable|string|max:50',
            'inp_date_started' => 'nullable|date',
            'ern_text' => 'nullable|string|max:100',
            'ern_digits' => 'nullable|numeric|min:0',
        ]);

        // Create a new employee record
        RequestModel::create([

            'FirstName' => $validated['inp_fn'],
            'LastName' => $validated['inp_ln'],
            'Email' => $validated['inp_email'],
            'Position' => $validated['inp_position'],
            'DateStarted' => $validated['inp_date_started'],
            'MonthlyCompensationText' => $validated['ern_text'],
            'MonthlyCompensationDigits' => $validated['ern_digits'],
        ]);

        // Redirect or send a success response
        return redirect()->back()->with('success', 'Request submitted successfully!');
    }
}