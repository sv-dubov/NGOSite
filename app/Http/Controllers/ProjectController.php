<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects')->with('projects', $projects);
    }

    public function show($year)
    {
        $projects = Project::where('year', $year);
        return view('pages.projects')->with('projects', $projects);
    }
}
