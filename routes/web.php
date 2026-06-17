<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

// ─── Rutas públicas 
Route::get('/',               fn() => view('main'))->name('home');
Route::get('/diseno',         [ServiceController::class, 'design'])->name('design');
Route::get('/ciberseguridad', [ServiceController::class, 'cybersecurity'])->name('cybersecurity');
Route::get('/contacto',       [ContactController::class, 'show'])->name('contact');
Route::post('/contacto',      [ContactController::class, 'store'])->name('contact.store');

// ─── Auth admin 
Route::get('/admin-login',   [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin-login',  [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin'])->group(function () {
    // Servicios
    Route::get('/admin/services',              [ServiceController::class, 'index'])->name('admin.services');
    Route::post('/admin/services',             [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/admin/services/{service}',    [ServiceController::class, 'show'])->name('admin.services.show');
    Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    // Mensajes de contacto
    Route::get('/admin/contacts',              [AdminContactController::class, 'index'])->name('admin.contacts');
    Route::get('/admin/contacts/{contact}',    [AdminContactController::class, 'show'])->name('admin.contacts.show');
    Route::delete('/admin/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('admin.contacts.destroy');
});