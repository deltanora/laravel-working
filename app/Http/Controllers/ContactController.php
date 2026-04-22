<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }


    public function create()
    {
        return view('contacts.create');
    }

     public function show(Contact $contact)
{
    return view('contacts.show', compact('contact'));
}

 public function store(Request $request)
   {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'question' => 'required',
        ]);

        $contact = Contact::create($validated);

        return redirect()->route('contacts.index', ["contact" => $contact]);
    }
}