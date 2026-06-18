<!DOCTYPE html>
<html lang="es" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SMsoftware — Diseño Web y Ciberseguridad para empresas del Quindío, Colombia.">

    <title>@yield('title', 'SMsoftware | Diseño Web & Ciberseguridad')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-slate-950 text-slate-200 font-sans antialiased flex flex-col min-h-screen">

    <x-header />

    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- ─── Footer ─────────────────────────────────────────────────────────── --}}
    <x-footer />

    {{-- Scroll animations --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    {{-- WhatsApp Widget --}}
    <x-whatsapp-widget />

    @stack('scripts')
</body>
</html>