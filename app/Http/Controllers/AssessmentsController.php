<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentsController extends Controller
{
    public function index()
    {
        return view('assessments.index');
    }
    public function mismatchedAssessments()
    {
        return view('assessments.mismatched');
    }
    public function individualAssessments()
    {
        return view('assessments.individuals');
    }
}
