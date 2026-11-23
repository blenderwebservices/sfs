<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Teoría de Juegos App | Equilibrio de Nash Android — Solutions Factory Studio</title>
    <meta name="description" content="Descarga gratis el Simulador de Teoría de Juegos No Cooperativos para Android. Calcula el Equilibrio de Nash, estrategias dominantes y matrices de pagos offline y sin registro.">
    @include('partials.styles')
</head>
<body class="bg-brand-50 text-brand-700 font-sans antialiased grid-bg min-h-screen selection:bg-brand-accent selection:text-white">

    @include('partials.header')

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 space-y-16">
        <div class="text-xs font-mono text-brand-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-brand-accent underline">Inicio</a>
            <span>/</span>
            <span>Simulador de Teoría de Juegos</span>
        </div>

        <section class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white border-2 border-brand-600 text-xs font-mono font-bold uppercase text-brand-warm">
                    <i class="fa-solid fa-shield-halved"></i> 100% Local-First · Multijugador Local
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-brand-700 leading-tight">
                    Simulador de <span class="text-brand-warm">Teoría de Juegos</span> y Equilibrio de Nash
                </h1>
                <p class="text-base sm:text-lg text-brand-600 leading-relaxed">
                    Configura matrices de pagos, prueba dilemas estratégicos clásicos y detecta el Equilibrio de Nash y estrategias dominantes de forma visual e instantánea.
                </p>

                <div class="bg-white border-2 border-brand-600 p-4 inline-flex flex-wrap items-center gap-4 text-xs font-mono">
                    <span><i class="fa-solid fa-circle-check text-brand-accent"></i> Gratis</span>
                    <span><i class="fa-solid fa-user-slash text-brand-accent"></i> Sin registro</span>
                    <span><i class="fa-solid fa-wifi text-brand-accent"></i> Funciona offline</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-2">
                    <a href="{{ $portfolio?->link ?: 'https://play.google.com/store/apps' }}" target="_blank" rel="noopener noreferrer" class="neubtn px-7 py-4 flex items-center justify-center gap-3 bg-brand-700 hover:bg-brand-accent">
                        <i class="fa-brands fa-google-play text-2xl text-brand-accent"></i>
                        <div class="text-left leading-tight">
                            <div class="text-[10px] uppercase tracking-wider text-brand-100/80 font-mono">Disponible en</div>
                            <div class="text-base font-extrabold text-white">Google Play</div>
                        </div>
                    </a>
                    <a href="{{ route('legal.privacy-simulator') }}" class="neubox px-6 py-4 font-mono text-xs font-bold flex items-center justify-center bg-white hover:bg-brand-100">
                        Política de Privacidad
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="neubox bg-white p-6 space-y-4">
                    <div class="font-mono text-xs font-bold uppercase text-brand-warm border-b-2 border-brand-100 pb-2">
                        Ejemplo: Dilema del Prisionero
                    </div>
                    <div class="grid grid-cols-3 gap-1.5 text-center font-mono text-xs">
                        <div></div>
                        <div class="font-bold text-brand-600 py-1">Cooperar</div>
                        <div class="font-bold text-brand-600 py-1">Traicionar</div>
                        <div class="font-bold text-brand-600 flex items-center justify-center">Cooperar</div>
                        <div class="bg-brand-50 border border-brand-200 py-2">(3, 3)</div>
                        <div class="bg-brand-50 border border-brand-200 py-2">(0, 5)</div>
                        <div class="font-bold text-brand-600 flex items-center justify-center">Traicionar</div>
                        <div class="bg-brand-50 border border-brand-200 py-2">(5, 0)</div>
                        <div class="bg-brand-warm/20 border-2 border-brand-warm py-2 font-bold text-brand-700">(1, 1)*</div>
                    </div>
                    <div class="bg-brand-700 text-white p-4 font-mono text-xs space-y-1">
                        <div class="text-brand-warm font-bold">Análisis Automático:</div>
                        <div>Estrategia Dominante: Traicionar</div>
                        <div class="text-brand-accent font-bold">Equilibrio de Nash: (Traicionar, Traicionar)</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="neubox bg-white p-6 space-y-2">
                <h2 class="font-bold text-lg text-brand-700">Equilibrios en 1 Clic</h2>
                <p class="text-sm text-brand-600">Identifica equilibrios de Nash en estrategias puras y estrategias estrictamente dominadas sin cálculos manuales.</p>
            </div>
            <div class="neubox bg-white p-6 space-y-2">
                <h2 class="font-bold text-lg text-brand-700">Ideal para Clases de Economía</h2>
                <p class="text-sm text-brand-600">Simula competencias de duopolio, dilemas sociales y juegos de coordinación directamente en el aula.</p>
            </div>
            <div class="neubox bg-white p-6 space-y-2">
                <h2 class="font-bold text-lg text-brand-700">100% Privado en tu Teléfono</h2>
                <p class="text-sm text-brand-600">No requiere crear cuenta ni conexión a internet. Todas tus matrices se procesan localmente.</p>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
