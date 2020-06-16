<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', ['members' => $members]);
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'position' => 'required',
            'image' => 'nullable|image'
        ]);

        $member = Member::add($request->all());
        $member->uploadImage($request->file('image'));
        return redirect()->route('members.index');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('admin.members.edit', ['member'=>$member]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required',
            'position' => 'required',
            'image' => 'nullable|image'
        ]);

        $member = Member::find($id);
        $member->slug = null; //change slug in DB
        $member->edit($request->all());
        $member->uploadImage($request->file('image'));
        return redirect()->route('members.index');
    }

    public function destroy($id)
    {
        Member::find($id)->remove();
        return redirect()->route('members.index');
    }
}
