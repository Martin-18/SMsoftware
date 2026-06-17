@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-slate-900 text-white py-24">
        <div class="container mx-auto px-6 text-center md:text-left flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight tracking-tight">
                    Diseño Web y Ciberseguridad para el Quindío
                </h1>
                <p class="text-lg text-slate-400 mb-10 max-w-lg">
                    En SMsoftware impulsamos tu negocio con páginas corporativas modernas y protegemos tu información con soluciones proactivas.
                </p>
                
                <a href="https://wa.me/573000000000?text=Hola,%20deseo%20información%20sobre%20SMsoftware" target="_blank" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-8 rounded-lg transition duration-300">
                    Contactar por WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    
            <div class="mt-12 bg-slate-900 p-8 rounded-2xl border border-slate-800 text-center text-white">
    <h3 class="text-2xl font-bold mb-4">¿Tu negocio está protegido?</h3>
    <p class="text-slate-400 mb-6">Explora nuestros planes de ciberseguridad para blindar tu infraestructura digital.</p>
    <a href="/ciberseguridad" class="inline-block bg-white text-slate-900 px-8 py-3 rounded-lg font-semibold hover:bg-slate-100 transition">
        Ver Planes de Seguridad
    </a>
</div>

            <div class="mt-12 bg-blue-50 p-8 rounded-2xl border border-blue-100 text-center">
        <h3 class="text-2xl font-bold text-blue-900 mb-4">¿Buscas presencia digital?</h3>
        <p class="text-blue-700 mb-6">Explora nuestros planes de diseño web profesional, desde presencia básica hasta soluciones corporativas.</p>
        <a href="/diseno" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
            Ver Planes de Diseño
        </a>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-slate-900 mb-16">Nuestro Equipo</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-2xl mx-auto">
            <!-- Martin -->
            <div class="text-center">
                <div class="w-32 h-32 bg-slate-200 rounded-full mx-auto mb-6"></div>
                <h3 class="font-bold text-lg text-slate-900">Martin</h3>
                <p class="text-blue-600 font-medium">Diseño Web</p>
            </div>
            <!-- Samuel -->
            <div class="text-center">
                <div class="w-32 h-32 bg-slate-200 rounded-full mx-auto mb-6"></div>
                <h3 class="font-bold text-lg text-slate-900">Samuel</h3>
                <p class="text-blue-600 font-medium">Ciber seguridad</p>
            </div>
        </div>
    </div>
</section>
@endsection