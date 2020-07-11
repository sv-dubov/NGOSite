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
        $projects = DB::select('select distinct year, id, title, description from projects');
        return view('pages.projects', ['projects' => $projects]);
        //return view('pages.projects')->with('projects', $projects);
    }

    public function show($year)
    {
        $projects = Project::where('year', $year);
        return view('pages.projects')->with('projects', $projects);
    }
}
