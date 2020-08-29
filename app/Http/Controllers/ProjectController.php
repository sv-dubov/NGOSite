<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        //$projects = Project::all();
        $groups = Project::all()->groupBy('year');
        //dd($groups);
        return view('pages.projects', ['groups' => $groups]);
    }

    public function show($year)
    {
        $projects = Project::where('year', $year);
        return view('pages.projects')->with('projects', $projects);
    }
}
