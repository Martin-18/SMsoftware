<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SMsoftware — Diseño Web y Ciberseguridad para empresas del Quindío, Colombia.">

    <title>@yield('title', 'SMsoftware | Diseño Web & Ciberseguridad')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased flex flex-col min-h-screen">

    <x-header />

    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- ─── Footer ─────────────────────────────────────────────────────────── --}}
    <footer class="bg-slate-900 text-slate-400 pt-14 pb-8">
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">

                {{-- Marca --}}
                <div>
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-white">
                        SM<span class="text-blue-400">software</span>
                    </a>
                    <p class="mt-4 text-sm leading-relaxed text-slate-400">
                        Soluciones digitales para empresas del Eje Cafetero.<br>
                        Armenia, Quindío — Colombia.
                    </p>
                </div>

                {{-- Servicios --}}
                <div>
                    <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Servicios</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('design') }}" class="hover:text-white transition">Diseño Web</a></li>
                        <li><a href="{{ route('cybersecurity') }}" class="hover:text-white transition">Ciberseguridad</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Solicitar cotización</a></li>
                    </ul>
                </div>

                {{-- Contacto --}}
                <div>
                    <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Contacto</h4>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="mailto:contacto@smsoftware.co" class="hover:text-white transition">
                                contacto@smsoftware.co
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/573000000000" target="_blank" class="hover:text-white transition">
                                +57 300 000 0000
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} SMsoftware. Todos los derechos reservados.</p>
                <p>Hecho con ❤️ en el Quindío</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>