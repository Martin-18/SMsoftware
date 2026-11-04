{{-- Navegación del panel de administración --}}
<nav class="flex flex-wrap items-center justify-between gap-4 mb-8 pb-4 border-b border-slate-800">
    <div class="flex gap-6 text-sm font-semibold">
        <a href="{{ route('admin.services') }}"
           class="{{ request()->routeIs('admin.services*') ? 'text-blue-400' : 'text-slate-400 hover:text-slate-200' }} transition">
            Servicios
        </a>
        <a href="{{ route('admin.contacts') }}"
           class="{{ request()->routeIs('admin.contacts*') ? 'text-blue-400' : 'text-slate-400 hover:text-slate-200' }} transition">
            Mensajes
        </a>
    </div>

    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="text-sm text-slate-400 hover:text-red-400 font-semibold transition">
            Cerrar sesión
        </button>
    </form>
</nav>
