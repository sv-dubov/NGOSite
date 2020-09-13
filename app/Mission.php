<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Mission extends Model
{
    protected $fillable = ['title', 'description', 'cover_image'];

    public static function add($fields)
    {
        $report = new static;
        $report->fill($fields);
        $report->save();
        return $report;
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
        $cover_image->storeAs('uploads/mission/covers', $filename);
        $this->cover_image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->cover_image != null)
        {
            Storage::delete('uploads/mission/covers/' . $this->cover_image);
        }
    }

    public function getImage()
    {
        if($this-> cover_image == null)
        {
            return '/img/no-image.png';
        }
        return '/uploads/mission/covers/' . $this->cover_image;
    }
}
