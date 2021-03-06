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
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);
        $contact = Contact::add($request->all());
        return redirect()->back()->with('status', 'Your message was sent. We will answer you as soon, as we can.');
    }
}
