<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', Post::IS_PUBLIC)->orderBy('date', 'desc')->paginate(2);
        return view('pages.posts')->with('posts', $posts);
    }
}
