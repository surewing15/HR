<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterlistModel;

class FacultyController extends Controller
{
    // Display a list of all faculty members with job_type 'faculty'
    public function index()
    {
        // Retrieve only faculty members (job_type = 'faculty')
        $faculty = MasterlistModel::where('job_type', 'faculty')->get();

        // Pass the filtered data to the view
        return view('admin.masterlist.faculty.index', compact('faculty'));
    }
}
