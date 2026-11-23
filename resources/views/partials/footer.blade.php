<!-- Footer -->
<footer class="bg-brand-700 text-white border-t-2 border-brand-600 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-2 space-y-3">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 neubox bg-brand-accent flex items-center justify-center text-white font-mono font-bold text-sm">
                        SF
                    </div>
                    <span class="font-bold text-lg font-mono">Solutions Factory Studio S.A.S.</span>
                </div>
                <p class="text-xs text-brand-100/80 max-w-md leading-relaxed">
                    Apps de precisión matemática y toma de decisiones bajo arquitectura <strong>Local-First</strong> (100% privadas en tu dispositivo), y desarrollo web rápido para micro y PyMEs.
                </p>
                <p class="text-xs font-mono text-brand-100/70">
                    Contacto oficial: <a href="mailto:contacto@solutions-factory-studio.app" class="text-white underline hover:text-brand-accent">contacto@solutions-factory-studio.app</a>
                </p>
            </div>

            <div class="space-y-3">
                <h4 class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Productos y Servicios</h4>
                <ul class="space-y-2 text-xs text-brand-100/80">
                    <li><a href="{{ route('apps.calculator') }}" class="hover:text-white transition-colors">Calculadora Científica Matricial</a></li>
                    <li><a href="{{ route('apps.game-theory') }}" class="hover:text-white transition-colors">Simulador de Teoría de Juegos</a></li>
                    <li><a href="{{ route('services.pymes') }}" class="hover:text-white transition-colors">Sitios Web para Micro y PyMEs</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="font-mono text-xs font-bold uppercase tracking-wider text-brand-accent">Legal y Acceso</h4>
                <ul class="space-y-2 text-xs text-brand-100/80">
                    <li><a href="{{ route('legal.privacy-general') }}" class="hover:text-white transition-colors">Aviso de Privacidad General</a></li>
                    <li><a href="{{ route('legal.privacy-calculator') }}" class="hover:text-white transition-colors">Privacidad · Calculadora</a></li>
                    <li><a href="{{ route('legal.privacy-simulator') }}" class="hover:text-white transition-colors">Privacidad · Simulador</a></li>
                    <li><a href="/admin/login" class="hover:text-white transition-colors font-mono text-brand-100/60">Iniciar Sesión (Admin)</a></li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-brand-600 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs font-mono text-brand-100/70 text-center sm:text-left">
                &copy; 2026 Solutions Factory Studio S.A.S. Todos los derechos reservados.
            </p>
            <div class="flex space-x-5 text-lg">
                <a href="https://play.google.com/store/apps" target="_blank" rel="noopener noreferrer" aria-label="Google Play" class="hover:text-brand-accent transition-colors"><i class="fa-brands fa-google-play"></i></a>
                <a href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="hover:text-brand-accent transition-colors"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="hover:text-brand-accent transition-colors"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
