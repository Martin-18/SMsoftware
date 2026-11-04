<?php

use App\Mail\ContactNotification;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

/**
 * @return array<string, string>
 */
function validContactData(array $overrides = []): array
{
    return array_merge([
        'name' => 'Carlos Gómez',
        'email' => 'carlos.gomez@gmail.com',
        'phone' => '300 123 4567',
        'service_interest' => 'servicios_tecnicos',
        'message' => 'Necesito mantenimiento para tres computadores de mi oficina.',
    ], $overrides);
}

test('a visitor can send a contact message', function () {
    Mail::fake();

    $this->post(route('contact.store'), validContactData())
        ->assertRedirect(route('contact'))
        ->assertSessionHas('success');

    $contact = Contact::sole();

    expect($contact->name)->toBe('Carlos Gómez')
        ->and($contact->service_label)->toBe('Servicios Técnicos')
        ->and($contact->read)->toBeFalse();

    Mail::assertSent(ContactNotification::class, fn (ContactNotification $mail) => $mail->hasTo(config('mail.from.address')));
});

test('the notification email renders', function () {
    $contact = Contact::factory()->create(['name' => 'Laura Pérez']);

    expect((new ContactNotification($contact))->render())->toContain('Laura Pérez');
});

test('the message is kept when the email cannot be sent', function () {
    Mail::shouldReceive('to')->andThrow(new RuntimeException('SMTP caído'));

    $this->post(route('contact.store'), validContactData())
        ->assertRedirect(route('contact'))
        ->assertSessionHas('success');

    expect(Contact::count())->toBe(1);
});

test('invalid contact data is rejected', function (array $overrides, string $field) {
    Mail::fake();

    $this->post(route('contact.store'), validContactData($overrides))
        ->assertSessionHasErrors($field);

    expect(Contact::count())->toBe(0);
    Mail::assertNothingSent();
})->with([
    'nombre vacío' => [['name' => ''], 'name'],
    'nombre con números' => [['name' => 'Carlos 123'], 'name'],
    'correo inválido' => [['email' => 'no-es-un-correo'], 'email'],
    'teléfono inválido' => [['phone' => '12345'], 'phone'],
    'servicio desconocido' => [['service_interest' => 'hackeo'], 'service_interest'],
    'mensaje corto' => [['message' => 'Hola'], 'message'],
]);
