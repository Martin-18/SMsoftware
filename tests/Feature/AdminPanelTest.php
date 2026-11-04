<?php

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    config(['app.admin_password' => 'clave-de-prueba-segura']);
});

test('guests are redirected to the admin login', function (string $routeName) {
    $this->get(route($routeName))->assertRedirect(route('admin.login'));
})->with([
    'servicios' => 'admin.services',
    'mensajes' => 'admin.contacts',
]);

test('the admin can log in with the correct password', function () {
    $this->post(route('admin.login.post'), ['password' => 'clave-de-prueba-segura'])
        ->assertRedirect(route('admin.services'))
        ->assertSessionHas('admin_logged_in', true);
});

test('a wrong password is rejected', function () {
    $this->post(route('admin.login.post'), ['password' => 'incorrecta'])
        ->assertSessionHasErrors('password')
        ->assertSessionMissing('admin_logged_in');
});

test('login is impossible when no admin password is configured', function () {
    config(['app.admin_password' => null]);

    $this->post(route('admin.login.post'), ['password' => 'cualquier-cosa'])
        ->assertSessionHasErrors('password')
        ->assertSessionMissing('admin_logged_in');
});

test('login attempts are rate limited', function () {
    foreach (range(1, 5) as $attempt) {
        $this->post(route('admin.login.post'), ['password' => 'incorrecta']);
    }

    $this->post(route('admin.login.post'), ['password' => 'clave-de-prueba-segura'])
        ->assertTooManyRequests();
});

test('the admin can log out', function () {
    $this->withSession(['admin_logged_in' => true])
        ->post(route('admin.logout'))
        ->assertRedirect(route('home'))
        ->assertSessionMissing('admin_logged_in');
});

test('the admin can list and read contact messages', function () {
    $contact = Contact::factory()->create(['name' => 'Ana Restrepo']);

    $this->withSession(['admin_logged_in' => true])
        ->get(route('admin.contacts'))
        ->assertSuccessful()
        ->assertSee('Ana Restrepo')
        ->assertSee('1 sin leer');

    $this->withSession(['admin_logged_in' => true])
        ->get(route('admin.contacts.show', $contact))
        ->assertSuccessful()
        ->assertSee($contact->message);

    expect($contact->fresh()->read)->toBeTrue();
});

test('the admin can delete a contact message', function () {
    $contact = Contact::factory()->create();

    $this->withSession(['admin_logged_in' => true])
        ->delete(route('admin.contacts.destroy', $contact))
        ->assertRedirect(route('admin.contacts'));

    $this->assertModelMissing($contact);
});

test('the admin can create a service with an image', function () {
    Storage::fake('public');

    $this->withSession(['admin_logged_in' => true])
        ->post(route('admin.services.store'), [
            'title' => 'Formateo de equipos',
            'description' => 'Formateo e instalación de Windows con programas básicos.',
            'category' => 'servicios_tecnicos',
            'image' => UploadedFile::fake()->create('servicio.jpg', 120, 'image/jpeg'),
        ])
        ->assertSessionHas('success');

    $service = Service::sole();

    expect($service->title)->toBe('Formateo de equipos');
    Storage::disk('public')->assertExists($service->image);
});

test('a service with an invalid category is rejected', function () {
    $this->withSession(['admin_logged_in' => true])
        ->post(route('admin.services.store'), [
            'title' => 'Servicio',
            'description' => 'Descripción del servicio.',
            'category' => 'otra',
        ])
        ->assertSessionHasErrors('category');

    expect(Service::count())->toBe(0);
});

test('deleting a service also deletes its image', function () {
    Storage::fake('public');
    $imagePath = UploadedFile::fake()->create('servicio.jpg', 120, 'image/jpeg')->store('services', 'public');
    $service = Service::factory()->create(['image' => $imagePath]);

    $this->withSession(['admin_logged_in' => true])
        ->delete(route('admin.services.destroy', $service))
        ->assertSessionHas('success');

    $this->assertModelMissing($service);
    Storage::disk('public')->assertMissing($imagePath);
});
