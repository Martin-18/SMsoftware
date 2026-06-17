<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.services');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        if ($request->password === config('app.admin_password')) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.services');
        }

        return back()->withErrors(['password' => 'Contraseña incorrecta']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('home');
    }
}