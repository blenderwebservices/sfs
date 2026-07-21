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
            'description' => 'Herramienta de precisión especializada en álgebra lineal. Diseñada para resolver operaciones de matrices de 2x2 y 3x3 de forma instantánea, incorporando un registro de historial detallado paso a paso para auditoría de procedimientos educativos.',
            'tags' => ['Cálculo de Determinantes', 'Historial Persistente', 'Modo Paso a Paso'],
            'version' => 'Versión 1.2 Disponible',
            'link' => '#',
            'icon' => '2x2',
            'color_theme' => 'brand-accent',
            'order' => 1,
            'is_active' => true,
        ]);

        Portfolio::create([
            'title' => 'Simulador de Teoría de Juegos No Cooperativos',
            'category' => 'ECONOMÍA & DECISIONES',
            'description' => 'Entorno lúdico e interactivo basado en modelos no cooperativos. Permite configurar matrices de pagos, simular dilemas estratégicos clásicos y calcular equilibrios de Nash de manera gráfica para entender la toma de decisiones racionales.',
            'tags' => ['Equilibrio de Nash', 'Estrategias Dominantes', 'Modo Multijugador Local'],
            'version' => 'Lanzamiento Oficial',
            'link' => '#',
            'icon' => 'JN',
            'color_theme' => 'brand-warm',
            'order' => 2,
            'is_active' => true,
        ]);

        // 4. Create Default AI Agents
        AiAgent::create([
            'name' => 'Socrates',
            'description' => 'Tutor académico de pensamiento lógico y algoritmos de optimización. Diseñado para guiar tu aprendizaje deductivo.',
            'system_prompt' => 'Eres Socrates, un tutor socrático de pensamiento crítico y desarrollo lógico para Solutions Factory Studio. En lugar de dar respuestas directas de inmediato, guía a los estudiantes mediante preguntas lógicas para ayudarles a descubrir la solución por sí mismos. Mantén un tono paciente, sabio, académico y amigable. Usa markdown en tus respuestas.',
            'model' => 'gemini-1.5-flash',
            'provider' => 'Google',
            'temperature' => 0.7,
            'avatar' => 'fa-solid fa-graduation-cap',
            'is_active' => true,
        ]);

        AiAgent::create([
            'name' => 'Ada',
            'description' => 'Asistente de arquitectura limpia y desarrollo ágil de software. Resuelve dudas de ingeniería al instante.',
            'system_prompt' => 'Eres Ada, una experta en arquitectura de software limpia y desarrollo ágil para Solutions Factory Studio. Brindas recomendaciones directas, precisas y eficientes sobre patrones de diseño, optimización de código y mejores prácticas de backend/frontend. Tu tono es directo, profesional, técnico y servicial. Usa markdown para mostrar bloques de código y listas.',
            'model' => 'gemini-1.5-flash',
            'provider' => 'Google',
            'temperature' => 0.5,
            'avatar' => 'fa-solid fa-microchip',
            'is_active' => true,
        ]);
    }
}
