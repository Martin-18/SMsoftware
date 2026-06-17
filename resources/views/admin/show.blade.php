@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
        <a href="/admin/services" class="text-blue-600 hover:underline mb-4 inline-block">&larr; Volver al panel</a>
        
        @if($service->image)
        <div class="mb-6">
            <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-full h-64 object-cover rounded-lg">
        </div>
        @endif
        
        <h1 class="text-3xl font-bold text-slate-900 mb-2">{{ $service->title }}</h1>
        <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-6">
            {{ $service->category === 'diseno' ? 'Diseño' : ($service->category === 'ciberseguridad' ? 'Ciberseguridad' : 'Servicios Técnicos') }}
        </span>
        
        <div class="prose text-slate-600">
            <h3 class="font-semibold text-slate-800">Descripción:</h3>
            <p>{{ $service->description }}</p>
        </div>
        
        <div class="mt-8 pt-6 border-t border-slate-100">
            <p class="text-xs text-slate-400">Creado el: {{ $service->created_at->format('d/m/Y') }}</p>
        </div>
    </div>
</div>
@endsection