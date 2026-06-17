<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm() { return view('admin.login'); }

    public function login(Request $request)
    {
        if ($request->password === env('ADMIN_PASSWORD')) {
            session(['admin_logged_in' => true]);
            return redirect('/admin/services');
        }
        return back()->withErrors(['password' => 'Contraseña incorrecta']);
    }
}