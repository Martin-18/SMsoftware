<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMsoftware | Soluciones Tecnológicas</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased flex flex-col min-h-screen">

    <x-header />

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-400 py-6 text-center text-sm mt-auto">
        <p>&copy; {{ date('Y') }} SMsoftware. Todos los derechos reservados.</p>
    </footer>

</body>
</html>