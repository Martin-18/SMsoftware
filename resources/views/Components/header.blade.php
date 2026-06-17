<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold">SM<span class="text-blue-600">software</span></a>
        
        <nav class="hidden md:flex space-x-8 font-medium text-slate-700">
            <a href="/" class="hover:text-blue-600">Inicio</a>
            <a href="/#servicios" class="hover:text-blue-600">Servicios</a>
        </nav>

        <button class="md:hidden text-2xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            ☰
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t px-6 py-4 space-y-4">
        <a href="/" class="block text-slate-700">Inicio</a>
        <a href="/#servicios" class="block text-slate-700">Servicios</a>
    </div>
</header>