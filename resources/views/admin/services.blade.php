@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-slate-900">Gestión de Servicios</h1>
    </div>

    {{-- Flash success --}}
    @if(session('success'))
        <div class="bg-green-50 text-green-700 border border-green-200 px-4 py-3 rounded-lg mb-6 text-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulario agregar servicio --}}
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 mb-12">
        <h2 class="text-xl font-bold mb-6 text-slate-900">Agregar nuevo servicio</h2>

        <form action="{{ route('admin.services.store') }}" method="POST"
              class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <div>
                <input type="text" name="title"
                       value="{{ old('title') }}"
                       placeholder="Título (ej: Auditoría web)"
                       maxlength="100" required
                       class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-500 outline-none transition
                              {{ $errors->has('title') ? 'border-red-400' : '' }}">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                {{-- FIX: values ahora son 'diseno' y 'ciberseguridad' (sin tilde, igual que la validación) --}}
                <select name="category" required
                        class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-500 outline-none transition">
                    <option value="diseno"         {{ old('category') === 'diseno'         ? 'selected' : '' }}>Diseño Web</option>
                    <option value="ciberseguridad" {{ old('category') === 'ciberseguridad' ? 'selected' : '' }}>Ciberseguridad</option>
                </select>
                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <textarea name="description" placeholder="Descripción (máx 1000 caracteres)"
                          maxlength="1000" required
                          class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-500 outline-none transition h-32
                                 {{ $errors->has('description') ? 'border-red-400' : '' }}">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-500 transition">
                    Guardar Servicio
                </button>
            </div>
        </form>
    </div>

    {{-- Tabla de servicios --}}
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-50 border-b border-slate-100">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600">Título</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600">Categoría</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600">Fecha</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                    <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
                        <td class="px-6 py-4 font-medium text-slate-800">{{ $service->title }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-block text-xs font-semibold px-2 py-1 rounded-full
                                {{ $service->category === 'diseno' ? 'bg-blue-100 text-blue-700' : 'bg-slate-100 text-slate-700' }}">
                                {{ $service->category === 'diseno' ? 'Diseño' : 'Ciberseguridad' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-400">{{ $service->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 flex space-x-4">
                            <a href="{{ route('admin.services.show', $service) }}"
                               class="text-blue-500 hover:text-blue-700 text-sm font-semibold">Ver</a>

                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
                                  onsubmit="return confirm('¿Eliminar este servicio?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                        class="text-red-500 hover:text-red-700 text-sm font-semibold">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-slate-400">
                            No hay servicios registrados aún.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection