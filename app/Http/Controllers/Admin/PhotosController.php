<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function create($album_id){
        return view('admin.photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'image|max:2048'
        ]);
        // Get filename with extension
        $filenameWithExt = $request->file('photo')->getClientOriginalName();
        // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        // Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // Upload image
        $path = $request->file('photo')->storeAs('uploads/albums/photos/'.$request->input('album_id'), $filenameToStore);
        // Upload Photo
        $photo = new Photo;
        //$album = DB::table('albums')->value('id');
        //$photo->album_id = $album;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getSize();
        $photo->photo = $filenameToStore;
        $photo->save();

        return redirect('/admin/albums/'.$request->input('album_id'))->with('success', 'Photo Uploaded');
    }

    public function show($id){
        $photo = Photo::find($id);
        return view('admin.photos.show')->with('photo', $photo);
    }

    public function destroy($id){
        $photo = Photo::find($id);
        if(Storage::delete('uploads/albums/photos/'.$photo->album_id.'/'.$photo->photo)){
            $photo->delete();
            return redirect()->route('albums.index')->with('success', 'Photo Deleted');
        }
    }
}
