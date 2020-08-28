<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('pages.contact');
    }

    public function contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email'    => 'required|email',
            'message' => 'required'
        ]);
        $contact = Contact::add($request->all());
        return redirect('/contact');
    }
}
