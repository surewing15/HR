<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel; // Import the EmployeeModel to fetch employee data

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the total number of employees
        $totalEmployees = EmployeeModel::count();

        // Pass the data to the dashboard view
        return view('admin.dashboard.index', compact('totalEmployees'));
    }
}
