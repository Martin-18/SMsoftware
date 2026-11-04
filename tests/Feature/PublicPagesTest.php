<?php

use App\Models\Service;

test('public pages load successfully', function (string $routeName) {
    $this->get(route($routeName))->assertSuccessful();
})->with([
    'inicio' => 'home',
    'diseño' => 'design',
    'ciberseguridad' => 'cybersecurity',
    'servicios técnicos' => 'technical.services',
    'contacto' => 'contact',
    'política de datos' => 'privacy',
]);

test('the footer links to the privacy policy', function () {
    $this->get(route('home'))->assertSee(route('privacy'), false);
});

test('the header links to the contact page', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee(route('contact'), false);
});

test('responses include security headers', function () {
    $this->get(route('home'))
        ->assertHeader('X-Content-Type-Options', 'nosniff')
        ->assertHeader('X-Frame-Options', 'SAMEORIGIN')
        ->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
});

test('category pages only show services from their category', function () {
    $designService = Service::factory()->create(['category' => 'diseno', 'title' => 'Landing para cafetería']);
    $securityService = Service::factory()->create(['category' => 'ciberseguridad', 'title' => 'Auditoría de red']);

    $this->get(route('design'))
        ->assertSee($designService->title)
        ->assertDontSee($securityService->title);
});
