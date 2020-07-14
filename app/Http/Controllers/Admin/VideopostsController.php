<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Tag;
use App\Videopost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideopostsController extends Controller
{
    public function index()
    {
        $videoposts = Videopost::all();
        return view('admin.videoposts.index', ['videoposts' => $videoposts]);
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.videoposts.create', compact(
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
        $videopost = Videopost::add($request->all());
        $videopost->uploadImage($request->file('image'));
        $videopost->setCategory($request->get('category_id'));
        $videopost->setTags($request->get('tags'));
        $videopost->toggleStatus($request->get('status'));
        $videopost->toggleFeatured($request->get('is_featured'));
        return redirect()->route('videoposts.index');
    }

    public function edit($id)
    {
        $videopost = Videopost::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $selectedTags = $videopost->tags->pluck('id')->all();
        return view('admin.videoposts.edit', compact(
            'categories',
            'tags',
            'videopost',
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
        $videopost = Videopost::find($id);
        $videopost->edit($request->all());
        $videopost->uploadImage($request->file('image'));
        $videopost->setCategory($request->get('category_id'));
        $videopost->setTags($request->get('tags'));
        $videopost->toggleStatus($request->get('status'));
        $videopost->toggleFeatured($request->get('is_featured'));
        return redirect()->route('videoposts.index');
    }

    public function destroy($id)
    {
        Videopost::find($id)->remove();
        return redirect()->route('videoposts.index');
    }
}
