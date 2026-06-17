<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="text-2xl font-bold">
            SM<span class="text-blue-600">software</span>
        </a>

        {{-- Nav Desktop --}}
        <nav class="hidden md:flex space-x-8 font-medium text-slate-700">
            <a href="{{ route('home') }}"
               class="hover:text-blue-600 transition {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">
                Inicio
            </a>
            <a href="{{ route('design') }}"
               class="hover:text-blue-600 transition {{ request()->routeIs('design') ? 'text-blue-600 font-semibold' : '' }}">
                Diseño Web
            </a>
            <a href="{{ route('cybersecurity') }}"
               class="hover:text-blue-600 transition {{ request()->routeIs('cybersecurity') ? 'text-blue-600 font-semibold' : '' }}">
                Ciberseguridad
            </a>
        </nav>

        {{-- Botón admin / logout --}}
        <div class="hidden md:flex items-center space-x-4">
            @if(session('admin_logged_in'))
                <a href="{{ route('admin.services') }}"
                   class="text-sm text-slate-500 hover:text-slate-700 transition">
                    Panel
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="text-sm text-red-500 hover:text-red-700 font-medium transition">
                        Cerrar sesión
                    </button>
                </form>
            @else
                <a href="{{ route('admin.login') }}"
                   class="text-sm text-slate-400 hover:text-slate-600 transition">
                    Admin
                </a>
            @endif
        </div>

        {{-- Hamburguesa mobile --}}
        <button class="md:hidden text-2xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            ☰
        </button>
    </div>

    {{-- Nav Mobile --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t px-6 py-4 space-y-4">
        <a href="{{ route('home') }}"
           class="block text-slate-700 {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">
            Inicio
        </a>
        <a href="{{ route('design') }}"
           class="block text-slate-700 {{ request()->routeIs('design') ? 'text-blue-600 font-semibold' : '' }}">
            Diseño Web
        </a>
        <a href="{{ route('cybersecurity') }}"
           class="block text-slate-700 {{ request()->routeIs('cybersecurity') ? 'text-blue-600 font-semibold' : '' }}">
            Ciberseguridad
        </a>

        @if(session('admin_logged_in'))
            <a href="{{ route('admin.services') }}" class="block text-slate-500">Panel</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="block text-red-500 font-medium">Cerrar sesión</button>
            </form>
        @endif
    </div>
</header>