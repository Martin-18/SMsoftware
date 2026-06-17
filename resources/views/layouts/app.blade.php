<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SMsoftware — Diseño Web y Ciberseguridad para empresas del Quindío, Colombia.">

    <title>@yield('title', 'SMsoftware | Diseño Web & Ciberseguridad')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 dark:bg-slate-950 text-slate-800 dark:text-slate-200 font-sans antialiased flex flex-col min-h-screen transition-colors duration-300">

    <x-header />

    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- ─── Footer ─────────────────────────────────────────────────────────── --}}
    <footer class="bg-slate-900 dark:bg-slate-950 text-slate-400 dark:text-slate-500 pt-14 pb-8 transition-colors duration-300">
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">

                {{-- Marca --}}
                <div>
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-white dark:text-slate-100">
                        SM<span class="text-blue-400 dark:text-blue-500">software</span>
                    </a>
                    <p class="mt-4 text-sm leading-relaxed text-slate-400 dark:text-slate-500">
                        Soluciones digitales para empresas del Eje Cafetero.<br>
                        Armenia, Quindío — Colombia.
                    </p>
                </div>

                {{-- Servicios --}}
                <div>
                    <h4 class="text-white dark:text-slate-100 font-semibold mb-4 text-sm uppercase tracking-wider">Servicios</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('design') }}" class="hover:text-white dark:hover:text-slate-200 transition">Diseño Web</a></li>
                        <li><a href="{{ route('cybersecurity') }}" class="hover:text-white dark:hover:text-slate-200 transition">Ciberseguridad</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white dark:hover:text-slate-200 transition">Solicitar cotización</a></li>
                    </ul>
                </div>

                {{-- Contacto --}}
                <div>
                    <h4 class="text-white dark:text-slate-100 font-semibold mb-4 text-sm uppercase tracking-wider">Contacto</h4>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="mailto:contacto@smsoftware.co" class="hover:text-white dark:hover:text-slate-200 transition">
                                contacto@smsoftware.co
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/573105341232" target="_blank" class="hover:text-white dark:hover:text-slate-200 transition">
                                +57 310 534 1232
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 dark:border-slate-800 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 dark:text-slate-600">
                <p>&copy; {{ date('Y') }} SMsoftware. Todos los derechos reservados.</p>
                <p>Hecho con ❤️ en el Quindío</p>
            </div>
        </div>
    </footer>

    {{-- Dark mode JavaScript --}}
    <script>
        // Dark mode functionality
        (function() {
            const html = document.documentElement;
            const toggleDesktop = document.getElementById('dark-mode-toggle');
            const toggleMobile = document.getElementById('dark-mode-toggle-mobile');

            // Check for saved preference or system preference
            const savedTheme = localStorage.getItem('theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            // Set initial theme
            if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }

            // Toggle function
            function toggleDarkMode() {
                html.classList.toggle('dark');
                const isDark = html.classList.contains('dark');
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
            }

            // Add event listeners
            if (toggleDesktop) toggleDesktop.addEventListener('click', toggleDarkMode);
            if (toggleMobile) toggleMobile.addEventListener('click', toggleDarkMode);

            // Listen for system theme changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                if (!localStorage.getItem('theme')) {
                    if (e.matches) {
                        html.classList.add('dark');
                    } else {
                        html.classList.remove('dark');
                    }
                }
            });
        })();

        // Scroll animations
        (function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            // Observe all elements with animate-on-scroll class
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        })();
    </script>

    @stack('scripts')

    {{-- WhatsApp Widget --}}
    <x-whatsapp-widget />
</body>
</html>