<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Tag;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.articles.create', compact(
            'categories',
            'tags'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required',
            'content' => 'required',
            'date' => 'required',
            'image' => 'nullable|image'
        ]);

        $article = Article::add($request->all());
        $article->uploadImage($request->file('image'));
        $article->setCategory($request->get('category_id'));
        $article->setTags($request->get('tags'));
        $article->toggleStatus($request->get('status'));
        $article->toggleFeatured($request->get('is_featured'));
        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $selectedTags = $article->tags->pluck('id')->all();
        return view('admin.articles.edit', compact(
            'categories',
            'tags',
            'article',
            'selectedTags'
        ));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
            'content' => 'required',
            'date' => 'required',
            'image' => 'nullable|image'
        ]);

        $article = Article::find($id);
        $article->edit($request->all());
        $article->uploadImage($request->file('image'));
        $article->setCategory($request->get('category_id'));
        $article->setTags($request->get('tags'));
        $article->toggleStatus($request->get('status'));
        $article->toggleFeatured($request->get('is_featured'));
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        Article::find($id)->remove();
        return redirect()->route('articles.index');
    }
}
