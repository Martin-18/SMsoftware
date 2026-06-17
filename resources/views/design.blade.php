@extends('layouts.app')

@section('title', 'Diseño Web Profesional | SMsoftware')

@section('content')
<div class="container mx-auto px-6 py-12">

    {{-- Intro --}}
    <section class="mb-16 text-center">
        <h1 class="text-4xl font-bold mb-6 text-slate-900 dark:text-white">Diseño Web Profesional</h1>
        <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
            Impulsamos tu marca con sitios web administrables, optimizados y adaptables.
            Creamos experiencias digitales que conectan.
        </p>
    </section>

    {{-- Planes --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">
        {{-- Plan Básico --}}
        <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 transition-colors duration-300">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">PLAN BÁSICO – "Presencia Web"</h3>
            <p class="text-3xl font-black text-blue-600 my-4">$500.000 COP</p>
            <p class="text-sm text-slate-500 dark:text-slate-400 mb-6">Ideal para emprendedores y marcas personales.</p>
            <ul class="text-sm text-slate-600 dark:text-slate-400 space-y-3 mb-8">
                <li>✅ Diseño web personalizado (1 a 3 secciones)</li>
                <li>✅ Adaptación a todos los dispositivos (responsive)</li>
                <li>✅ Integración con redes sociales</li>
                <li>✅ Botón de contacto directo</li>
                <li>✅ Pago inicial de dominio y hosting</li>
                <li>✅ Entrega en 10 días hábiles</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20me%20interesa%20el%20Plan%20Básico%20de%20Diseño"
               class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Seleccionar Plan
            </a>
        </div>

        {{-- Plan Intermedio --}}
        <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-sm border-2 border-blue-500 dark:border-blue-600 relative">
            <span class="absolute top-0 right-0 bg-blue-500 text-white px-3 py-1 text-xs font-bold rounded-bl-lg">POPULAR</span>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">PLAN INTERMEDIO – "Crecimiento Digital"</h3>
            <p class="text-3xl font-black text-blue-600 my-4">$800.000 COP</p>
            <ul class="text-sm text-slate-600 dark:text-slate-400 space-y-3 mb-8">
                <li>✅ Diseño web profesional (hasta 5 secciones)</li>
                <li>✅ Diseño 100% responsive</li>
                <li>✅ Menú de navegación personalizado</li>
                <li>✅ Galería de imágenes o portafolio</li>
                <li>✅ Integración con base de datos</li>
                <li>✅ Panel de administrador para gestionar contenido</li>
                <li>✅ Panel de estadísticas (visitas, productos)</li>
                <li>✅ Entrega en 20 días hábiles</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20me%20interesa%20el%20Plan%20Intermedio%20de%20Diseño"
               class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Seleccionar Plan
            </a>
        </div>

        {{-- Plan Premium --}}
        <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 transition-colors duration-300">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">PLAN PREMIUM – "Presencia Profesional"</h3>
            <p class="text-3xl font-black text-blue-600 my-4">$1.200.000 COP</p>
            <ul class="text-sm text-slate-600 dark:text-slate-400 space-y-3 mb-8">
                <li>✅ Diseño avanzado (hasta 7+ secciones)</li>
                <li>✅ Menú con animaciones suaves</li>
                <li>✅ Integración con Google Maps y horario</li>
                <li>✅ Optimización SEO básica</li>
                <li>✅ Formulario de contacto con envío automático</li>
                <li>✅ Entrega en 25 días hábiles</li>
            </ul>
            <a href="https://wa.me/573105341232?text=Hola,%20me%20interesa%20el%20Plan%20Premium%20de%20Diseño"
               class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Seleccionar Plan
            </a>
        </div>
    </div>

    {{-- Servicios dinámicos — vienen del admin, no de la vista --}}
    @if($services->isNotEmpty())
    <section class="bg-slate-50 dark:bg-slate-800 p-8 rounded-2xl transition-colors duration-300">
        <h2 class="text-2xl font-bold mb-8 text-slate-900 dark:text-white">Servicios Complementarios</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($services as $service)
                <div class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800">
                    <h3 class="font-bold text-lg text-slate-900 dark:text-white">{{ $service->title }}</h3>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 text-sm leading-relaxed">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </section>
    @endif

</div>
@endsection