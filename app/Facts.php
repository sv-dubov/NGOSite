<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    protected $fillable = ['title', 'number'];

    public static function add($fields)
    {
        $fact = new static;
        $fact->fill($fields);
        $fact->save();
        return $fact;
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
