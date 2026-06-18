@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-20 flex justify-center">
    <div class="w-full max-w-md bg-slate-900 p-8 rounded-2xl shadow-sm border border-slate-800">
        <h2 class="text-2xl font-bold mb-6 text-white text-center">Acceso Administrador</h2>
        
        @if($errors->any())
            <div class="bg-red-900/50 text-red-400 p-3 rounded mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/admin" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-slate-300 mb-2">Contraseña</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 rounded-lg border border-slate-700 bg-slate-800 text-white focus:border-blue-500 outline-none transition">
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 rounded-lg transition">
                Entrar al Panel
            </button>
        </form>
    </div>
</div>
@endsection