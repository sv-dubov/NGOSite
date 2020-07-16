<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use Sluggable;
    protected $fillable = ['title'];

    public function posts()
    {
        return $this->belongsToMany(
            Post::class,
            'post_tag',
            'tag_id',
            'post_id'
        );
    }

    public function articles()
    {
        return $this->belongsToMany(
            Article::class,
            'article_tag',
            'tag_id',
            'article_id'
        );
    }

    public function videoposts()
    {
        return $this->belongsToMany(
            Videopost::class,
            'videopost_tag',
            'tag_id',
            'videopost_id'
        );
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
