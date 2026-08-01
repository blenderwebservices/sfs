<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions Factory Studio | Software Lógico y de Precisión</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f4f6f9',
                            100: '#e8edf3',
                            500: '#1b3b6f',
                            600: '#13294d',
                            700: '#0b192e',
                            accent: '#218380',
                            warm: '#ff715b'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        mono: ['Fira Code', 'monospace']
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Estilo Neo-Brutalismo / Technical Clean */
        .neubox {
            background: #ffffff;
            border: 2px solid #13294d;
            box-shadow: 4px 4px 0px #13294d;
            transition: all 0.2s ease;
        }
        .neubox:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px #13294d;
        }
        .neubtn {
            background: #1b3b6f;
            color: #ffffff;
            border: 2px solid #13294d;
            box-shadow: 3px 3px 0px #13294d;
            transition: all 0.1s ease;
        }
        .neubtn:hover {
            background: #218380;
            transform: translate(-1px, -1px);
            box-shadow: 4px 4px 0px #13294d;
        }
        .neubtn:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0px #13294d;
        }
        .grid-bg {
            background-image: radial-gradient(#1b3b6f 0.75px, transparent 0.75px);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-brand-50 text-brand-700 font-sans antialiased grid-bg min-h-screen selection:bg-brand-accent selection:text-white">

    <!-- Header / Barra de Navegación -->
    <header class="sticky top-0 z-50 bg-brand-50/90 backdrop-blur-md border-b-2 border-brand-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 neubox bg-brand-accent flex items-center justify-center text-white font-mono font-bold text-xl">
                    SF
                </div>
                <span class="font-bold text-xl tracking-tight text-brand-600 font-mono">SolutionsFactory<span class="text-brand-accent">.</span></span>
            </div>
            
            <nav class="hidden md:flex items-center space-x-8 font-medium">
                <a href="#inicio" class="hover:text-brand-accent transition-colors font-mono">Inicio</a>
                <a href="#filosofia" class="hover:text-brand-accent transition-colors font-mono">Filosofía</a>
                <a href="#portfolio" class="hover:text-brand-accent transition-colors font-mono">Portafolio</a>
                <a href="#agentes" class="hover:text-brand-accent transition-colors font-mono">Agentes IA</a>
                <a href="#contacto" class="hover:text-brand-accent transition-colors font-mono">Contacto</a>
            </nav>

            <div class="flex items-center space-x-3">
                @auth
                    <div class="hidden lg:flex flex-col items-end">
                        <span class="text-[10px] font-mono text-brand-600 uppercase font-bold tracking-wider">Conectado</span>
                        <span class="text-sm font-mono text-brand-accent font-bold">{{ auth()->user()->name }}</span>
                    </div>
                    <a href="/admin" class="neubtn px-4 py-2 rounded-none font-semibold text-xs inline-flex items-center gap-2">
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
                    <a href="/admin/login" class="neubtn px-4 py-2.5 rounded-none font-semibold text-xs inline-flex items-center gap-2">
                        <span>Iniciar Sesión</span>
                        <i class="fa-solid fa-sign-in text-xs"></i>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-24 lg:pt-24 lg:pb-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white border-2 border-brand-600 text-xs font-mono font-semibold uppercase tracking-wider neubox shadow-[2px_2px_0px_#13294d]">
                    <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>
                    Solutions Factory Studio S.A.S.
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-brand-700 leading-tight">
                    Ingeniería de software con rigor <span class="text-brand-accent underline decoration-brand-warm decoration-wavy">académico</span>.
                </h1>
                <p class="text-lg text-brand-600/90 max-w-xl font-normal">
                    Diseñamos herramientas digitales de alta precisión, algoritmos de toma de decisiones y plataformas interactivas orientadas a la educación superior y el pensamiento lógico.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="#portfolio" class="neubtn px-8 py-4 font-bold text-center flex items-center justify-center gap-3">
                        <i class="fa-solid fa-cubes"></i> Explorar Portafolio
                    </a>
                    <a href="#contacto" class="neubox px-8 py-4 font-bold text-center bg-white hover:bg-brand-100 flex items-center justify-center gap-3 text-brand-700">
                        <i class="fa-solid fa-envelope"></i> Vincularse / Soporte
                    </a>
                </div>
            </div>

            <!-- Widget Gráfico / Técnico Estilizado -->
            <div class="lg:col-span-5">
                <div class="neubox p-6 bg-white space-y-4">
                    <div class="flex items-center justify-between border-b-2 border-brand-600 pb-3">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-brand-warm border border-brand-600"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400 border border-brand-600"></div>
                            <div class="w-3 h-3 rounded-full bg-brand-accent border border-brand-600"></div>
                        </div>
                        <span class="font-mono text-xs text-brand-600">sf-core-v1.0.js</span>
                    </div>
                    <div class="font-mono text-xs space-y-2 text-brand-600 bg-brand-50 p-4 border border-brand-600">
                        <p class="text-brand-accent">&gt; init_module("GameTheory_Engine");</p>
                        <p>&gt; Nash_Equilibrium: <span class="text-brand-warm font-bold">OPTIMIZED</span></p>
                        <p class="text-brand-accent">&gt; init_module("Matrix_Processor");</p>
                        <p>&gt; Det_2x2_Determinant: <span class="text-brand-accent font-bold">COMPUTED</span></p>
                        <p class="animate-pulse">&gt; Status: Solutions Factory Operational _</p>
                    </div>
                    <div class="pt-2 text-xs text-right text-brand-600 font-mono">
                        // Diseñado para mentes analíticas
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Filosofía / Pilares -->
    <section id="filosofia" class="bg-white border-y-2 border-brand-600 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto space-y-4 mb-16">
                <h2 class="text-3xl font-extrabold tracking-tight">Nuestro ADN Académico</h2>
                <p class="text-brand-600">Transformamos conceptos teóricos complejos en experiencias de usuario intuitivas, rápidas y metodológicamente impecables.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tarjeta 1 -->
                <div class="neubox p-8 bg-brand-50 space-y-4">
                    <div class="w-14 h-14 neubox bg-white flex items-center justify-center text-brand-accent text-2xl font-bold">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold">Rigores Teóricos</h3>
                    <p class="text-sm text-brand-600">Cada app nace de modelos formales validados (álgebra lineal, teoría de juegos, economía conductual) para asegurar veracidad académica.</p>
                </div>

                <!-- Tarjeta 2 -->
                <div class="neubox p-8 bg-brand-50 space-y-4">
                    <div class="w-14 h-14 neubox bg-white flex items-center justify-center text-brand-warm text-2xl font-bold">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3 class="text-xl font-bold">Arquitectura Limpia</h3>
                    <p class="text-sm text-brand-600">Desarrollo nativo y optimizado con gestión robusta de estados, garantizando ejecución fluida sin latencia ni dependencias innecesarias.</p>
                </div>

                <!-- Tarjeta 3 -->
                <div class="neubox p-8 bg-brand-50 space-y-4">
                    <div class="w-14 h-14 neubox bg-white flex items-center justify-center text-brand-accent text-2xl font-bold">
                        <i class="fa-solid fa-chess-board"></i>
                    </div>
                    <h3 class="text-xl font-bold">Lógica Interactiva</h3>
                    <p class="text-sm text-brand-600">Convertimos la pizarra de tiza y el papel milimétrico en simuladores dinámicos que potencian el razonamiento crítico del usuario.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Portfolio / Aplicaciones -->
    <section id="portfolio" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div class="space-y-3">
                <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Portafolio Oficial</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Aplicaciones Destacadas</h2>
            </div>
            <p class="text-brand-600 max-w-md text-sm">
                Nuestros primeros lanzamientos oficiales orientados al ecosistema móvil y optimizados bajo estrictos estándares de calidad.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            @foreach($portfolios as $portfolio)
                <div class="neubox bg-white p-8 sm:p-10 flex flex-col justify-between space-y-8">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 bg-brand-100 border border-brand-600 text-xs font-mono font-bold text-brand-700">{{ $portfolio->category }}</span>
                            <div class="w-10 h-10 neubox {{ $portfolio->color_theme == 'brand-warm' ? 'bg-brand-warm' : 'bg-brand-accent' }} flex items-center justify-center text-white font-mono text-lg font-bold">
                                {{ $portfolio->icon }}
                            </div>
                        </div>
                        <h3 class="text-2xl font-extrabold text-brand-700">{{ $portfolio->title }}</h3>
                        <p class="text-brand-600 text-sm leading-relaxed">
                            {{ $portfolio->description }}
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            @if($portfolio->tags)
                                @foreach($portfolio->tags as $tag)
                                    <span class="px-2.5 py-1 bg-brand-50 border border-brand-600 text-xs font-mono">{{ $tag }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="pt-6 border-t-2 border-brand-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="font-mono text-xs text-brand-500 font-semibold">// {{ $portfolio->version ?: 'Lanzamiento' }}</span>
                        
                        <div class="flex flex-wrap items-center gap-3 justify-end">
                            @if($portfolio->privacy_policy)
                                <button onclick="openLegalModal('privacy', {{ $portfolio->id }})" class="text-xs font-semibold text-brand-600 hover:text-brand-accent underline underline-offset-2 transition-colors">Política de Privacidad</button>
                            @endif
                            @if($portfolio->terms_and_conditions)
                                <span class="text-brand-300 hidden sm:inline">|</span>
                                <button onclick="openLegalModal('terms', {{ $portfolio->id }})" class="text-xs font-semibold text-brand-600 hover:text-brand-accent underline underline-offset-2 transition-colors">Términos y Condiciones</button>
                            @endif
                            @if($portfolio->link)
                                <a href="{{ $portfolio->link }}" class="neubtn px-5 py-2.5 text-sm font-semibold flex items-center gap-2 ml-1">
                                    <i class="fa-brands fa-google-play"></i> Google Play
                                </a>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Hidden content for modals -->
                    @if($portfolio->privacy_policy)
                        <div id="legal-content-privacy-{{ $portfolio->id }}" class="hidden">
                            {!! $portfolio->privacy_policy !!}
                        </div>
                    @endif
                    @if($portfolio->terms_and_conditions)
                        <div id="legal-content-terms-{{ $portfolio->id }}" class="hidden">
                            {!! $portfolio->terms_and_conditions !!}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <!-- Sección de Agentes de IA -->
    <section id="agentes" class="bg-white border-t-2 border-brand-600 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div class="space-y-3">
                    <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Soporte Inteligente</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Nuestros Agentes de IA</h2>
                </div>
                <p class="text-brand-600 max-w-md text-sm">
                    Interactúa en tiempo real con nuestros asistentes cognitivos especializados en diferentes áreas técnicas y académicas.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($agents as $agent)
                    <div class="neubox p-8 bg-brand-50 space-y-6 flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-12 h-12 neubox bg-brand-accent flex items-center justify-center text-white text-xl">
                                        <i class="{{ $agent->avatar ?: 'fa-solid fa-robot' }}"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-brand-700">{{ $agent->name }}</h3>
                                        <span class="text-xs text-brand-500 font-mono">Modo: {{ $agent->model }}</span>
                                    </div>
                                </div>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-300">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Activo
                                </span>
                            </div>
                            <p class="text-sm text-brand-600 leading-relaxed">{{ $agent->description }}</p>
                        </div>
                        <div class="pt-4 border-t border-brand-200 flex items-center justify-between">
                            <span class="text-xs font-mono text-brand-500">// Proveedor: {{ $agent->provider }}</span>
                            <button onclick="openChat({{ $agent->id }}, '{{ $agent->name }}', '{{ $agent->avatar ?: 'fa-solid fa-robot' }}')" class="neubtn px-5 py-2.5 text-xs font-bold uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-comments"></i> Chatear
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="bg-brand-50 border-t-2 border-brand-600 py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="neubox bg-white p-8 sm:p-12 space-y-8">
                <div class="text-center space-y-3">
                    <span class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Canal Directo</span>
                    <h2 class="text-3xl font-extrabold">Inicia un proyecto con nosotros</h2>
                    <p class="text-brand-600 text-sm max-w-lg mx-auto">
                        ¿Interesado en nuestras herramientas académicas o en colaborar en un desarrollo tecnológico a la medida? Escríbenos.
                    </p>
                </div>

                <form class="space-y-6" onsubmit="event.preventDefault(); alert('Mensaje simulado enviado con éxito. ¡Gracias por contactar a Solutions Factory Studio!');">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-xs font-mono font-bold uppercase">Nombre / Institución</label>
                            <input type="text" required class="w-full neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent" placeholder="Ej. Dr. Roberto Gómez">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-mono font-bold uppercase">Correo Electrónico</label>
                            <input type="email" required class="w-full neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent" placeholder="contacto@universidad.edu">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs font-mono font-bold uppercase">Mensaje o Propuesta</label>
                        <textarea rows="4" required class="w-full neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent" placeholder="Escribe los detalles de tu consulta..."></textarea>
                    </div>
                    <div class="text-center pt-2">
                        <button type="submit" class="neubtn px-10 py-4 font-bold text-base inline-flex items-center gap-3">
                            <i class="fa-solid fa-paper-plane"></i> Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-brand-700 text-white border-t-2 border-brand-600 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 neubox bg-brand-accent flex items-center justify-center text-white font-mono font-bold text-sm">
                    SF
                </div>
                <span class="font-bold text-lg font-mono">Solutions Factory Studio S.A.S.</span>
            </div>
            <p class="text-xs font-mono text-brand-100/70 text-center">
                &copy; 2026 Solutions Factory Studio S.A.S. Todos los derechos reservados. Rigor lógico y desarrollo ágil.
            </p>
            <div class="flex space-x-4 text-lg">
                <a href="#" class="hover:text-brand-accent transition-colors"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="hover:text-brand-accent transition-colors"><i class="fa-brands fa-google-play"></i></a>
                <a href="#" class="hover:text-brand-accent transition-colors"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

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
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span> Online
                        </span>
                    </div>
                </div>
                <button onclick="closeChat()" class="text-brand-600 hover:text-brand-warm text-sm font-bold font-mono">
                    [CERRAR X]
                </button>
            </div>

            <!-- Messages Area -->
            <div id="chat-messages" class="flex-1 overflow-y-auto p-6 space-y-4 bg-brand-50/50">
                <!-- Initial Greeting -->
            </div>

            <!-- Input Area -->
            <form id="chat-form" onsubmit="sendMessage(event)" class="border-t-2 border-brand-600 p-4 bg-white flex gap-3">
                <input id="chat-input" type="text" autocomplete="off" required class="flex-1 neubox bg-brand-50 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-accent font-mono" placeholder="Escribe un mensaje...">
                <button type="submit" class="neubtn px-6 py-3 font-bold text-sm inline-flex items-center gap-2 font-mono">
                    <span>ENVIAR</span>
                    <i class="fa-solid fa-paper-plane text-xs"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- JS Logic -->
    <script>
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
                        ¡Hola! Soy <strong>${agentName}</strong>. Escríbeme cualquier consulta y estaré encantado de guiarte paso a paso.
                    </div>
                </div>
            `;
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function closeChat() {
            document.getElementById('chat-modal').classList.add('hidden');
            currentAgentId = null;
        }

        async function sendMessage(event) {
            event.preventDefault();
            const input = document.getElementById('chat-input');
            const messageText = input.value.trim();
            if (!messageText || !currentAgentId) return;

            input.value = '';

            const messagesContainer = document.getElementById('chat-messages');
            
            // Add user message
            messagesContainer.innerHTML += `
                <div class="flex items-start justify-end space-x-2.5">
                    <div class="neubox bg-brand-accent text-white p-3.5 max-w-[80%] text-sm">
                        ${messageText}
                    </div>
                </div>
            `;
            
            messagesContainer.scrollTop = messagesContainer.scrollHeight;

            // Add typing indicator
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
                
                // Remove typing indicator
                const typingElement = document.getElementById(typingId);
                if (typingElement) typingElement.remove();

                // Add agent response
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
    <!-- Modal Legal -->
    <div id="legalModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-brand-700/80 backdrop-blur-sm" onclick="closeLegalModal()"></div>
        
        <!-- Modal Content -->
        <div class="neubox bg-white w-full max-w-3xl max-h-[90vh] flex flex-col relative z-10">
            <div class="flex items-center justify-between p-6 border-b-2 border-brand-100">
                <h3 id="legalModalTitle" class="text-2xl font-extrabold text-brand-700">Documento Legal</h3>
                <button onclick="closeLegalModal()" class="w-8 h-8 flex items-center justify-center text-brand-500 hover:text-brand-warm hover:bg-brand-50 border-2 border-transparent hover:border-brand-warm transition-colors">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            
            <div id="legalModalBody" class="p-6 overflow-y-auto legal-content text-brand-600 text-sm">
                <!-- Contenido inyectado por JS -->
            </div>
            
            <div class="p-4 border-t-2 border-brand-100 flex justify-end bg-brand-50">
                <button onclick="closeLegalModal()" class="neubtn px-6 py-2.5 text-sm font-bold bg-white text-brand-700">Cerrar</button>
            </div>
        </div>
    </div>

    <style>
        .legal-content h1 { font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem; color: #0b192e; }
        .legal-content h2 { font-size: 1.25rem; font-weight: 800; margin-bottom: 0.75rem; color: #13294d; margin-top: 1.5rem; }
        .legal-content h3 { font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem; color: #1b3b6f; margin-top: 1.25rem; }
        .legal-content p { margin-bottom: 1rem; line-height: 1.6; }
        .legal-content ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1rem; }
        .legal-content ol { list-style-type: decimal; padding-left: 1.5rem; margin-bottom: 1rem; }
        .legal-content li { margin-bottom: 0.5rem; }
        .legal-content strong { font-weight: 700; color: #0b192e; }
        .legal-content a { color: #218380; text-decoration: underline; text-underline-offset: 2px; }
    </style>

    <script>
        function openLegalModal(type, id) {
            const contentId = `legal-content-${type}-${id}`;
            const contentEl = document.getElementById(contentId);
            
            if (contentEl) {
                document.getElementById('legalModalTitle').innerText = type === 'privacy' ? 'Política de Privacidad' : 'Términos y Condiciones';
                document.getElementById('legalModalBody').innerHTML = contentEl.innerHTML;
                document.getElementById('legalModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeLegalModal() {
            document.getElementById('legalModal').classList.add('hidden');
            document.body.style.overflow = '';
        }
    </script>
</body>
</html>
