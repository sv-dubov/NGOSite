<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', ['contacts' => $contacts]);
    }

    public function show($id)
    {
        $contacts = Contact::find($id);
        return view('admin.contacts.show', ['contacts'=>$contacts]);
    }

    public function destroy($id)
    {
        Contact::find($id)->remove();
        return redirect()->route('contacts.index');
    }

    public function status($id)
    {
        $contacts = Contact::find($id);
        $contacts->toggleRead();
        return redirect()->back();
    }
}
