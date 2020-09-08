<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;
    const IS_UNREAD = 0;
    const IS_READ = 1;

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

    public function read()
    {
        $this->status = Contact::IS_READ;
        $this->save();
    }

    public function unread()
    {
        $this->status = Contact::IS_UNREAD;
        $this->save();
    }

    public function toggleRead()
    {
        if ($this->status == Contact::IS_READ) {
            return $this->unread();
        }
        return $this->read();
    }
}
