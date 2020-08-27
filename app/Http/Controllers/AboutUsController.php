<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('pages.about')->with('about', $about);
    }
}
