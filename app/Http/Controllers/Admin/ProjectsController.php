<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'year' =>'required',
            'title' => 'required'
        ]);

        $project = Project::add($request->all());
        return redirect()->route('projects.index');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit', ['project'=>$project]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'year' =>'required',
            'title' => 'required'
        ]);

        $project = Project::find($id);
        $project->edit($request->all());
        return redirect()->route('projects.index');
    }

    public function destroy($id)
    {
        Project::find($id)->remove();
        return redirect()->route('projects.index');
    }
}
