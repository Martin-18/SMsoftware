<header class="bg-slate-900 shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="text-2xl font-bold text-white">
            SM<span class="text-blue-400">software</span>
        </a>

        {{-- Nav Desktop --}}
        <nav class="hidden md:flex space-x-8 font-medium text-slate-300">
            <a href="{{ route('home') }}"
               class="hover:text-blue-400 transition {{ request()->routeIs('home') ? 'text-blue-400 font-semibold' : '' }}">
                Inicio
            </a>
            <a href="{{ route('design') }}"
               class="hover:text-blue-400 transition {{ request()->routeIs('design') ? 'text-blue-400 font-semibold' : '' }}">
                Diseño Web
            </a>
            <a href="{{ route('cybersecurity') }}"
               class="hover:text-blue-400 transition {{ request()->routeIs('cybersecurity') ? 'text-blue-400 font-semibold' : '' }}">
                Ciberseguridad
            </a>
            <a href="{{ route('technical.services') }}"
               class="hover:text-blue-400 transition {{ request()->routeIs('technical.services') ? 'text-blue-400 font-semibold' : '' }}">
                Servicios Técnicos
            </a>
            <a href="{{ route('contact') }}"
               class="hover:text-blue-400 transition {{ request()->routeIs('contact') ? 'text-blue-400 font-semibold' : '' }}">
                Contacto
            </a>
        </nav>

        {{-- Hamburguesa mobile --}}
        <div class="md:hidden flex items-center">
            <button type="button" class="text-2xl text-slate-300 p-2" aria-label="Abrir menú" aria-controls="mobile-menu" aria-expanded="false"
                    onclick="const menu = document.getElementById('mobile-menu'); menu.classList.toggle('hidden'); this.setAttribute('aria-expanded', !menu.classList.contains('hidden'));">
                ☰
            </button>
        </div>
    </div>

    {{-- Nav Mobile --}}
    <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-t border-slate-800 px-6 py-4 space-y-4">
        <a href="{{ route('home') }}" class="block text-slate-300 {{ request()->routeIs('home') ? 'text-blue-400 font-semibold' : '' }}">
            Inicio
        </a>
        <a href="{{ route('design') }}" class="block text-slate-300 {{ request()->routeIs('design') ? 'text-blue-400 font-semibold' : '' }}">
            Diseño Web
        </a>
        <a href="{{ route('cybersecurity') }}" class="block text-slate-300 {{ request()->routeIs('cybersecurity') ? 'text-blue-400 font-semibold' : '' }}">
            Ciberseguridad
        </a>
        <a href="{{ route('technical.services') }}" class="block text-slate-300 {{ request()->routeIs('technical.services') ? 'text-blue-400 font-semibold' : '' }}">
            Servicios Técnicos
        </a>
        <a href="{{ route('contact') }}" class="block text-slate-300 {{ request()->routeIs('contact') ? 'text-blue-400 font-semibold' : '' }}">
            Contacto
        </a>
    </div>
</header>