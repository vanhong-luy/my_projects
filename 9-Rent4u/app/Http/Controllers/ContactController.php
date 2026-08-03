<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm() {
        return view('/rent4u/form/contact');
    }

    public function submitForm(Request $request) {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:15',
            'message' => 'required|max:500',
        ]);

        Contact::create($request->all());
        return redirect('/index')->with('success', 'Contact saved!');
    }

    public function listContacts() {
        $contacts = Contact::all();
        return view('/rent4u/form/list-table', compact('contacts'));
    }
}
