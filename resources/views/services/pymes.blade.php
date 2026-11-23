<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitios Web para Micro y PyMEs | Entrega en 7 a 14 días — Solutions Factory Studio</title>
    <meta name="description" content="Desarrollo de sitios web profesionales para micro y pequeñas empresas. Entrega en 7 a 14 días, optimizados para Google y WhatsApp Business, sin rentas ocultas.">
    @include('partials.styles')
</head>
<body class="bg-brand-50 text-brand-700 font-sans antialiased grid-bg min-h-screen selection:bg-brand-accent selection:text-white">

    @include('partials.header')

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 space-y-16">
        <div class="text-xs font-mono text-brand-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-brand-accent underline">Inicio</a>
            <span>/</span>
            <span>Sitios Web para Micro y PyMEs</span>
        </div>

        <!-- Hero Comercial B2B -->
        <section class="neubox bg-brand-700 text-white p-8 sm:p-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-5">
                <span class="inline-block px-3 py-1 bg-brand-warm text-white font-mono text-xs font-bold uppercase tracking-wider border border-white">
                    Servicio Comercial B2B
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Sitios web para micro y PyMEs listos para vender en <span class="text-brand-accent">7 a 14 días</span>.
                </h1>
                <p class="text-brand-100/90 text-base sm:text-lg max-w-2xl leading-relaxed">
                    Deja de perder clientes por no tener una página web profesional. Diseñamos sitios rápidos, claros y conectados directamente a tu WhatsApp Business para que recibas cotizaciones desde el primer día.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-2">
                    <a href="https://wa.me/5215500000000?text=Hola%2C%20quiero%20cotizar%20un%20sitio%20web%20para%20mi%20PyME" target="_blank" rel="noopener noreferrer" class="neubtn px-7 py-4 font-bold bg-brand-accent text-white border-white hover:bg-brand-warm inline-flex items-center justify-center gap-2">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Cotizar por WhatsApp
                    </a>
                    <a href="{{ route('home') }}#contacto" class="neubox px-7 py-4 font-bold bg-white text-brand-700 hover:bg-brand-100 inline-flex items-center justify-center gap-2">
                        <i class="fa-solid fa-envelope"></i> Solicitar Propuesta por Correo
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 bg-white text-brand-700 border-2 border-brand-600 p-6 space-y-3">
                <div class="font-mono text-xs font-bold uppercase text-brand-accent">Incluye en todos los proyectos</div>
                <ul class="space-y-2.5 text-sm">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-accent"></i> Diseño adaptado a celular</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-accent"></i> Botón directo a WhatsApp</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-accent"></i> Certificado SSL y velocidad alta</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-accent"></i> Optimización SEO local para Google</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-accent"></i> Aviso de Privacidad incluido</li>
                </ul>
            </div>
        </section>

        <!-- Paquetes Claros -->
        <section class="space-y-8">
            <div class="text-center max-w-2xl mx-auto space-y-2">
                <span class="font-mono text-xs font-bold uppercase text-brand-accent">Soluciones por Etapa</span>
                <h2 class="text-3xl font-extrabold text-brand-700">Elige el formato que tu negocio necesita</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="neubox bg-white p-7 flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="font-mono text-xs font-bold text-brand-accent uppercase">Entrega en 7 días</span>
                        <h3 class="text-xl font-extrabold">Landing Page Comercial</h3>
                        <p class="text-sm text-brand-600">Ideal para consultorios, profesionistas independientes y negocios locales que buscan citas o mensajes inmediatos.</p>
                        <ul class="text-xs text-brand-600 space-y-2 pt-2">
                            <li>• 1 página enfocada en conversión</li>
                            <li>• Catálogo breve de servicios</li>
                            <li>• Mapa de ubicación y horarios</li>
                            <li>• Botón flotante de WhatsApp</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/5215500000000?text=Hola%2C%20me%20interesa%20una%20Landing%20Page%20Comercial" target="_blank" rel="noopener noreferrer" class="neubtn px-5 py-3 text-center text-xs font-bold uppercase">
                        Cotizar Landing Page
                    </a>
                </div>

                <div class="neubox bg-brand-50 p-7 flex flex-col justify-between space-y-6 border-brand-accent">
                    <div class="space-y-3">
                        <span class="font-mono text-xs font-bold text-brand-warm uppercase">Más Popular · 10 días</span>
                        <h3 class="text-xl font-extrabold">Sitio Web PyME + Catálogo</h3>
                        <p class="text-sm text-brand-600">Para comercios, clínicas y empresas que necesitan mostrar múltiples servicios o productos con pedidos por WhatsApp.</p>
                        <ul class="text-xs text-brand-600 space-y-2 pt-2">
                            <li>• Hasta 5 secciones o páginas internas</li>
                            <li>• Catálogo administrable de productos</li>
                            <li>• Formulario de cotización + Aviso legal</li>
                            <li>• Indexación optimizada en Google</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/5215500000000?text=Hola%2C%20me%20interesa%20el%20Sitio%20Web%20PyME%20con%20Cat%C3%A1logo" target="_blank" rel="noopener noreferrer" class="neubtn px-5 py-3 text-center text-xs font-bold uppercase bg-brand-accent">
                        Cotizar Sitio PyME
                    </a>
                </div>

                <div class="neubox bg-white p-7 flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="font-mono text-xs font-bold text-brand-500 uppercase">Entrega en 14+ días</span>
                        <h3 class="text-xl font-extrabold">Aplicación Web a la Medida</h3>
                        <p class="text-sm text-brand-600">Para empresas que requieren panel de administración, citas en línea, cotizadores o integración con asistentes IA.</p>
                        <ul class="text-xs text-brand-600 space-y-2 pt-2">
                            <li>• Panel administrativo privado</li>
                            <li>• Base de datos y roles de usuario</li>
                            <li>• Integración con pagos o APIs</li>
                            <li>• Soporte técnico directo</li>
                        </ul>
                    </div>
                    <a href="{{ route('home') }}#contacto" class="neubtn px-5 py-3 text-center text-xs font-bold uppercase">
                        Agendar Diagnóstico
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
