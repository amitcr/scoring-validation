<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function mis()
    {
        return view('mismatched');
    }
    public function in()
    {
        return view('individual');
    }
    public function all()
    {
        return view('all-assessement');
    }
}
