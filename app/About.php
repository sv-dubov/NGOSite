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

    public static function add($fileds)
    {
        $post = new static;
        $post->fill($fileds);
        $post->save();
        return $post;
    }

    public function edit($fileds)
    {
        $this->fill($fileds);
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
        $this->status = About::IS_DRAFT;
        $this->save();
    }

    public function setPublic()
    {
        //$this->status = 1;
        $this->status = About::IS_PUBLIC;
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
