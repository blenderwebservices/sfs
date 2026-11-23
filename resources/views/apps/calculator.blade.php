<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Matrices 3x3 Android | Paso a Paso y Offline — Solutions Factory Studio</title>
    <meta name="description" content="Descarga gratis la Calculadora Científica Matricial para Android. Resuelve determinantes, inversas y matrices 2x2 y 3x3 paso a paso, sin internet y sin registro (100% Local-First).">
    @include('partials.styles')
</head>
<body class="bg-brand-50 text-brand-700 font-sans antialiased grid-bg min-h-screen selection:bg-brand-accent selection:text-white">

    @include('partials.header')

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 space-y-16">
        <!-- Breadcrumb -->
        <div class="text-xs font-mono text-brand-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-brand-accent underline">Inicio</a>
            <span>/</span>
            <span>Calculadora Científica Matricial</span>
        </div>

        <!-- Hero de Producto -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white border-2 border-brand-600 text-xs font-mono font-bold uppercase text-brand-accent">
                    <i class="fa-solid fa-shield-halved"></i> 100% Local-First · Funciona Offline
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-brand-700 leading-tight">
                    Calculadora Científica <span class="text-brand-accent">Matricial 2x2 y 3x3</span> para Android
                </h1>
                <p class="text-base sm:text-lg text-brand-600 leading-relaxed">
                    Resuelve determinantes, matrices inversas, transpuestas y multiplicaciones en segundos. Revisa el desglose paso a paso para verificar tus tareas y estudiar álgebra lineal sin errores.
                </p>

                <div class="bg-white border-2 border-brand-600 p-4 inline-flex flex-wrap items-center gap-4 text-xs font-mono">
                    <span><i class="fa-solid fa-circle-check text-brand-accent"></i> Gratis</span>
                    <span><i class="fa-solid fa-user-slash text-brand-accent"></i> Sin registro</span>
                    <span><i class="fa-solid fa-ban text-brand-warm"></i> Cero anuncios</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-2">
                    <a href="{{ $portfolio?->link ?: 'https://play.google.com/store/apps' }}" target="_blank" rel="noopener noreferrer" class="neubtn px-7 py-4 flex items-center justify-center gap-3 bg-brand-700 hover:bg-brand-accent">
                        <i class="fa-brands fa-google-play text-2xl text-brand-accent"></i>
                        <div class="text-left leading-tight">
                            <div class="text-[10px] uppercase tracking-wider text-brand-100/80 font-mono">Disponible en</div>
                            <div class="text-base font-extrabold text-white">Google Play</div>
                        </div>
                    </a>
                    <a href="{{ route('legal.privacy-calculator') }}" class="neubox px-6 py-4 font-mono text-xs font-bold flex items-center justify-center bg-white hover:bg-brand-100">
                        Política de Privacidad
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="neubox bg-white p-6 space-y-4">
                    <div class="font-mono text-xs font-bold uppercase text-brand-accent border-b-2 border-brand-100 pb-2">
                        Ejemplo Real: Determinante 3x3 Paso a Paso
                    </div>
                    <div class="bg-brand-50 border border-brand-600 p-4 font-mono text-sm text-center space-y-1">
                        <div>[ 2 &nbsp;&nbsp; -1 &nbsp;&nbsp; 3 ]</div>
                        <div>[ 0 &nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp; 1 ]</div>
                        <div>[ 5 &nbsp;&nbsp;&nbsp; 2 &nbsp; -2 ]</div>
                    </div>
                    <div class="bg-brand-700 text-white p-4 font-mono text-xs space-y-1.5">
                        <div class="text-brand-accent font-bold">Procedimiento (Cofactores):</div>
                        <div>+ 2 · (4·(-2) - 1·2) = -20</div>
                        <div>- (-1) · (0·(-2) - 1·5) = -5</div>
                        <div>+ 3 · (0·2 - 4·5) = -60</div>
                        <div class="pt-2 border-t border-brand-500 text-brand-warm font-bold text-sm">Resultado: det(A) = -85</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Beneficios y Casos de Uso -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="neubox bg-white p-6 space-y-2">
                <h2 class="font-bold text-lg text-brand-700">Auditoría Paso a Paso</h2>
                <p class="text-sm text-brand-600">No solo te da el número final: muestra cada multiplicación y signo para que detectes dónde te equivocaste al practicar.</p>
            </div>
            <div class="neubox bg-white p-6 space-y-2">
                <h2 class="font-bold text-lg text-brand-700">Historial Persistente Local</h2>
                <p class="text-sm text-brand-600">Guarda tus matrices y resultados directamente en tu teléfono para repasar antes de un examen sin necesidad de internet.</p>
            </div>
            <div class="neubox bg-white p-6 space-y-2">
                <h2 class="font-bold text-lg text-brand-700">Privacidad Total</h2>
                <p class="text-sm text-brand-600">Arquitectura Local-First: sin cuentas, sin permisos invasivos y sin consumo de datos móviles.</p>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
