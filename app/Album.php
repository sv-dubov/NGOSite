<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;

class Album extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'description', 'cover_image'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function photos(){
        //return $this->hasMany('App\Photo');
        return $this->hasMany(Photo::class);
    }

    public static function add($fields)
    {
        $album = new static;
        $album->fill($fields);
        $album->save();
        return $album;
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

    public function uploadImage($cover_image)
    {
        if($cover_image == null) { return; }
        $this->removeImage();
        $filename = Str::random(10) . '.' . $cover_image->extension();
        $cover_image->storeAs('uploads', $filename);
        $this->cover_image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->cover_image != null)
        {
            Storage::delete('uploads/' . $this->cover_image);
        }
    }

    public function getImage()
    {
        if($this-> cover_image == null)
        {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->cover_image;
    }
}
