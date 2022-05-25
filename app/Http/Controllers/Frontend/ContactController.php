<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->uuid = Str::uuid();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->service = $request->service;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact.index')->with('success', 'Your message has been sent successfully');
    }
}
