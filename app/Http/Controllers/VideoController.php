<?php

namespace App\Http\Controllers;

use App\Category;
use App\Videopost;
use App\Tag;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        //$posts = Post::paginate(2);
        $videoposts = Videopost::where('status', Videopost::IS_PUBLIC)->orderBy('date', 'desc')->paginate(2);
        return view('pages.videos')->with('videoposts', $videoposts);
    }

    public function show($slug)
    {
        $videopost = Videopost::where('slug', $slug)->orderBy('date', 'desc')->firstOrFail();
        return view('pages.video', compact('videopost'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $videoposts = $tag->videoposts()->paginate(2);
        return view('pages.videolist', ['videoposts'  =>  $videoposts]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $videoposts = $category->videoposts()->paginate(2);
        return view('pages.videolist', ['videoposts'  =>  $videoposts]);
    }
}
