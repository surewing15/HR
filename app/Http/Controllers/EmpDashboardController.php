<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpDashboardController extends Controller
{
    public function index()
    {
        // Pass authenticated user details
        $employee = Auth::user();
        return view('employee.dashboard.index', compact('employee'));
    }
}
