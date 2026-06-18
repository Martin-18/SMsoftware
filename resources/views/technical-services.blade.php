@extends('layouts.app')

@section('title', 'Servicios Técnicos | SMsoftware')

@section('content')
<div class="container mx-auto px-6 py-12">

    {{-- Intro --}}
    <section class="mb-16 text-center">
        <h1 class="text-4xl font-bold mb-6 text-white">Servicios Técnicos</h1>
        <p class="text-lg text-slate-400 max-w-2xl mx-auto">
            Instalación de programas, actualización de software y mantenimiento de equipos.
            Tu equipo funcionando como nuevo.
        </p>
    </section>

    {{-- Servicios principales --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">

        {{-- Instalación de Programas --}}
        <div class="bg-slate-900 p-8 rounded-2xl shadow-sm border border-slate-800 hover:shadow-md transition">
            <div class="w-14 h-14 bg-blue-900/30 rounded-xl flex items-center justify-center text-2xl mb-6">
                💻
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Instalación de Programas</h3>
            <p class="text-sm text-slate-400 mb-6">Instalación profesional de software y herramientas.</p>
            <ul class="text-sm text-slate-400 space-y-3 mb-8">
                <li>📦 Instalación de Office y suites ofimáticas</li>
                <li>🎨 Software de diseño y edición</li>
                <li>🛡️ Antivirus y seguridad</li>
                <li>⚙️ Configuración personalizada</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20me%20interesa%20el%20servicio%20de%20Instalación%20de%20Programas"
               class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Solicitar Servicio
            </a>
        </div>

        {{-- Actualización de Software --}}
        <div class="bg-slate-900 p-8 rounded-2xl shadow-lg border-2 border-blue-500 relative">
            <span class="absolute top-0 right-8 bg-blue-500 text-white px-3 py-1 text-xs font-bold rounded-b-lg">POPULAR</span>
            <div class="w-14 h-14 bg-blue-900/30 rounded-xl flex items-center justify-center text-2xl mb-6">
                🔄
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Actualización de Software</h3>
            <p class="text-sm text-slate-400 mb-6">Mantén tu equipo al día con las últimas versiones.</p>
            <ul class="text-sm text-slate-400 space-y-3 mb-8">
                <li>🌐 Actualización de Windows y drivers</li>
                <li>📱 Actualización de aplicaciones</li>
                <li>🔧 Optimización de rendimiento</li>
                <li>📋 Reporte de actualizaciones</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20me%20interesa%20el%20servicio%20de%20Actualización%20de%20Software"
               class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Solicitar Servicio
            </a>
        </div>

        {{-- Mantenimiento de Equipos --}}
        <div class="bg-slate-900 p-8 rounded-2xl shadow-sm border border-slate-800 hover:shadow-md transition">
            <div class="w-14 h-14 bg-blue-900/30 rounded-xl flex items-center justify-center text-2xl mb-6">
                🔧
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Mantenimiento de Equipos</h3>
            <p class="text-sm text-slate-400 mb-6">Mantenimiento preventivo y correctivo de computadores.</p>
            <ul class="text-sm text-slate-400 space-y-3 mb-8">
                <li>🧹 Limpieza física de hardware</li>
                <li>🔍 Diagnóstico de problemas</li>
                <li>⚡ Optimización de sistema</li>
                <li>💾 Recuperación de datos</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20me%20interesa%20el%20servicio%20de%20Mantenimiento%20de%20Equipos"
               class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Solicitar Servicio
            </a>
        </div>
    </div>

    {{-- Servicios dinámicos — vienen del admin --}}
    @if($services->isNotEmpty())
    <section class="bg-slate-800 p-8 rounded-2xl">
        <h2 class="text-2xl font-bold mb-8 text-white">Otros Servicios Técnicos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($services as $service)
                <div class="p-6 bg-slate-900 rounded-xl shadow-sm border border-slate-800">
                    @if($service->image)
                    <div class="mb-4">
                        <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-full h-48 object-cover rounded-lg" loading="lazy">
                    </div>
                    @endif
                    <h3 class="font-bold text-lg text-white">{{ $service->title }}</h3>
                    <p class="text-slate-400 mt-2 text-sm leading-relaxed">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- ¿Por qué elegirnos? --}}
    <section class="mt-20">
        <h2 class="text-3xl font-bold text-center text-white mb-12">¿Por qué elegir nuestros servicios técnicos?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center p-6">
                <div class="text-4xl mb-4">🛡️</div>
                <h3 class="font-bold text-white mb-2">Garantía de Satisfacción</h3>
                <p class="text-sm text-slate-400">No cobramos si no quedas satisfecho con el servicio</p>
            </div>
            <div class="text-center p-6">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="font-bold text-white mb-2">Soporte Rápido</h3>
                <p class="text-sm text-slate-400">Respuesta inmediata vía WhatsApp y atención local</p>
            </div>
            <div class="text-center p-6">
                <div class="text-4xl mb-4">💰</div>
                <h3 class="font-bold text-white mb-2">Precios Competitivos</h3>
                <p class="text-sm text-slate-400">Tarifas accesibles adaptadas a tu presupuesto</p>
            </div>
            <div class="text-center p-6">
                <div class="text-4xl mb-4">👨‍💻</div>
                <h3 class="font-bold text-white mb-2">Técnicos Certificados</h3>
                <p class="text-sm text-slate-400">Personal capacitado con experiencia comprobada</p>
            </div>
        </div>
    </section>

</div>
@endsection
