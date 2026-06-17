<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;

Route::get('/diseno', function() { return view('design'); });
Route::get('/ciberseguridad', function() {return view('ciberseguridad');});

// Login Administrativo
Route::get('/admin-login', [AdminController::class, 'showLoginForm']);
Route::post('/admin-login', [AdminController::class, 'login']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/services', [ServiceController::class, 'index']);
    Route::post('/admin/services', [ServiceController::class, 'store']);
    Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy']);
    Route::get('/admin/services/{service}', [ServiceController::class, 'show']);
});
