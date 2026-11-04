<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function showLoginForm(): View|RedirectResponse
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.services');
        }

        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        $adminPassword = (string) config('app.admin_password');

        if ($adminPassword !== '' && hash_equals($adminPassword, $request->string('password')->toString())) {
            $request->session()->regenerate();
            $request->session()->put('admin_logged_in', true);

            return redirect()->route('admin.services');
        }

        return back()->withErrors(['password' => 'Contraseña incorrecta']);
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_logged_in');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
