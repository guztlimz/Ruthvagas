<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    Public function index()
    {
        $jobs = Job::with("company")->get();
        //$jobs = Job::all();
        return response()->json($jobs);
    }
}
