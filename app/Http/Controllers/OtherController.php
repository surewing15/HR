<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function coe()
    {
        return view('admin.others.coe');
    }
}