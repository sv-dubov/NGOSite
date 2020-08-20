<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', ['abouts'	=>	$abouts]);
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'	=> 'required'
        ]);

        About::create($request->all());
        return redirect()->route('about.index');
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit', ['about'=>$about]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'	=>	'required'
        ]);

        $about = About::find($id);
        $about->slug = null; //change slug in DB
        $about->update($request->all());
        return redirect()->route('about.index');
    }

    public function destroy($id)
    {
        About::find($id)->delete();
        return redirect()->route('about.index');
    }
}
