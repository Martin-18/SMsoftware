<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactNotification;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        // Envía el correo al administrador (configura MAIL_FROM_ADDRESS en .env)
        Mail::to(config('mail.from.address'))
            ->send(new ContactNotification($contact));

        return redirect()
            ->route('contact')
            ->with('success', '¡Mensaje enviado! Te responderemos pronto.');
    }
}