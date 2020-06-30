<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
