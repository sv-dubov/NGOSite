<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        //$albums = Album::all();
        $albums = Album::with('Photos')->get();
        //return view('gallery.index', ['albums' => $albums]);
        return view('gallery.index')->with('albums', $albums);
    }

    public function show($slug)
    {
        $album = Album::where('slug', $slug)->orderBy('created_at', 'desc')->firstOrFail();
        return view('gallery.show', compact('album'));
    }

/*    public function show($id){
        $album = Album::with('Photos')->find($id);
        return view('gallery.show')->with('album', $album);
    }*/

    public function photo($id){
        $photo = Photo::find($id);
        return view('gallery.photo')->with('photo', $photo);
    }
}
