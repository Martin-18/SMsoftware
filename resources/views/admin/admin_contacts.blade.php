@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-white">Mensajes de Contacto</h1>
            @if($unread > 0)
                <span class="inline-block mt-1 bg-red-100 text-red-600 text-xs font-bold px-2 py-1 rounded-full">
                    {{ $unread }} sin leer
                </span>
            @endif
        </div>
        <a href="{{ route('admin.services') }}" class="text-sm text-slate-500 hover:text-slate-700 transition">
            ← Volver a Servicios
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-900/20 text-green-400 border border-green-800 px-4 py-3 rounded-lg mb-6 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-slate-900 rounded-2xl shadow-sm border border-slate-800 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-800 border-b border-slate-700">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-300">Nombre</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-300">Correo</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-300">Interés</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-300">Fecha</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-300">Estado</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr class="border-b border-slate-700 hover:bg-slate-800 transition
                               {{ !$contact->read ? 'bg-blue-50/40' : '' }}">
                        <td class="px-6 py-4 font-medium text-white">
                            {{ !$contact->read ? '● ' : '' }}{{ $contact->name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-400">{{ $contact->email }}</td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-semibold px-2 py-1 rounded-full
                                {{ $contact->service_interest === 'diseno' ? 'bg-blue-900/30 text-blue-400' : ($contact->service_interest === 'ciberseguridad' ? 'bg-slate-800 text-slate-300' : 'bg-amber-900/30 text-amber-400') }}">
                                {{ $contact->service_label }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500">{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                        <td class="px-6 py-4 text-sm">
                            @if($contact->read)
                                <span class="text-slate-400">Leído</span>
                            @else
                                <span class="text-blue-600 font-semibold">Nuevo</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 flex space-x-4">
                            <a href="{{ route('admin.contacts.show', $contact) }}"
                               class="text-blue-400 hover:text-blue-300 text-sm font-semibold">Ver</a>
                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                                  onsubmit="return confirm('¿Eliminar este mensaje?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300 text-sm font-semibold">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-slate-600">
                            No hay mensajes recibidos.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if($contacts->hasPages())
            <div class="px-6 py-4 border-t border-slate-700">
                {{ $contacts->links() }}
            </div>
        @endif
    </div>
</div>
@endsection