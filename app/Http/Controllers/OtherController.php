<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestModel;

class OtherController extends Controller
{
    public function coe()
    {
        return view('admin.others.coe');
    }


    public function coe_request()
    {
        // Fetch data from the database
        $requests = RequestModel::all();

        // Pass data to the view
        return view('admin.others.request', compact('requests'));
    }

}
