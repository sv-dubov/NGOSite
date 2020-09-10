<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class About extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'content'];
    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function add($fields)
    {
        $about = new static;
        $about->fill($fields);
        $about->save();
        return $about;
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

    public function setDraft()
    {
        //$this->status = 0;
        $this->is_published = About::IS_DRAFT;
        $this->save();
    }

    public function setPublic()
    {
        //$this->status = 1;
        $this->is_published = About::IS_PUBLIC;
        $this->save();
    }

    public function toggleStatus($value)
    {
        if($value == null)
        {
            return $this->setDraft();
        }
        return $this->setPublic();
    }
}
