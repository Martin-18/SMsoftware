@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold text-slate-900 mb-8">Gestión de Servicios</h1>

    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 mb-12">
        <h2 class="text-xl font-bold mb-6 text-slate-900">Agregar nuevo servicio</h2>
        <form action="/admin/services" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <input type="text" name="title" placeholder="Título (ej: Auditoría web)" maxlength="100" required
                class="w-full px-4 py-3 rounded-lg border border-slate-200">
            
            <select name="category" class="w-full px-4 py-3 rounded-lg border border-slate-200" required>
    <option value="diseño">Diseño Web</option>
    <option value="ciberseguridad">Ciberseguridad</option>
</select>

            <textarea name="description" placeholder="Descripción (máx 1000 caracteres)" maxlength="1000" required
                class="w-full px-4 py-3 rounded-lg border border-slate-200 md:col-span-2 h-32"></textarea>
            
            <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-500 transition">
                Guardar Servicio
            </button>
        </form>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-50 border-b border-slate-100">
                <tr>
                    <th class="px-6 py-4">Título</th>
                    <th class="px-6 py-4">Categoría</th>
                    <th class="px-6 py-4">Acción</th>
                </tr>
            </thead>
            @foreach($services as $service)
<tr class="border-b border-slate-100">
    <td class="px-6 py-4 font-medium">{{ $service->title }}</td>
    <td class="px-6 py-4">
        {{ $service->category === 'diseno' ? 'Diseño' : 'Ciberseguridad' }}
    </td>
    <td class="px-6 py-4 flex space-x-3">
        <a href="/admin/services/{{ $service->id }}" class="text-blue-500 hover:text-blue-700 font-semibold">Ver</a>
        
        <form action="/admin/services/{{ $service->id }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach
        </table>
    </div>
</div>
@endsection