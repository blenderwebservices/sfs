<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions Factory Studio | Apps de Precisión Matemática y Sitios Web PyMEs</title>
    <meta name="description" content="Descarga gratis nuestra Calculadora Científica Matricial 3x3 y Simulador de Teoría de Juegos en Google Play. 100% Local-First, sin registro y offline. También desarrollamos sitios web para micro y PyMEs.">
    @include('partials.styles')
</head>
<body class="bg-brand-50 text-brand-700 font-sans antialiased grid-bg min-h-screen selection:bg-brand-accent selection:text-white">

    @include('partials.header')

    <!-- Hero Section (Centrado en Apps Móviles) -->
    <section id="inicio" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-20 lg:pt-20 lg:pb-28">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border-2 border-brand-600 text-xs font-mono font-semibold uppercase tracking-wider neubox shadow-[2px_2px_0px_#13294d]">
                    <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>
                    Apps Android · 100% Local-First · Gratis en Google Play
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-brand-700 leading-tight">
                    Apps de precisión <span class="text-brand-accent underline decoration-brand-warm decoration-wavy">matemática</span> y toma de decisiones para tu bolsillo.
                </h1>

                <p class="text-lg text-brand-600/90 max-w-xl font-normal leading-relaxed">
                    Resuelve matrices 2x2 y 3x3 paso a paso o simula equilibrios de Nash en segundos. Diseñadas para estudiantes, docentes y analistas que necesitan exactitud sin conexión ni distracciones.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 pt-2">
                    <a href="#portfolio" class="neubtn px-8 py-4 font-bold text-center flex items-center justify-center gap-3 text-base">
                        <i class="fa-brands fa-google-play text-lg"></i> Descargar Apps en Google Play
                    </a>
                    <a href="#pymes" class="neubox px-6 py-4 font-bold text-center bg-white hover:bg-brand-100 flex items-center justify-center gap-2.5 text-brand-700 text-sm">
                        <i class="fa-solid fa-store text-brand-warm"></i> ¿Necesitas un sitio web para tu negocio?
                    </a>
                </div>

                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 pt-2 text-xs font-mono text-brand-600">
                    <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-circle-check text-brand-accent"></i> Gratis</span>
                    <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-user-slash text-brand-accent"></i> Sin registro</span>
                    <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-wifi text-brand-accent"></i> Funciona offline</span>
                    <span class="inline-flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-brand-accent"></i> Privacidad Local-First</span>
                </div>
            </div>

            <!-- Mockup Interactivo de Teléfono ejecutando las Apps -->
            <div class="lg:col-span-5">
                <div class="neubox p-5 bg-white space-y-4">
                    <div class="flex items-center justify-between border-b-2 border-brand-600 pb-3">
                        <div class="flex items-center gap-2">
                            <button type="button" onclick="switchHeroMockup('calc')" id="tab-mock-calc" class="px-3 py-1.5 text-xs font-mono font-bold border-2 border-brand-600 bg-brand-accent text-white transition-colors">
                                Matriz 3x3
                            </button>
                            <button type="button" onclick="switchHeroMockup('game')" id="tab-mock-game" class="px-3 py-1.5 text-xs font-mono font-bold border-2 border-brand-600 bg-brand-50 text-brand-700 hover:bg-brand-100 transition-colors">
                                Teoría de Juegos
                            </button>
                        </div>
                        <span class="font-mono text-[11px] text-brand-500 font-semibold">Vista Real</span>
                    </div>

                    <!-- Marco de Teléfono -->
                    <div class="mx-auto max-w-[300px] border-4 border-brand-700 rounded-3xl bg-brand-700 p-2.5 shadow-[4px_4px_0px_#13294d]">
                        <div class="w-16 h-1.5 bg-brand-500 rounded-full mx-auto mb-2.5"></div>

                        <!-- Pantalla App 1: Calculadora Matricial -->
                        <div id="hero-mock-calc" class="bg-brand-50 rounded-2xl p-4 space-y-3 border border-brand-600">
                            <div class="flex items-center justify-between">
                                <span class="font-mono text-[10px] font-bold uppercase text-brand-accent">Calculadora Matricial</span>
                                <span class="px-1.5 py-0.5 bg-green-100 text-green-800 text-[9px] font-mono font-bold border border-green-400">OFFLINE</span>
                            </div>

                            <div class="bg-white border-2 border-brand-600 p-2.5">
                                <div class="text-[10px] font-mono text-brand-500 mb-1.5">Matriz A (3x3)</div>
                                <div class="grid grid-cols-3 gap-1.5 text-center font-mono text-xs font-bold">
                                    <div class="bg-brand-50 border border-brand-200 py-1">2</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">-1</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">3</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">0</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">4</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">1</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">5</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">2</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1">-2</div>
                                </div>
                            </div>

                            <div class="bg-brand-700 text-white p-3 font-mono text-[11px] space-y-1">
                                <div class="text-brand-accent font-bold">Paso a Paso · Regla de Sarrus</div>
                                <div class="text-brand-100/80">= 2(-8 - 2) - (-1)(0 - 5) + 3(0 - 20)</div>
                                <div class="text-brand-warm font-bold text-sm pt-1">det(A) = -85</div>
                            </div>
                        </div>

                        <!-- Pantalla App 2: Simulador Teoría de Juegos -->
                        <div id="hero-mock-game" class="hidden bg-brand-50 rounded-2xl p-4 space-y-3 border border-brand-600">
                            <div class="flex items-center justify-between">
                                <span class="font-mono text-[10px] font-bold uppercase text-brand-warm">Simulador Nash</span>
                                <span class="px-1.5 py-0.5 bg-green-100 text-green-800 text-[9px] font-mono font-bold border border-green-400">LOCAL</span>
                            </div>

                            <div class="bg-white border-2 border-brand-600 p-2.5">
                                <div class="text-[10px] font-mono text-brand-500 mb-1.5">Dilema del Prisionero</div>
                                <div class="grid grid-cols-3 gap-1 text-center font-mono text-[10px]">
                                    <div></div>
                                    <div class="font-bold text-brand-600">Cooperar</div>
                                    <div class="font-bold text-brand-600">Traicionar</div>
                                    <div class="font-bold text-brand-600 flex items-center justify-center">Coop.</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1.5">(3, 3)</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1.5">(0, 5)</div>
                                    <div class="font-bold text-brand-600 flex items-center justify-center">Traic.</div>
                                    <div class="bg-brand-50 border border-brand-200 py-1.5">(5, 0)</div>
                                    <div class="bg-brand-warm/20 border-2 border-brand-warm py-1.5 font-bold text-brand-700">(1, 1)*</div>
                                </div>
                            </div>

                            <div class="bg-brand-700 text-white p-3 font-mono text-[11px] space-y-1">
                                <div class="text-brand-warm font-bold">Equilibrio de Nash Detectado</div>
                                <div class="text-brand-100/90">Estrategia: (Traicionar, Traicionar)</div>
                                <div class="text-brand-accent font-bold pt-0.5">Pagos óptimos: (1, 1)</div>
                            </div>
                        </div>
                    </div>

                    <div class="text-xs text-center text-brand-600 font-mono">
                        // Resultados instantáneos en tu Android
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Beneficios Tangibles -->
    <section id="beneficios" class="bg-white border-y-2 border-brand-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto space-y-3 mb-12">
                <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">¿Por qué elegir nuestras apps?</span>
                <h2 class="text-3xl font-extrabold tracking-tight">Diseñadas para resolver, no para complicar</h2>
                <p class="text-brand-600 text-sm">Cada herramienta elimina fricción en tus estudios, clases o análisis diario con resultados claros y verificables.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="neubox p-7 bg-brand-50 space-y-3">
                    <div class="w-12 h-12 neubox bg-white flex items-center justify-center text-brand-accent text-xl font-bold">
                        <i class="fa-solid fa-square-root-variable"></i>
                    </div>
                    <h3 class="text-lg font-bold">Resuelve determinantes 3x3 en segundos</h3>
                    <p class="text-sm text-brand-600 leading-relaxed">Calcula matrices 2x2 y 3x3 al instante y revisa cada paso del procedimiento para estudiar y verificar tareas sin errores.</p>
                </div>

                <div class="neubox p-7 bg-brand-50 space-y-3">
                    <div class="w-12 h-12 neubox bg-white flex items-center justify-center text-brand-warm text-xl font-bold">
                        <i class="fa-solid fa-chess-knight"></i>
                    </div>
                    <h3 class="text-lg font-bold">Simula el Equilibrio de Nash visualmente</h3>
                    <p class="text-sm text-brand-600 leading-relaxed">Configura matrices de pagos, identifica estrategias dominantes y comprende decisiones estratégicas sin hacer cálculos manuales tediosos.</p>
                </div>

                <div class="neubox p-7 bg-brand-50 space-y-3">
                    <div class="w-12 h-12 neubox bg-white flex items-center justify-center text-brand-accent text-xl font-bold">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h3 class="text-lg font-bold">Privacidad Local-First, 100% en tu dispositivo</h3>
                    <p class="text-sm text-brand-600 leading-relaxed">Sin cuentas obligatorias, sin rastreadores y sin conexión a internet. Tus datos y ejercicios nunca salen de tu teléfono.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Portfolio / Aplicaciones (Embudo Principal de Descarga) -->
    <section id="portfolio" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div class="space-y-2">
                <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Disponibles en Google Play</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Descarga Nuestras Apps Android</h2>
            </div>
            <p class="text-brand-600 max-w-md text-sm">
                Herramientas gratuitas, ligeras y listas para usar sin registro en cualquier salón de clases o entorno profesional.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            @foreach($portfolios as $portfolio)
                @php
                    $isCalculator = str_contains(strtolower($portfolio->title), 'matricial') || $loop->first;
                    $detailRoute = $isCalculator ? route('apps.calculator') : route('apps.game-theory');
                    $privacyRoute = $isCalculator ? route('legal.privacy-calculator') : route('legal.privacy-simulator');
                    $termsRoute = $isCalculator ? route('legal.terms-calculator') : route('legal.terms-simulator');
                @endphp
                <div class="neubox bg-white p-7 sm:p-9 flex flex-col justify-between space-y-6">
                    <div class="space-y-5">
                        <div class="flex items-center justify-between gap-3">
                            <span class="px-3 py-1 bg-brand-100 border border-brand-600 text-xs font-mono font-bold text-brand-700">{{ $portfolio->category }}</span>
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 bg-green-50 border border-green-600 text-[11px] font-mono font-bold text-green-800 inline-flex items-center gap-1.5">
                                    <i class="fa-solid fa-shield-halved"></i> Local-First
                                </span>
                                <div class="w-10 h-10 neubox {{ $portfolio->color_theme == 'brand-warm' ? 'bg-brand-warm' : 'bg-brand-accent' }} flex items-center justify-center text-white font-mono text-base font-bold">
                                    {{ $portfolio->icon }}
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-2xl font-extrabold text-brand-700">{{ $portfolio->title }}</h3>
                            <p class="text-brand-600 text-sm leading-relaxed mt-2">
                                {{ $portfolio->description }}
                            </p>
                        </div>

                        <!-- Mini Capturas / Previews de Interfaz -->
                        <div class="grid grid-cols-2 gap-3">
                            @if($isCalculator)
                                <div class="bg-brand-50 border-2 border-brand-600 p-3 space-y-1.5">
                                    <div class="text-[10px] font-mono font-bold text-brand-accent uppercase">1. Entrada Rápida</div>
                                    <div class="font-mono text-[11px] bg-white border border-brand-200 p-2 text-center">
                                        [ 2 &nbsp; -1 &nbsp; 3 ]<br>[ 0 &nbsp;&nbsp; 4 &nbsp; 1 ]<br>[ 5 &nbsp;&nbsp; 2 &nbsp;-2 ]
                                    </div>
                                </div>
                                <div class="bg-brand-50 border-2 border-brand-600 p-3 space-y-1.5">
                                    <div class="text-[10px] font-mono font-bold text-brand-warm uppercase">2. Auditoría Paso a Paso</div>
                                    <div class="font-mono text-[11px] bg-brand-700 text-white p-2">
                                        Sarrus: -20 + 5 - 60<br><strong class="text-brand-accent">det(A) = -85</strong>
                                    </div>
                                </div>
                            @else
                                <div class="bg-brand-50 border-2 border-brand-600 p-3 space-y-1.5">
                                    <div class="text-[10px] font-mono font-bold text-brand-warm uppercase">1. Matriz de Pagos</div>
                                    <div class="font-mono text-[11px] bg-white border border-brand-200 p-2 text-center">
                                        (3,3) &nbsp;|&nbsp; (0,5)<br>(5,0) &nbsp;|&nbsp; <strong class="text-brand-warm">(1,1)*</strong>
                                    </div>
                                </div>
                                <div class="bg-brand-50 border-2 border-brand-600 p-3 space-y-1.5">
                                    <div class="text-[10px] font-mono font-bold text-brand-accent uppercase">2. Equilibrio de Nash</div>
                                    <div class="font-mono text-[11px] bg-brand-700 text-white p-2">
                                        Dominante: Traicionar<br><strong class="text-brand-warm">Nash: (1, 1)</strong>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="flex flex-wrap gap-2">
                            @if($portfolio->tags)
                                @foreach($portfolio->tags as $tag)
                                    <span class="px-2.5 py-1 bg-brand-50 border border-brand-600 text-xs font-mono">{{ $tag }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Micro-indicador + Botón Oficial Google Play -->
                    <div class="pt-5 border-t-2 border-brand-100 space-y-4">
                        <div class="flex flex-wrap items-center justify-between gap-2 text-xs font-mono text-brand-600 bg-brand-50 px-3 py-2 border border-brand-200">
                            <span class="font-semibold text-brand-700">
                                <i class="fa-solid fa-bolt text-brand-accent mr-1"></i> Gratis · Sin registro · Funciona offline
                            </span>
                            <span>// {{ $portfolio->version ?: 'Disponible' }}</span>
                        </div>

                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                            <div class="flex items-center gap-3 text-xs">
                                <a href="{{ $detailRoute }}" class="font-bold text-brand-700 hover:text-brand-accent underline underline-offset-2">
                                    Ver guía de la app <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>

                            <a href="{{ $portfolio->link ?: 'https://play.google.com/store/apps' }}" target="_blank" rel="noopener noreferrer" class="neubtn px-5 py-3 flex items-center justify-center gap-3 bg-brand-700 hover:bg-brand-accent">
                                <i class="fa-brands fa-google-play text-xl text-brand-accent"></i>
                                <div class="text-left leading-tight">
                                    <div class="text-[9px] uppercase tracking-wider text-brand-100/80 font-mono">Disponible en</div>
                                    <div class="text-sm font-extrabold text-white">Google Play</div>
                                </div>
                            </a>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 text-[11px] text-brand-500">
                            @if($portfolio->privacy_policy)
                                <a href="{{ route('portfolio.privacy', $portfolio) }}" class="hover:text-brand-accent underline underline-offset-2">Política de Privacidad</a>
                            @else
                                <a href="{{ $privacyRoute }}" class="hover:text-brand-accent underline underline-offset-2">Política de Privacidad</a>
                            @endif
                            <span>·</span>
                            @if($portfolio->terms_and_conditions)
                                <a href="{{ route('portfolio.terms', $portfolio) }}" class="hover:text-brand-accent underline underline-offset-2">Términos y Condiciones</a>
                            @else
                                <a href="{{ $termsRoute }}" class="hover:text-brand-accent underline underline-offset-2">Términos y Condiciones</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Prueba Social y Validación -->
        <div class="mt-14 neubox bg-white p-7 sm:p-8">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b-2 border-brand-100">
                <div>
                    <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Confianza Comprobada</span>
                    <h3 class="text-xl font-extrabold text-brand-700">Lo que dicen estudiantes, docentes y negocios</h3>
                </div>
                <div class="flex items-center gap-4 font-mono text-xs">
                    <div class="px-3 py-1.5 bg-brand-50 border border-brand-600 font-bold text-brand-700">
                        <i class="fa-solid fa-star text-yellow-500"></i> 4.8 / 5 Valoración
                    </div>
                    <div class="px-3 py-1.5 bg-brand-50 border border-brand-600 font-bold text-brand-700">
                        <i class="fa-solid fa-ban text-brand-warm"></i> 0 Anuncios
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6">
                <div class="bg-brand-50 border border-brand-200 p-4 space-y-2">
                    <div class="text-yellow-500 text-xs">★★★★★</div>
                    <p class="text-xs text-brand-600 leading-relaxed">"El desglose paso a paso de determinantes 3x3 me salvó en mi examen de Álgebra Lineal. Funciona en el metro sin internet."</p>
                    <div class="font-mono text-[11px] font-bold text-brand-700">— Carlos M., Estudiante de Ingeniería</div>
                </div>
                <div class="bg-brand-50 border border-brand-200 p-4 space-y-2">
                    <div class="text-yellow-500 text-xs">★★★★★</div>
                    <p class="text-xs text-brand-600 leading-relaxed">"Uso el Simulador de Teoría de Juegos en clase para mostrar el Equilibrio de Nash en vivo. Muy visual y sin registro."</p>
                    <div class="font-mono text-[11px] font-bold text-brand-700">— Dra. Elena R., Profesora de Economía</div>
                </div>
                <div class="bg-brand-50 border border-brand-200 p-4 space-y-2">
                    <div class="text-yellow-500 text-xs">★★★★★</div>
                    <p class="text-xs text-brand-600 leading-relaxed">"Nos entregaron la página web de nuestra clínica dental en 10 días con botón directo a WhatsApp. Empezamos a recibir citas esa misma semana."</p>
                    <div class="font-mono text-[11px] font-bold text-brand-700">— Laura G., Clínica Dental Sonrisa</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección B2B Dedicada: Sitios Web para Micro y PyMEs (Separada del embudo de apps) -->
    <section id="pymes" class="bg-brand-700 text-white border-y-2 border-brand-600 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-block px-3 py-1 bg-brand-warm text-white font-mono text-xs font-bold uppercase tracking-wider border border-white">
                        Servicio B2B · Micro y PyMEs
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
                        ¿Tienes un negocio? Lanzamos tu <span class="text-brand-accent underline decoration-brand-warm">sitio web profesional</span> en 7 a 14 días.
                    </h2>
                    <p class="text-brand-100/90 text-base max-w-2xl leading-relaxed">
                        Sin tecnicismos ni mensualidades ocultas. Diseñamos páginas rápidas, claras y listas para convertir visitas en clientes por WhatsApp Business y Google.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 text-sm">
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-clock text-brand-accent mt-1"></i>
                            <div>
                                <strong class="block">Entrega rápida (7–14 días)</strong>
                                <span class="text-xs text-brand-100/75">De la idea a tu sitio publicado sin demoras.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-brands fa-whatsapp text-brand-accent mt-1"></i>
                            <div>
                                <strong class="block">Cotizaciones por WhatsApp</strong>
                                <span class="text-xs text-brand-100/75">Botones directos para cerrar ventas al instante.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-mobile-screen text-brand-accent mt-1"></i>
                            <div>
                                <strong class="block">100% Adaptado a Celular</strong>
                                <span class="text-xs text-brand-100/75">Carga veloz y diseño limpio en cualquier pantalla.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-magnifying-glass-location text-brand-accent mt-1"></i>
                            <div>
                                <strong class="block">Listo para Google Local</strong>
                                <span class="text-xs text-brand-100/75">Estructura optimizada para que te encuentren cerca.</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="{{ route('services.pymes') }}" class="neubtn px-7 py-4 font-bold text-center bg-brand-accent text-white border-white hover:bg-brand-warm inline-flex items-center justify-center gap-2">
                            <i class="fa-solid fa-briefcase"></i> Ver Ejemplos y Planes PyME
                        </a>
                        <a href="https://wa.me/5215500000000?text=Hola%2C%20quiero%20cotizar%20un%20sitio%20web%20para%20mi%20PyME" target="_blank" rel="noopener noreferrer" class="neubox px-7 py-4 font-bold text-center bg-white text-brand-700 hover:bg-brand-100 inline-flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp text-green-600 text-lg"></i> Cotizar por WhatsApp
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-4">
                    <div class="neubox bg-white text-brand-700 p-6 space-y-4">
                        <div class="font-mono text-xs font-bold uppercase text-brand-accent border-b-2 border-brand-100 pb-2">
                            Ejemplos de Sitios que Construimos
                        </div>
                        <div class="space-y-3">
                            <div class="p-3 bg-brand-50 border border-brand-600 flex items-center justify-between">
                                <div>
                                    <div class="font-bold text-sm">Consultorios y Servicios</div>
                                    <div class="text-xs text-brand-600">Agenda de citas + mapa + reseñas</div>
                                </div>
                                <span class="font-mono text-xs font-bold text-brand-accent">7 días</span>
                            </div>
                            <div class="p-3 bg-brand-50 border border-brand-600 flex items-center justify-between">
                                <div>
                                    <div class="font-bold text-sm">Comercios y Catálogos</div>
                                    <div class="text-xs text-brand-600">Productos + pedidos por WhatsApp</div>
                                </div>
                                <span class="font-mono text-xs font-bold text-brand-accent">10 días</span>
                            </div>
                            <div class="p-3 bg-brand-50 border border-brand-600 flex items-center justify-between">
                                <div>
                                    <div class="font-bold text-sm">Despachos y B2B</div>
                                    <div class="text-xs text-brand-600">Portafolio + formulario de cotización</div>
                                </div>
                                <span class="font-mono text-xs font-bold text-brand-accent">14 días</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Agentes de IA (Sin metadatos técnicos, con preguntas rápidas) -->
    <section id="agentes" class="bg-white border-b-2 border-brand-600 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="space-y-2">
                    <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Atención Instantánea 24/7</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Resuelve tus dudas en vivo</h2>
                </div>
                <p class="text-brand-600 max-w-md text-sm">
                    Pregunta a nuestros asistentes sobre cómo usar nuestras apps paso a paso o cotiza al instante el sitio web de tu negocio.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($agents as $agent)
                    @php
                        $isSocrates = str_contains(strtolower($agent->name), 'socrates');
                        $roleLabel = $isSocrates ? 'Tutor de Álgebra Lineal y Teoría de Juegos' : 'Asesora de Sitios Web PyME y Software';
                        $quickPrompts = $isSocrates
                            ? ['¿Cómo funciona el modo paso a paso?', 'Explícame el Equilibrio de Nash con un ejemplo']
                            : ['¿Cuánto cuesta y qué incluye un sitio web para mi PyME?', '¿En cuánto tiempo entregan una página web?'];
                    @endphp
                    <div class="neubox p-7 bg-brand-50 space-y-5 flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-12 h-12 neubox bg-brand-accent flex items-center justify-center text-white text-xl">
                                        <i class="{{ $agent->avatar ?: 'fa-solid fa-robot' }}"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-brand-700">{{ $agent->name }}</h3>
                                        <span class="text-xs text-brand-600 font-medium">{{ $roleLabel }}</span>
                                    </div>
                                </div>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-300">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> En línea
                                </span>
                            </div>
                            <p class="text-sm text-brand-600 leading-relaxed">{{ $agent->description }}</p>

                            <!-- Preguntas Rápidas Clicables -->
                            <div class="space-y-2 pt-1">
                                <div class="text-[11px] font-mono font-bold uppercase text-brand-500">Preguntas rápidas:</div>
                                <div class="flex flex-col gap-2">
                                    @foreach($quickPrompts as $promptText)
                                        <button type="button"
                                            onclick="openChatWithPrompt({{ $agent->id }}, '{{ addslashes($agent->name) }}', '{{ $agent->avatar ?: 'fa-solid fa-robot' }}', '{{ addslashes($promptText) }}')"
                                            class="text-left text-xs bg-white hover:bg-brand-100 border border-brand-600 px-3 py-2 font-medium text-brand-700 flex items-center justify-between gap-2 transition-colors">
                                            <span>"{{ $promptText }}"</span>
                                            <i class="fa-solid fa-arrow-right text-brand-accent text-[10px]"></i>
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-brand-200 flex items-center justify-between">
                            <span class="text-xs font-mono text-brand-600">Respuesta inmediata</span>
                            <button type="button" onclick="openChat({{ $agent->id }}, '{{ addslashes($agent->name) }}', '{{ $agent->avatar ?: 'fa-solid fa-robot' }}')" class="neubtn px-5 py-2.5 text-xs font-bold uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-comments"></i> Chatear ahora
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Bloque de Retención + Sección de Contacto -->
    <section id="contacto" class="bg-brand-50 py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <!-- Retención: Novedades y Guías -->
            <div class="neubox bg-brand-100 p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="space-y-1.5 max-w-lg">
                    <span class="font-mono text-xs font-bold uppercase text-brand-accent">Novedades &amp; Guías</span>
                    <h3 class="text-xl font-extrabold text-brand-700">Entérate de nuestras próximas apps y guías gratuitas</h3>
                    <p class="text-xs text-brand-600">Recibe un correo solo cuando lancemos una nueva herramienta matemática o guía práctica para PyMEs. Cero spam.</p>
                </div>
                <form onsubmit="handleNewsletterSubmit(event)" class="w-full md:w-auto flex flex-col sm:flex-row gap-2.5">
                    <input id="newsletter-email" type="email" required placeholder="tu@correo.com" class="neubox bg-white px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent min-w-[230px]">
                    <button type="submit" class="neubtn px-5 py-2.5 font-bold text-xs uppercase tracking-wider whitespace-nowrap">
                        Suscribirme
                    </button>
                </form>
                <div id="newsletter-feedback" class="hidden text-xs font-mono font-bold text-green-700 bg-green-100 border border-green-500 px-3 py-2"></div>
            </div>

            <!-- Formulario de Contacto (Apps y PyMEs) -->
            <div class="neubox bg-white p-8 sm:p-12 space-y-8">
                <div class="text-center space-y-3">
                    <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Canal Directo</span>
                    <h2 class="text-3xl font-extrabold">¿Cotizamos tu sitio web o necesitas soporte?</h2>
                    <p class="text-brand-600 text-sm max-w-lg mx-auto">
                        Escríbenos para solicitar el sitio web de tu micro/PyME o resolver cualquier duda sobre nuestras aplicaciones en Google Play.
                    </p>
                </div>

                <form id="contact-form" class="space-y-6" onsubmit="handleContactSubmit(event)">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="contact-name" class="block text-xs font-mono font-bold uppercase">Nombre / Negocio</label>
                            <input id="contact-name" type="text" required class="w-full neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent" placeholder="Ej. Laura Gómez · Clínica Dental">
                        </div>
                        <div class="space-y-2">
                            <label for="contact-email" class="block text-xs font-mono font-bold uppercase">Correo Electrónico</label>
                            <input id="contact-email" type="email" required class="w-full neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent" placeholder="nombre@tunegocio.com">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="contact-topic" class="block text-xs font-mono font-bold uppercase">¿En qué podemos ayudarte?</label>
                        <select id="contact-topic" class="w-full neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent">
                            <option value="pyme">Cotizar un Sitio Web para mi Micro / PyME</option>
                            <option value="apps">Soporte o sugerencia sobre Apps Android</option>
                            <option value="otro">Otro proyecto de software a la medida</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="contact-message" class="block text-xs font-mono font-bold uppercase">Detalles de tu consulta</label>
                        <textarea id="contact-message" rows="4" required class="w-full neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent" placeholder="Cuéntanos brevemente sobre tu negocio o tu consulta..."></textarea>
                    </div>

                    <div id="contact-feedback" class="hidden p-4 bg-green-50 border-2 border-green-600 text-green-800 text-sm font-medium text-center">
                        ¡Gracias! Hemos recibido tu mensaje. El equipo de <strong>Solutions Factory Studio S.A.S.</strong> te responderá pronto a tu correo.
                    </div>

                    <div class="text-center space-y-4 pt-2">
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <button type="submit" class="neubtn px-10 py-4 font-bold text-base inline-flex items-center gap-3 w-full sm:w-auto justify-center">
                                <i class="fa-solid fa-paper-plane"></i> Enviar Mensaje
                            </button>
                            <a href="https://wa.me/5215500000000?text=Hola%2C%20me%20interesa%20cotizar%20un%20sitio%20web%20PyME" target="_blank" rel="noopener noreferrer" class="neubox px-6 py-4 font-bold text-sm bg-white hover:bg-green-50 text-brand-700 inline-flex items-center gap-2 w-full sm:w-auto justify-center">
                                <i class="fa-brands fa-whatsapp text-green-600 text-lg"></i> WhatsApp Directo
                            </a>
                        </div>
                        <p class="text-xs text-brand-500">
                            Al enviar este formulario aceptas nuestro <a href="{{ route('legal.privacy-general') }}" class="text-brand-accent underline font-semibold">Aviso de Privacidad</a>.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- Chat Modal -->
    <div id="chat-modal" class="fixed inset-0 z-50 hidden bg-brand-700/40 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="neubox w-full max-w-lg bg-white flex flex-col h-[550px] relative">
            <!-- Header -->
            <div class="bg-brand-50 border-b-2 border-brand-600 px-6 py-4 flex items-center justify-between font-mono">
                <div class="flex items-center space-x-3">
                    <div id="chat-agent-avatar-container" class="w-10 h-10 neubox bg-brand-accent flex items-center justify-center text-white text-lg">
                        <i id="chat-agent-avatar" class="fa-solid fa-robot"></i>
                    </div>
                    <div>
                        <h3 id="chat-agent-name" class="font-bold text-brand-700 font-mono">Agente</h3>
                        <span class="text-[10px] text-green-600 flex items-center gap-1 font-semibold uppercase tracking-wider">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span> En línea
                        </span>
                    </div>
                </div>
                <button type="button" onclick="closeChat()" class="text-brand-600 hover:text-brand-warm text-sm font-bold font-mono">
                    [CERRAR X]
                </button>
            </div>

            <!-- Messages Area -->
            <div id="chat-messages" class="flex-1 overflow-y-auto p-6 space-y-4 bg-brand-50/50">
                <!-- Initial Greeting -->
            </div>

            <!-- Input Area -->
            <form id="chat-form" onsubmit="sendMessage(event)" class="border-t-2 border-brand-600 p-4 bg-white flex gap-3">
                <input id="chat-input" type="text" autocomplete="off" required class="flex-1 neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent font-mono" placeholder="Escribe tu duda...">
                <button type="submit" class="neubtn px-6 py-3 font-bold text-sm inline-flex items-center gap-2 font-mono">
                    <span>ENVIAR</span>
                    <i class="fa-solid fa-paper-plane text-xs"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- JS Logic -->
    <script>
        function switchHeroMockup(app) {
            const calcScreen = document.getElementById('hero-mock-calc');
            const gameScreen = document.getElementById('hero-mock-game');
            const calcTab = document.getElementById('tab-mock-calc');
            const gameTab = document.getElementById('tab-mock-game');

            if (app === 'calc') {
                calcScreen.classList.remove('hidden');
                gameScreen.classList.add('hidden');
                calcTab.className = 'px-3 py-1.5 text-xs font-mono font-bold border-2 border-brand-600 bg-brand-accent text-white transition-colors';
                gameTab.className = 'px-3 py-1.5 text-xs font-mono font-bold border-2 border-brand-600 bg-brand-50 text-brand-700 hover:bg-brand-100 transition-colors';
            } else {
                calcScreen.classList.add('hidden');
                gameScreen.classList.remove('hidden');
                gameTab.className = 'px-3 py-1.5 text-xs font-mono font-bold border-2 border-brand-600 bg-brand-warm text-white transition-colors';
                calcTab.className = 'px-3 py-1.5 text-xs font-mono font-bold border-2 border-brand-600 bg-brand-50 text-brand-700 hover:bg-brand-100 transition-colors';
            }
        }

        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const feedback = document.getElementById('newsletter-feedback');
            feedback.textContent = '¡Listo! Te avisaremos cuando lancemos nuevas apps y guías.';
            feedback.classList.remove('hidden');
            event.target.reset();
        }

        function handleContactSubmit(event) {
            event.preventDefault();
            const feedback = document.getElementById('contact-feedback');
            feedback.classList.remove('hidden');
            event.target.reset();
        }

        let currentAgentId = null;

        function openChat(agentId, agentName, agentAvatar) {
            currentAgentId = agentId;
            document.getElementById('chat-agent-name').textContent = agentName;

            const iconElement = document.getElementById('chat-agent-avatar');
            iconElement.className = agentAvatar;

            document.getElementById('chat-modal').classList.remove('hidden');

            const messagesContainer = document.getElementById('chat-messages');
            messagesContainer.innerHTML = `
                <div class="flex items-start space-x-2.5">
                    <div class="w-8 h-8 flex-shrink-0 neubox bg-brand-accent flex items-center justify-center text-white text-xs">
                        <i class="${agentAvatar}"></i>
                    </div>
                    <div class="neubox bg-white p-3.5 max-w-[80%] text-sm text-brand-700">
                        ¡Hola! Soy <strong>${agentName}</strong>. Escríbeme cualquier consulta sobre nuestras apps o sobre cómo crear el sitio web de tu negocio.
                    </div>
                </div>
            `;
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function openChatWithPrompt(agentId, agentName, agentAvatar, promptText) {
            openChat(agentId, agentName, agentAvatar);
            const input = document.getElementById('chat-input');
            input.value = promptText;
            sendMessage(new Event('submit'));
        }

        function closeChat() {
            document.getElementById('chat-modal').classList.add('hidden');
            currentAgentId = null;
        }

        async function sendMessage(event) {
            if (event) event.preventDefault();
            const input = document.getElementById('chat-input');
            const messageText = input.value.trim();
            if (!messageText || !currentAgentId) return;

            input.value = '';

            const messagesContainer = document.getElementById('chat-messages');

            // Escape HTML for user message
            const safeText = messageText.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');

            messagesContainer.innerHTML += `
                <div class="flex items-start justify-end space-x-2.5">
                    <div class="neubox bg-brand-accent text-white p-3.5 max-w-[80%] text-sm">
                        ${safeText}
                    </div>
                </div>
            `;

            messagesContainer.scrollTop = messagesContainer.scrollHeight;

            const typingId = 'typing-' + Date.now();
            const currentAvatarClass = document.getElementById('chat-agent-avatar').className;
            messagesContainer.innerHTML += `
                <div id="${typingId}" class="flex items-start space-x-2.5">
                    <div class="w-8 h-8 flex-shrink-0 neubox bg-brand-accent flex items-center justify-center text-white text-xs">
                        <i class="${currentAvatarClass}"></i>
                    </div>
                    <div class="neubox bg-white p-3.5 max-w-[80%] text-sm text-brand-500 italic">
                        Escribiendo...
                    </div>
                </div>
            `;
            messagesContainer.scrollTop = messagesContainer.scrollHeight;

            try {
                const response = await fetch(`/agents/${currentAgentId}/chat`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ message: messageText })
                });

                const data = await response.json();

                const typingElement = document.getElementById(typingId);
                if (typingElement) typingElement.remove();

                messagesContainer.innerHTML += `
                    <div class="flex items-start space-x-2.5">
                        <div class="w-8 h-8 flex-shrink-0 neubox bg-brand-accent flex items-center justify-center text-white text-xs">
                            <i class="${currentAvatarClass}"></i>
                        </div>
                        <div class="neubox bg-white p-3.5 max-w-[80%] text-sm text-brand-700">
                            ${data.response}
                        </div>
                    </div>
                `;
            } catch (error) {
                console.error(error);
                const typingElement = document.getElementById(typingId);
                if (typingElement) typingElement.remove();

                messagesContainer.innerHTML += `
                    <div class="flex items-start space-x-2.5">
                        <div class="w-8 h-8 flex-shrink-0 neubox bg-brand-warm flex items-center justify-center text-white text-xs">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <div class="neubox bg-red-50 text-red-700 p-3.5 max-w-[80%] text-sm border-2 border-red-500">
                            Ocurrió un error al conectar con el agente. Por favor reintenta.
                        </div>
                    </div>
                `;
            }

            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
    </script>
</body>
</html>
