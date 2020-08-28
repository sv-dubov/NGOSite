<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'message'];

    public static function add($fields)
    {
        $contact = new static;
        $contact->fill($fields);
        $contact->save();
        return $contact;
    }

    public function remove()
    {
        $this->delete();
    }
}
