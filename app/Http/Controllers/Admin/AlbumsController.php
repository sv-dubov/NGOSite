<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        //$albums = Album::with('Photos')->get();
        return view('admin.albums.index', ['albums' => $albums]);
        //return view('albums.index')->with('albums', $albums);
    }

    public function create()
    {
        return view('admin.albums.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'description' => 'required',
            'cover_image' => 'nullable|image|max:2048'
        ]);

        $album = Album::add($request->all());
        $album->uploadImage($request->file('cover_image'));
        return redirect()->route('albums.index');
    }

    public function edit($id)
    {
        $album = Album::find($id);
        return view('admin.albums.edit', ['album'=>$album]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required',
            'description' => 'required',
            'cover_image' => 'nullable|image'
        ]);

        $album = Album::find($id);
        $album->slug = null; //change slug in DB
        $album->edit($request->all());
        $album->uploadImage($request->file('cover_image'));
        return redirect()->route('albums.index');
    }

    public function destroy($id)
    {
        Album::find($id)->remove();
        return redirect()->route('albums.index');
    }
}
