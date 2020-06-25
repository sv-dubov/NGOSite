<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Photo extends Model
{
    protected $fillable = array('album_id', 'description', 'photo', 'title', 'size');

    public function album(){
        return $this->belongsTo('App\Album');
    }

/*    protected $fillable = array('photo', 'title', 'description');

    public function album(){
        //return $this->belongsTo('App\Album');
        return $this->belongsTo(Album::class, 'album_id');
    }

    public static function add($fields)
    {
        $album = DB::table('albums')->value('id');
        $photo = new static;
        $photo->fill($fields);
        $photo->album_id = $album;
        $photo->save();
        return $photo;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function uploadImage($photo)
    {
        if($photo == null) { return; }
        $this->removeImage();
        $filename = Str::random(10) . '.' . $photo->extension();
        $photo->storeAs('public/photos/', $filename);
        $this->photo = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->photo != null)
        {
            Storage::delete('public/photos/' . $this->photo);
        }
    }

    public function getImage()
    {
        return '/public/photos/' . $this->photo;
    }*/
}
