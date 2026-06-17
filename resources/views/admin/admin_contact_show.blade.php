@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-100">

        <a href="{{ route('admin.contacts') }}" class="text-blue-600 hover:underline mb-6 inline-block text-sm">
            ← Volver a mensajes
        </a>

        <div class="flex justify-between items-start mb-6">
            <h1 class="text-2xl font-bold text-slate-900">{{ $contact->name }}</h1>
            <span class="text-xs font-semibold px-2 py-1 rounded-full
                {{ $contact->service_interest === 'diseno' ? 'bg-blue-100 text-blue-700' : ($contact->service_interest === 'ciberseguridad' ? 'bg-slate-100 text-slate-700' : 'bg-amber-100 text-amber-700') }}">
                {{ $contact->service_label }}
            </span>
        </div>

        <div class="space-y-4 text-sm text-slate-600 mb-8">
            <div class="flex gap-2">
                <span class="font-semibold text-slate-700 w-24">Correo:</span>
                <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline">{{ $contact->email }}</a>
            </div>
            @if($contact->phone)
            <div class="flex gap-2">
                <span class="font-semibold text-slate-700 w-24">Teléfono:</span>
                <a href="tel:{{ $contact->phone }}" class="text-blue-600 hover:underline">{{ $contact->phone }}</a>
            </div>
            @endif
            <div class="flex gap-2">
                <span class="font-semibold text-slate-700 w-24">Recibido:</span>
                <span>{{ $contact->created_at->format('d/m/Y \a \l\a\s H:i') }}</span>
            </div>
        </div>

        <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
            <h3 class="font-semibold text-slate-800 mb-3">Mensaje:</h3>
            <p class="text-slate-600 leading-relaxed whitespace-pre-wrap">{{ $contact->message }}</p>
        </div>

        <div class="mt-8 flex gap-4">
            <a href="mailto:{{ $contact->email }}"
               class="bg-blue-600 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-blue-500 transition">
                Responder por correo
            </a>
            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                  onsubmit="return confirm('¿Eliminar este mensaje?')">
                @csrf @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-semibold px-2 py-2">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection