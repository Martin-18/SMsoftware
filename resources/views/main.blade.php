@extends('layouts.app')

@section('content')

{{-- ─── Hero ──────────────────────────────────────────────────────────────── --}}
<section class="bg-slate-900 dark:bg-slate-950 text-white py-24 overflow-hidden transition-colors duration-300">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-12">

        {{-- Texto --}}
        <div class="md:w-1/2 animate-on-scroll">
            <span class="inline-block bg-blue-600/20 text-blue-400 text-xs font-semibold tracking-widest uppercase px-3 py-1 rounded-full mb-6">
                Quindío · Armenia · Colombia
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight tracking-tight">
                Diseño Web y<br>
                <span class="text-blue-400 dark:text-blue-500">Ciberseguridad</span><br>
                para tu negocio
            </h1>
            <p class="text-lg text-slate-400 dark:text-slate-300 mb-10 max-w-lg">
                En SMsoftware construimos tu presencia digital con páginas modernas y protegemos tu información con soluciones proactivas.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('contact') }}"
                   class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-8 rounded-lg transition">
                    Solicitar cotización
                </a>
                <a href="https://wa.me/573105341232?text=Hola,%20deseo%20información%20sobre%20SMsoftware"
                   target="_blank"
                   class="bg-white/10 hover:bg-white/20 text-white font-semibold py-3 px-8 rounded-lg transition">
                    WhatsApp
                </a>
            </div>
        </div>

        {{-- Ilustración SVG (sin imágenes externas) --}}
        <div class="md:w-1/2 flex justify-center animate-on-scroll delay-200">
            <svg viewBox="0 0 420 300" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-md opacity-90">
                <!-- Monitor -->
                <rect x="60" y="30" width="300" height="190" rx="14" fill="#1e40af" opacity=".25"/>
                <rect x="72" y="44" width="276" height="162" rx="8" fill="#1e3a8a"/>
                <!-- Pantalla código -->
                <rect x="85" y="58" width="130" height="12" rx="4" fill="#3b82f6" opacity=".7"/>
                <rect x="85" y="78" width="100" height="8" rx="3" fill="#64748b"/>
                <rect x="85" y="93" width="145" height="8" rx="3" fill="#64748b" opacity=".5"/>
                <rect x="85" y="108" width="80" height="8" rx="3" fill="#3b82f6" opacity=".5"/>
                <rect x="85" y="123" width="120" height="8" rx="3" fill="#64748b" opacity=".4"/>
                <rect x="85" y="138" width="60" height="8" rx="3" fill="#22c55e" opacity=".6"/>
                <rect x="85" y="153" width="110" height="8" rx="3" fill="#64748b" opacity=".3"/>
                <!-- Panel derecho -->
                <rect x="232" y="58" width="104" height="148" rx="6" fill="#0f172a" opacity=".6"/>
                <rect x="242" y="72" width="40" height="40" rx="20" fill="#3b82f6" opacity=".4"/>
                <text x="252" y="97" fill="#93c5fd" font-size="14" font-family="monospace">SM</text>
                <rect x="242" y="120" width="84" height="6" rx="3" fill="#334155"/>
                <rect x="242" y="134" width="60" height="6" rx="3" fill="#334155" opacity=".6"/>
                <rect x="242" y="148" width="72" height="6" rx="3" fill="#334155" opacity=".4"/>
                <rect x="242" y="168" width="84" height="24" rx="6" fill="#3b82f6" opacity=".7"/>
                <text x="260" y="185" fill="white" font-size="9" font-family="sans-serif">Contactar</text>
                <!-- Base monitor -->
                <rect x="185" y="220" width="50" height="12" rx="4" fill="#334155"/>
                <rect x="160" y="232" width="100" height="8" rx="4" fill="#334155"/>
                <!-- Escudo seguridad -->
                <path d="M340 80 L360 90 L360 115 Q360 128 340 135 Q320 128 320 115 L320 90 Z" fill="#3b82f6" opacity=".3"/>
                <path d="M340 80 L360 90 L360 115 Q360 128 340 135 Q320 128 320 115 L320 90 Z" stroke="#3b82f6" stroke-width="2"/>
                <path d="M332 107 L338 113 L350 98" stroke="#60a5fa" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</section>

{{-- ─── Servicios ─────────────────────────────────────────────────────────── --}}
<section class="py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="servicios">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-slate-900 dark:text-white mb-4 animate-on-scroll">Nuestros Servicios</h2>
        <p class="text-center text-slate-500 dark:text-slate-400 mb-14 max-w-xl mx-auto animate-on-scroll delay-100">
            Soluciones digitales completas para impulsar y proteger tu negocio en el Quindío.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- Diseño --}}
            <div class="group bg-slate-50 dark:bg-slate-800 hover:bg-blue-600 dark:hover:bg-blue-700 border border-slate-200 dark:border-slate-700 hover:border-blue-600 dark:hover:border-blue-500 rounded-2xl p-8 transition-all duration-300 animate-on-scroll card-hover-effect">
                <div class="w-14 h-14 bg-blue-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center text-2xl mb-6 transition">
                    🖥️
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white group-hover:text-white mb-3 transition">Diseño Web</h3>
                <p class="text-slate-500 dark:text-slate-400 group-hover:text-blue-100 text-sm leading-relaxed mb-6 transition">
                    Páginas web corporativas, landing pages y tiendas online. Responsive, rápidas y administrables.
                </p>
                <a href="{{ route('design') }}"
                   class="inline-block text-blue-600 group-hover:text-white font-semibold text-sm hover:underline transition">
                    Ver planes →
                </a>
            </div>

            {{-- Ciberseguridad --}}
            <div class="group bg-slate-50 dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-700 border border-slate-200 dark:border-slate-700 hover:border-slate-800 dark:hover:border-slate-600 rounded-2xl p-8 transition-all duration-300 animate-on-scroll delay-200 card-hover-effect">
                <div class="w-14 h-14 bg-slate-200 group-hover:bg-white/20 rounded-xl flex items-center justify-center text-2xl mb-6 transition">
                    🛡️
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white group-hover:text-white mb-3 transition">Ciberseguridad</h3>
                <p class="text-slate-500 dark:text-slate-400 group-hover:text-slate-300 text-sm leading-relaxed mb-6 transition">
                    Auditorías, protección de infraestructura y cumplimiento normativo para empresas locales.
                </p>
                <a href="{{ route('cybersecurity') }}"
                   class="inline-block text-slate-700 dark:text-slate-300 group-hover:text-white font-semibold text-sm hover:underline transition">
                    Ver planes →
                </a>
            </div>

            {{-- Servicios Técnicos --}}
            <div class="group bg-slate-50 dark:bg-slate-800 hover:bg-blue-600 dark:hover:bg-blue-700 border border-slate-200 dark:border-slate-700 hover:border-blue-600 dark:hover:border-blue-500 rounded-2xl p-8 transition-all duration-300 animate-on-scroll delay-200 card-hover-effect">
                <div class="w-14 h-14 bg-blue-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center text-2xl mb-6 transition">
                    🔧
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white group-hover:text-white mb-3 transition">Servicios Técnicos</h3>
                <p class="text-slate-500 dark:text-slate-400 group-hover:text-blue-100 text-sm leading-relaxed mb-6 transition">
                    Instalación de programas, actualización de software y mantenimiento de equipos.
                </p>
                <a href="{{ route('technical.services') }}"
                   class="inline-block text-blue-600 group-hover:text-white font-semibold text-sm hover:underline transition">
                    Ver servicios →
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ─── Por qué elegirnos ─────────────────────────────────────────────────── --}}
<section class="py-16 bg-slate-50 dark:bg-slate-800 transition-colors duration-300">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto text-center">
            <div>
                <div class="text-3xl font-black text-blue-600 dark:text-blue-500 mb-2 animate-on-scroll">100%</div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Sitios responsive y optimizados para SEO</p>
            </div>
            <div>
                <div class="text-3xl font-black text-blue-600 dark:text-blue-500 mb-2 animate-on-scroll delay-100">24h</div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Tiempo máximo de respuesta a tu consulta</p>
            </div>
            <div>
                <div class="text-3xl font-black text-blue-600 dark:text-blue-500 mb-2 animate-on-scroll delay-200">Ley 1581</div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Cumplimiento normativo de datos en Colombia</p>
            </div>
        </div>
    </div>
</section>

{{-- ─── Equipo ─────────────────────────────────────────────────────────────── --}}
<section class="py-20 bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-slate-900 dark:text-white mb-4 animate-on-scroll">Nuestro Equipo</h2>
        <p class="text-center text-slate-500 dark:text-slate-400 mb-14 animate-on-scroll delay-100">Dos especialistas, una sola misión: hacer crecer tu negocio.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-2xl mx-auto">
            {{-- Martin --}}
            <div class="text-center animate-on-scroll">
                {{-- Avatar con imagen real --}}
                <div class="w-28 h-28 rounded-full mx-auto mb-5 overflow-hidden border-4 border-blue-600 dark:border-blue-500 shadow-lg">
                    @if(file_exists(public_path('images/team/martin.jpg')))
                        <img src="{{ asset('images/team/martin.jpg') }}" alt="Martín - SMsoftware" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-blue-600 flex items-center justify-center">
                            <span class="text-white text-3xl font-black">M</span>
                        </div>
                    @endif
                </div>
                <h3 class="font-bold text-lg text-slate-900 dark:text-white">Martín</h3>
                <p class="text-blue-600 dark:text-blue-500 font-medium text-sm">Diseño Web & Frontend</p>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 max-w-xs mx-auto">
                    Especialista en interfaces modernas, UX y desarrollo web con Laravel.
                </p>
            </div>
            {{-- Samuel --}}
            <div class="text-center animate-on-scroll delay-200">
                {{-- Avatar con imagen real --}}
                <div class="w-28 h-28 rounded-full mx-auto mb-5 overflow-hidden border-4 border-slate-700 dark:border-slate-600 shadow-lg">
                    @if(file_exists(public_path('images/team/samuel.jpg')))
                        <img src="{{ asset('images/team/samuel.jpg') }}" alt="Samuel - SMsoftware" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-slate-700 flex items-center justify-center">
                            <span class="text-white text-3xl font-black">S</span>
                        </div>
                    @endif
                </div>
                <h3 class="font-bold text-lg text-slate-900 dark:text-white">Samuel</h3>
                <p class="text-blue-600 dark:text-blue-500 font-medium text-sm">Ciberseguridad & Redes</p>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 max-w-xs mx-auto">
                    Experto en protección de infraestructura digital y análisis de vulnerabilidades.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ─── CTA final ──────────────────────────────────────────────────────────── --}}
<section class="bg-blue-600 dark:bg-blue-700 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4 animate-on-scroll">¿Listo para dar el siguiente paso?</h2>
        <p class="text-blue-100 dark:text-blue-200 mb-8 max-w-lg mx-auto animate-on-scroll delay-100">
            Cuéntanos tu proyecto hoy y recibe una propuesta sin compromiso.
        </p>
        <a href="{{ route('contact') }}"
           class="inline-block bg-white dark:bg-slate-100 text-blue-600 dark:text-blue-700 font-semibold px-10 py-3 rounded-lg hover:bg-blue-50 dark:hover:bg-slate-200 transition btn-hover-effect animate-on-scroll">
            Solicitar cotización gratis
        </a>
    </div>
</section>

@endsection