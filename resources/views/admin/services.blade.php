@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-slate-900 dark:text-white">Gestión de Servicios</h1>
    </div>

    {{-- Flash success --}}
    @if(session('success'))
        <div class="bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-400 border border-green-200 dark:border-green-800 px-4 py-3 rounded-lg mb-6 text-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulario agregar servicio --}}
    <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 mb-12">
        <h2 class="text-xl font-bold mb-6 text-slate-900 dark:text-white">Agregar nuevo servicio</h2>

        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data"
              class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <div>
                <input type="text" name="title"
                       value="{{ old('title') }}"
                       placeholder="Título (ej: Auditoría web)"
                       maxlength="100" required
                       class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-blue-500 outline-none transition
                              {{ $errors->has('title') ? 'border-red-400' : '' }}">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <select name="category" required
                        class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-blue-500 outline-none transition">
                    <option value="diseno"            {{ old('category') === 'diseno'            ? 'selected' : '' }}>Diseño Web</option>
                    <option value="ciberseguridad"    {{ old('category') === 'ciberseguridad'    ? 'selected' : '' }}>Ciberseguridad</option>
                    <option value="servicios_tecnicos" {{ old('category') === 'servicios_tecnicos' ? 'selected' : '' }}>Servicios Técnicos</option>
                </select>
                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <textarea name="description" placeholder="Descripción (máx 1000 caracteres)"
                          maxlength="1000" required
                          class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-blue-500 outline-none transition h-32
                                 {{ $errors->has('description') ? 'border-red-400' : '' }}">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Imagen del servicio (opcional)</label>
                <input type="file" name="image"
                       accept="image/jpeg,image/png,image/jpg,image/webp"
                       class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-blue-500 outline-none transition">
                @error('image')
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
    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-50 dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">Título</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">Categoría</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">Imagen</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">Fecha</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                    <tr class="border-b border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 transition">
                        <td class="px-6 py-4 font-medium text-slate-800 dark:text-white">{{ $service->title }}</td>
                        <td class="px-6 py-4">
                            @php
                                $categoryColors = [
                                    'diseno' => 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400',
                                    'ciberseguridad' => 'bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300',
                                    'servicios_tecnicos' => 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400'
                                ];
                                $categoryLabels = [
                                    'diseno' => 'Diseño Web',
                                    'ciberseguridad' => 'Ciberseguridad',
                                    'servicios_tecnicos' => 'Servicios Técnicos'
                                ];
                                $colorClass = $categoryColors[$service->category] ?? 'bg-slate-100 text-slate-700';
                                $label = $categoryLabels[$service->category] ?? ucfirst($service->category);
                            @endphp
                            <span class="inline-block text-xs font-semibold px-2 py-1 rounded-full {{ $colorClass }}">
                                {{ $label }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            @if($service->image)
                                <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-16 h-16 object-cover rounded-lg" loading="lazy">
                            @else
                                <span class="text-slate-400 dark:text-slate-600 text-sm">Sin imagen</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-400 dark:text-slate-500">{{ $service->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 flex space-x-4">
                            <a href="{{ route('admin.services.show', $service) }}"
                               class="text-blue-500 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 text-sm font-semibold">Ver</a>

                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
                                  onsubmit="return confirm('¿Eliminar este servicio?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                        class="text-red-500 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 text-sm font-semibold">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-400 dark:text-slate-600">
                            No hay servicios registrados aún.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection