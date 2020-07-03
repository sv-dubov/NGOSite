<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['year', 'title', 'description'];

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
        $this->delete();
    }
}
