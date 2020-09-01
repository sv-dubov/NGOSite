<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ImageSlider extends Model
{
    protected $table = 'image_sliders';
    protected $fillable = ['title','image'];

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/slider/' . $this->image);
        }
    }
}
