@extends('layouts.app')

@section('title', 'Blindaje y Ciberseguridad | SMsoftware')

@section('content')
<div class="container mx-auto px-6 py-12">

    {{-- Intro --}}
    <section class="mb-16 text-center">
        <h1 class="text-4xl font-bold mb-6 text-slate-900">Blindaje y Ciberseguridad</h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">
            Protegemos tus activos digitales contra las amenazas más sofisticadas.
            Tu tranquilidad es nuestro código.
        </p>
    </section>

    {{-- Planes --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">

        {{-- Escudo Esencial --}}
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition">
            <h3 class="text-xl font-bold text-slate-900 mb-2">Escudo Esencial</h3>
            <p class="text-sm text-slate-500 mb-6">Protección básica para evitar brechas comunes.</p>
            <ul class="text-sm text-slate-600 space-y-3 mb-8">
                <li>🛡️ Escaneo de vulnerabilidades</li>
                <li>🔒 Configuración de Firewall básico</li>
                <li>💾 Copias de seguridad diarias</li>
                <li>✅ Certificado SSL activo</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20Escudo%20Esencial"
               class="block text-center bg-slate-900 text-white py-3 rounded-lg font-semibold hover:bg-slate-800 transition">
                Seleccionar Plan
            </a>
        </div>

        {{-- Defensa Proactiva --}}
        <div class="bg-white p-8 rounded-2xl shadow-lg border-2 border-blue-600 relative">
            <span class="absolute top-0 right-8 bg-blue-600 text-white px-3 py-1 text-xs font-bold rounded-b-lg">RECOMENDADO</span>
            <h3 class="text-xl font-bold text-slate-900 mb-2">Defensa Proactiva</h3>
            <p class="text-sm text-slate-500 mb-6">Monitoreo constante y blindaje avanzado.</p>
            <ul class="text-sm text-slate-600 space-y-3 mb-8">
                <li>🔍 Auditoría de seguridad trimestral</li>
                <li>🚀 Detección de intrusos (IDS)</li>
                <li>⚙️ Optimización de cabeceras de seguridad</li>
                <li>📞 Soporte técnico prioritario</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20Defensa%20Proactiva"
               class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Seleccionar Plan
            </a>
        </div>

        {{-- Blindaje Total --}}
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition">
            <h3 class="text-xl font-bold text-slate-900 mb-2">Blindaje Total</h3>
            <p class="text-sm text-slate-500 mb-6">Solución integral para empresas de alto riesgo.</p>
            <ul class="text-sm text-slate-600 space-y-3 mb-8">
                <li>🏢 Seguridad corporativa a medida</li>
                <li>⚖️ Cumplimiento normativo (GDPR/Ley 1581)</li>
                <li>⚡ Respuesta a incidentes 24/7</li>
                <li>🎓 Capacitación al personal</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20Blindaje%20Total"
               class="block text-center bg-slate-900 text-white py-3 rounded-lg font-semibold hover:bg-slate-800 transition">
                Seleccionar Plan
            </a>
        </div>
    </div>

    {{-- Servicios dinámicos — vienen del admin, no de la vista --}}
    @if($services->isNotEmpty())
    <section class="bg-slate-50 p-8 rounded-2xl">
        <h2 class="text-2xl font-bold mb-8 text-slate-900">Otros Servicios de Seguridad</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($services as $service)
                <div class="p-6 bg-white rounded-xl shadow-sm border border-slate-100">
                    <h3 class="font-bold text-lg text-slate-900">{{ $service->title }}</h3>
                    <p class="text-slate-600 mt-2 text-sm leading-relaxed">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </section>
    @endif

</div>
@endsection