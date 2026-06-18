@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16 max-w-2xl">

    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-white mb-4">Contáctanos</h1>
        <p class="text-slate-400 text-lg">Cuéntanos tu proyecto y te respondemos en menos de 24 horas.</p>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl mb-8 text-sm font-medium">
            ✅ {{ session('success') }}
        </div>
    @endif

    <div class="bg-slate-900 rounded-2xl shadow-sm border border-slate-800 p-8">
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Nombre --}}
            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">
                    Nombre completo <span class="text-red-400">*</span>
                </label>
                <input type="text" name="name" value="{{ old('name') }}"
                       placeholder="Ej: Carlos Gómez"
                       class="w-full px-4 py-3 rounded-lg border {{ $errors->has('name') ? 'border-red-400 bg-red-50' : 'border-slate-700' }} bg-slate-800 text-white focus:border-blue-500 outline-none transition">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email + Teléfono --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">
                        Correo electrónico <span class="text-red-400">*</span>
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           placeholder="tucorreo@ejemplo.com"
                           class="w-full px-4 py-3 rounded-lg border {{ $errors->has('email') ? 'border-red-400 bg-red-50' : 'border-slate-700' }} bg-slate-800 text-white focus:border-blue-500 outline-none transition">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">
                        Teléfono <span class="text-slate-500 font-normal">(opcional)</span>
                    </label>
                    <input type="tel" name="phone" value="{{ old('phone') }}"
                           placeholder="+57 300 000 0000"
                           class="w-full px-4 py-3 rounded-lg border border-slate-700 bg-slate-800 text-white focus:border-blue-500 outline-none transition">
                </div>
            </div>

            {{-- Servicio --}}
            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">
                    ¿Qué servicio te interesa? <span class="text-red-400">*</span>
                </label>
                <select name="service_interest"
                        class="w-full px-4 py-3 rounded-lg border {{ $errors->has('service_interest') ? 'border-red-400 bg-red-50' : 'border-slate-700' }} bg-slate-800 text-white focus:border-blue-500 outline-none transition">
                    <option value="">Selecciona una opción...</option>
                    <option value="diseno"         {{ old('service_interest') === 'diseno'         ? 'selected' : '' }}>Diseño Web</option>
                    <option value="ciberseguridad" {{ old('service_interest') === 'ciberseguridad' ? 'selected' : '' }}>Ciberseguridad</option>
                    <option value="otro"           {{ old('service_interest') === 'otro'           ? 'selected' : '' }}>Otro / No sé aún</option>
                </select>
                @error('service_interest')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Mensaje --}}
            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">
                    Mensaje <span class="text-red-400">*</span>
                </label>
                <textarea name="message" rows="5"
                          placeholder="Cuéntanos brevemente tu proyecto o necesidad..."
                          class="w-full px-4 py-3 rounded-lg border {{ $errors->has('message') ? 'border-red-400 bg-red-50' : 'border-slate-700' }} bg-slate-800 text-white focus:border-blue-500 outline-none transition resize-none">{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 rounded-lg transition">
                Enviar mensaje →
            </button>
        </form>
    </div>

    {{-- Alternativa WhatsApp --}}
    <div class="mt-8 text-center text-sm text-slate-400 dark:text-slate-500">
        ¿Prefieres hablar directamente?
        <a href="https://wa.me/573105341232" target="_blank"
           class="text-green-600 font-semibold hover:underline">
            Escríbenos por WhatsApp
        </a>
    </div>
</div>
@endsection