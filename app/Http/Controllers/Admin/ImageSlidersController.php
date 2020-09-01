<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImageSlider;
use Illuminate\Http\Request;

class ImageSlidersController extends Controller
{
    public function index()
    {
        $images = ImageSlider::all();
        return view('admin.image-slider', compact('images'));
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads/slider'), $input['image']);
        $input['title'] = $request->title;
        ImageSlider::create($input);
        return back()->with('success','Image Uploaded successfully.');
    }

    public function destroy($id)
    {
        ImageSlider::find($id)->remove();
        return back()->with('success','Image removed successfully.');
    }
}
