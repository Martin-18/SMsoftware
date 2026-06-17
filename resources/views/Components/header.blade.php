<header class="bg-white dark:bg-slate-900 shadow-sm sticky top-0 z-50 transition-colors duration-300">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="text-2xl font-bold dark:text-white">
            SM<span class="text-blue-600">software</span>
        </a>

        {{-- Nav Desktop --}}
        <nav class="hidden md:flex space-x-8 font-medium text-slate-700 dark:text-slate-300">
            <a href="{{ route('home') }}"
               class="hover:text-blue-600 dark:hover:text-blue-400 transition {{ request()->routeIs('home') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                Inicio
            </a>
            <a href="{{ route('design') }}"
               class="hover:text-blue-600 dark:hover:text-blue-400 transition {{ request()->routeIs('design') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                Diseño Web
            </a>
            <a href="{{ route('cybersecurity') }}"
               class="hover:text-blue-600 dark:hover:text-blue-400 transition {{ request()->routeIs('cybersecurity') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                Ciberseguridad
            </a>
            <a href="{{ route('technical.services') }}"
               class="hover:text-blue-600 dark:hover:text-blue-400 transition {{ request()->routeIs('technical.services') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
                Servicios Técnicos
            </a>
        </nav>

        {{-- Dark mode toggle Desktop --}}
        <div class="hidden md:flex items-center">
            <button id="dark-mode-toggle" data-theme-toggle type="button" aria-label="Alternar tema oscuro" class="p-2 text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition rounded-lg">
                {{-- Icono Sol (se muestra en modo oscuro) --}}
                <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                {{-- Icono Luna (se muestra en modo claro) --}}
                <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </button>
        </div>

        {{-- Hamburguesa mobile + Dark mode toggle --}}
        <div class="md:hidden flex items-center space-x-4">
            <button id="dark-mode-toggle-mobile" data-theme-toggle type="button" aria-label="Alternar tema oscuro" class="p-2 text-slate-500 dark:text-slate-400 rounded-lg">
                <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </button>
            <button class="text-2xl text-slate-700 dark:text-slate-300 p-2" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                ☰
            </button>
        </div>
    </div>

    {{-- Nav Mobile --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 px-6 py-4 space-y-4">
        <a href="{{ route('home') }}" class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('home') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Inicio
        </a>
        <a href="{{ route('design') }}" class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('design') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Diseño Web
        </a>
        <a href="{{ route('cybersecurity') }}" class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('cybersecurity') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Ciberseguridad
        </a>
        <a href="{{ route('technical.services') }}" class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('technical.services') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Servicios Técnicos
        </a>
    </div>
</header>