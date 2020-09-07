<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('pages.team')->with('members', $members);
    }

    public function show($slug)
    {
        $member = Member::where('slug', $slug)->firstOrFail();
        return view('pages.member', compact('member'));
    }
}
