<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\Post;
use Jorenvh\Share\Share;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', Post::IS_PUBLIC)->orderBy('date', 'desc')->paginate(2);
        return view('pages.posts')->with('posts', $posts);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->orderBy('date', 'desc')->firstOrFail();
        return view('pages.post', compact('post'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(2);
        return view('pages.postlist', ['posts'  =>  $posts]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->paginate(2);
        return view('pages.postlist', ['posts'  =>  $posts]);
    }
}
