<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('miranda.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contact_name' => ['required', 'string'],
            'client_phone' => ['required', 'string'],
            'client_email' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'comment' => ['required', 'string'],
        ]);
        $comment = Contact::create(array_merge($validated, [
            'read' => false,
        ]));

        return redirect('/contact')->with('status', 'Thank you for your message!');
    }
}
