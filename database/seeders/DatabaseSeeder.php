<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Portfolio;
use App\Models\AiAgent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Admin User
        User::create([
            'name' => 'Admin SFS',
            'email' => 'admin@sfs.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 2. Create Subscriber User
        User::create([
            'name' => 'Subscriber SFS',
            'email' => 'test@sfs.com',
            'password' => Hash::make('password'),
            'role' => 'suscriptor',
        ]);

        // 3. Create Default Portfolio Items
        Portfolio::create([
            'title' => 'Calculadora Científica Matricial',
            'category' => 'MATEMÁTICA APLICADA',
            'description' => 'Resuelve determinantes, inversas y operaciones de matrices 2x2 y 3x3 en segundos. Incluye historial paso a paso para estudiar sin errores, funciona 100% offline y sin registro.',
            'tags' => ['Matrices 2x2 y 3x3', 'Modo Paso a Paso', '100% Offline'],
            'version' => 'Versión 1.2 Disponible',
            'link' => 'https://play.google.com/store/apps',
            'icon' => '2x2',
            'color_theme' => 'brand-accent',
            'order' => 1,
            'is_active' => true,
            'privacy_policy' => '<h2>Política de Privacidad — Calculadora Científica Matricial</h2><p><strong>Solutions Factory Studio S.A.S.</strong> desarrolla esta aplicación bajo arquitectura <strong>Local-First</strong>. Todos los cálculos matriciales y el historial de operaciones se procesan y almacenan exclusivamente en tu dispositivo.</p><ul><li>No recopilamos datos personales ni requerimos registro o inicio de sesión.</li><li>No utilizamos rastreadores publicitarios ni compartimos información con terceros.</li><li>Funciona completamente sin conexión a internet.</li></ul><p>Para dudas o soporte, escríbenos a <a href="mailto:contacto@solutions-factory-studio.app">contacto@solutions-factory-studio.app</a>.</p>',
            'terms_and_conditions' => '<h2>Términos y Condiciones — Calculadora Científica Matricial</h2><p>Esta aplicación es propiedad de <strong>Solutions Factory Studio S.A.S.</strong> y se distribuye de forma gratuita a través de Google Play para fines educativos, académicos y profesionales.</p><p>El usuario es responsable de validar los resultados en contextos críticos de ingeniería o evaluación. Soporte oficial: <a href="mailto:contacto@solutions-factory-studio.app">contacto@solutions-factory-studio.app</a>.</p>',
        ]);

        Portfolio::create([
            'title' => 'Simulador de Teoría de Juegos No Cooperativos',
            'category' => 'ECONOMÍA & DECISIONES',
            'description' => 'Configura matrices de pagos, analiza estrategias dominantes y encuentra el Equilibrio de Nash de forma visual e instantánea. Ideal para clases de economía, estrategia y toma de decisiones.',
            'tags' => ['Equilibrio de Nash', 'Estrategias Dominantes', 'Multijugador Local'],
            'version' => 'Lanzamiento Oficial',
            'link' => 'https://play.google.com/store/apps',
            'icon' => 'JN',
            'color_theme' => 'brand-warm',
            'order' => 2,
            'is_active' => true,
            'privacy_policy' => '<h2>Política de Privacidad — Simulador de Teoría de Juegos No Cooperativos</h2><p><strong>Solutions Factory Studio S.A.S.</strong> garantiza que este simulador opera 100% de forma local en tu dispositivo (arquitectura <strong>Local-First</strong>).</p><ul><li>No solicitamos cuentas, correos ni permisos invasivos.</li><li>Tus simulaciones y matrices de pagos permanecen únicamente en tu teléfono.</li></ul><p>Contacto oficial de soporte: <a href="mailto:contacto@solutions-factory-studio.app">contacto@solutions-factory-studio.app</a>.</p>',
            'terms_and_conditions' => '<h2>Términos y Condiciones — Simulador de Teoría de Juegos No Cooperativos</h2><p>Aplicación desarrollada y mantenida por <strong>Solutions Factory Studio S.A.S.</strong> para el aprendizaje interactivo de teoría de juegos y microeconomía.</p><p>Para soporte técnico o sugerencias: <a href="mailto:contacto@solutions-factory-studio.app">contacto@solutions-factory-studio.app</a>.</p>',
        ]);

        // 4. Create Default AI Agents
        AiAgent::create([
            'name' => 'Socrates',
            'description' => 'Tutor interactivo de álgebra lineal y teoría de juegos. Resuelve dudas sobre matrices paso a paso y el Equilibrio de Nash.',
            'system_prompt' => 'Eres Socrates, un tutor socrático de pensamiento crítico, álgebra lineal y teoría de juegos para Solutions Factory Studio S.A.S. Ayudas a estudiantes a entender el modo paso a paso de la Calculadora Matricial y el Equilibrio de Nash del Simulador de Teoría de Juegos. Mantén un tono claro, paciente y práctico. Usa markdown en tus respuestas.',
            'model' => 'gemini-1.5-flash',
            'provider' => 'Google',
            'temperature' => 0.7,
            'avatar' => 'fa-solid fa-graduation-cap',
            'is_active' => true,
        ]);

        AiAgent::create([
            'name' => 'Ada',
            'description' => 'Asesora comercial y técnica para micro y PyMEs. Te orienta sobre costos, tiempos de entrega y qué incluye tu sitio web.',
            'system_prompt' => 'Eres Ada, asesora técnica y comercial de Solutions Factory Studio S.A.S. Ayudas a dueños de micro y PyMEs a entender qué incluye un sitio web profesional (entrega en 7 a 14 días, diseño a la medida, botón de WhatsApp Business, optimización móvil y SEO local), además de resolver dudas de arquitectura de software. Tu tono es directo, claro y orientado a resultados de negocio. Usa markdown.',
            'model' => 'gemini-1.5-flash',
            'provider' => 'Google',
            'temperature' => 0.5,
            'avatar' => 'fa-solid fa-microchip',
            'is_active' => true,
        ]);
    }
}
