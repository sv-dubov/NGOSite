<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::all();
        return view('admin.mission.index', ['missions' => $missions]);
    }

    public function create()
    {
        return view('admin.mission.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required',
            'description' =>'required',
            'cover_image' => 'required|image'
        ]);

        $mission = Mission::add($request->all());
        $mission->uploadImage($request->file('cover_image'));
        return redirect()->route('missions.index');
    }

    public function edit($id)
    {
        $mission = Mission::find($id);
        return view('admin.mission.edit', ['mission'=>$mission]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
            'description' =>'required',
            'cover_image' => 'required|image'
        ]);

        $mission = Mission::find($id);
        $mission->edit($request->all());
        $mission->uploadImage($request->file('cover_image'));
        return redirect()->route('missions.index');
    }

    public function destroy($id)
    {
        Mission::find($id)->remove();
        return redirect()->route('missions.index');
    }
}
