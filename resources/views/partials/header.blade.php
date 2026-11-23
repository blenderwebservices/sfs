<!-- Header / Barra de Navegación -->
<header class="sticky top-0 z-50 bg-brand-50/95 backdrop-blur-md border-b-2 border-brand-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <div class="w-10 h-10 neubox bg-brand-accent flex items-center justify-center text-white font-mono font-bold text-xl">
                SF
            </div>
            <span class="font-bold text-xl tracking-tight text-brand-600 font-mono">SolutionsFactory<span class="text-brand-accent">.</span></span>
        </a>

        @php
            $isHome = request()->routeIs('home');
            $prefix = $isHome ? '' : route('home');
        @endphp

        <nav class="hidden md:flex items-center space-x-7 font-medium text-sm">
            <a href="{{ $prefix }}#inicio" class="hover:text-brand-accent transition-colors font-mono">Inicio</a>
            <a href="{{ $prefix }}#portfolio" class="hover:text-brand-accent transition-colors font-mono">Apps</a>
            <a href="{{ route('services.pymes') }}" class="{{ request()->routeIs('services.pymes') ? 'text-brand-accent font-bold' : '' }} hover:text-brand-accent transition-colors font-mono">Sitios Web PyMEs</a>
            <a href="{{ $prefix }}#agentes" class="hover:text-brand-accent transition-colors font-mono">Asistentes IA</a>
            <a href="{{ $prefix }}#contacto" class="hover:text-brand-accent transition-colors font-mono">Contacto</a>
        </nav>

        <div class="flex items-center space-x-3">
            @auth
                <a href="/admin" class="neubtn px-3.5 py-2 rounded-none font-semibold text-xs inline-flex items-center gap-2">
                    <span>Panel Admin</span>
                    <i class="fa-solid fa-sliders"></i>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="neubox bg-white hover:bg-brand-100 text-brand-warm font-mono font-bold text-xs px-3 py-2">
                        [Salir]
                    </button>
                </form>
            @else
                <a href="{{ $prefix }}#portfolio" class="neubtn px-4 py-2.5 rounded-none font-bold text-xs inline-flex items-center gap-2">
                    <i class="fa-brands fa-google-play text-xs"></i>
                    <span>Descargar Apps</span>
                </a>
            @endauth

            <button type="button" onclick="document.getElementById('mobile-nav').classList.toggle('hidden')" class="md:hidden neubox bg-white px-3 py-2 text-brand-700" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Menú Móvil -->
    <div id="mobile-nav" class="hidden md:hidden border-t-2 border-brand-600 bg-white px-4 py-4 space-y-3 font-mono text-sm">
        <a href="{{ $prefix }}#inicio" class="block py-1.5 hover:text-brand-accent" onclick="document.getElementById('mobile-nav').classList.add('hidden')">Inicio</a>
        <a href="{{ $prefix }}#portfolio" class="block py-1.5 hover:text-brand-accent" onclick="document.getElementById('mobile-nav').classList.add('hidden')">Apps Android</a>
        <a href="{{ route('services.pymes') }}" class="block py-1.5 hover:text-brand-accent font-bold text-brand-accent">Sitios Web PyMEs</a>
        <a href="{{ $prefix }}#agentes" class="block py-1.5 hover:text-brand-accent" onclick="document.getElementById('mobile-nav').classList.add('hidden')">Asistentes IA</a>
        <a href="{{ $prefix }}#contacto" class="block py-1.5 hover:text-brand-accent" onclick="document.getElementById('mobile-nav').classList.add('hidden')">Contacto</a>
    </div>
</header>
