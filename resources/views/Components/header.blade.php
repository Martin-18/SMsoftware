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

        {{-- Botón admin / logout + Dark mode toggle --}}
        <div class="hidden md:flex items-center space-x-4">
            {{-- Dark mode toggle --}}
            <button id="dark-mode-toggle" class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition">
                <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </button>

            @if(session('admin_logged_in'))
                <a href="{{ route('admin.services') }}"
                   class="text-sm text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 transition">
                    Panel
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="text-sm text-red-500 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 font-medium transition">
                        Cerrar sesión
                    </button>
                </form>
            @else
                <a href="{{ route('admin.login') }}"
                   class="text-sm text-slate-400 dark:text-slate-500 hover:text-slate-600 dark:hover:text-slate-300 transition">
                    Admin
                </a>
            @endif
        </div>

        {{-- Hamburguesa mobile + Dark mode toggle --}}
        <div class="md:hidden flex items-center space-x-4">
            <button id="dark-mode-toggle-mobile" class="text-slate-500 dark:text-slate-400">
                <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </button>
            <button class="text-2xl text-slate-700 dark:text-slate-300" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                ☰
            </button>
        </div>
    </div>

    {{-- Nav Mobile --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 px-6 py-4 space-y-4">
        <a href="{{ route('home') }}"
           class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('home') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Inicio
        </a>
        <a href="{{ route('design') }}"
           class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('design') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Diseño Web
        </a>
        <a href="{{ route('cybersecurity') }}"
           class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('cybersecurity') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Ciberseguridad
        </a>
        <a href="{{ route('technical.services') }}"
           class="block text-slate-700 dark:text-slate-300 {{ request()->routeIs('technical.services') ? 'text-blue-600 dark:text-blue-400 font-semibold' : '' }}">
            Servicios Técnicos
        </a>

        @if(session('admin_logged_in'))
            <a href="{{ route('admin.services') }}" class="block text-slate-500 dark:text-slate-400">Panel</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="block text-red-500 dark:text-red-400 font-medium">Cerrar sesión</button>
            </form>
        @endif
    </div>
</header>

<script>
// Script que solo se encarga de cambiar el estado al hacer clic (puede ir aquí)
document.addEventListener('DOMContentLoaded', function() {
    const html = document.documentElement;
    const toggleDesktop = document.getElementById('dark-mode-toggle');
    const toggleMobile = document.getElementById('dark-mode-toggle-mobile');

    function toggleDarkMode() {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    }

    if (toggleDesktop) toggleDesktop.addEventListener('click', toggleDarkMode);
    if (toggleMobile) toggleMobile.addEventListener('click', toggleDarkMode);

    // Escuchar si el usuario cambia la preferencia de su sistema operativo en tiempo real
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            e.matches ? html.classList.add('dark') : html.classList.remove('dark');
        }
    });
});
</script>