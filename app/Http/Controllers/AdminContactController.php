<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(15);
        $unread   = Contact::where('read', false)->count();

        return view('admin.contacts', compact('contacts', 'unread'));
    }

    public function show(Contact $contact)
    {
        $contact->update(['read' => true]);
        return view('admin.contact_show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts')->with('success', 'Mensaje eliminado.');
    }
}