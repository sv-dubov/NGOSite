<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        //$posts = Post::paginate(2);
        $articles = Article::where('status', Article::IS_PUBLIC)->orderBy('date', 'desc')->paginate(2);
        return view('pages.articles')->with('articles', $articles);
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->orderBy('date', 'desc')->firstOrFail();
        return view('pages.article', compact('article'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $articles = $tag->articles()->paginate(2);
        return view('pages.articlelist', ['articles'  =>  $articles]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->articles()->paginate(2);
        return view('pages.articlelist', ['articles'  =>  $articles]);
    }
}
