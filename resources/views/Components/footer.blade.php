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
                    <li><a href="{{ route('technical.services') }}" class="hover:text-white dark:hover:text-slate-200 transition">Servicios Técnicos</a></li>
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
