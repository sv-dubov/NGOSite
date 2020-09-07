<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = ['year', 'title', 'description'];

    public static function add($fields)
    {
        $project = new static;
        $project->fill($fields);
        $project->save();
        return $project;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->delete();
    }

    public function uploadImage($cover_image)
    {
        if($cover_image == null) { return; }
        $this->removeImage();
        $filename = Str::random(10) . '.' . $cover_image->extension();
        $cover_image->storeAs('uploads/projects/covers', $filename);
        $this->cover_image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->cover_image != null)
        {
            Storage::delete('uploads/projects/covers/' . $this->cover_image);
        }
    }

    public function getImage()
    {
        if($this-> cover_image == null)
        {
            return '/img/no-image.png';
        }
        return '/uploads/projects/covers/' . $this->cover_image;
    }
}
