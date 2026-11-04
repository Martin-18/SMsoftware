<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactNotification;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('contact');
    }

    public function store(StoreContactRequest $request): RedirectResponse
    {
        // Se guarda la fecha de la autorización como prueba (Ley 1581 de 2012, Decreto 1377 de 2013).
        $contact = Contact::create([
            ...$request->safe()->except('privacy'),
            'privacy_accepted_at' => now(),
        ]);

        // El mensaje ya quedó guardado: si el correo falla, se registra el error sin romper la página.
        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactNotification($contact));
        } catch (Throwable $exception) {
            report($exception);
        }

        return redirect()
            ->route('contact')
            ->with('success', '¡Mensaje enviado! Te responderemos pronto.');
    }
}
