<?php

namespace App\Http\Controllers;

use App\Models\AiAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AiAgentChatController extends Controller
{
    /**
     * Handle the chat query for a specific AI agent.
     */
    public function chat(Request $request, AiAgent $agent)
    {
        $request->validate([
            'message' => 'required|string|max:5000',
        ]);

        $message = $request->input('message');
        $apiKey = env('GEMINI_API_KEY');

        // Check if agent is active
        if (!$agent->is_active) {
            return response()->json([
                'response' => 'Este agente se encuentra inactivo en este momento.'
            ], 403);
        }

        // If Gemini API Key is configured, make a live API call
        if ($apiKey) {
            try {
                // Map the model or fallback to gemini-1.5-flash
                $model = $agent->model ?: 'gemini-1.5-flash';
                if (!str_contains($model, 'gemini')) {
                    $model = 'gemini-1.5-flash';
                }

                $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}";

                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                ])->post($url, [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $message]
                            ]
                        ]
                    ],
                    'systemInstruction' => [
                        'parts' => [
                            ['text' => $agent->system_prompt]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => $agent->temperature,
                        'maxOutputTokens' => 1024,
                    ]
                ]);

                if ($response->successful()) {
                    $result = $response->json();
                    $reply = $result['candidates'][0]['content']['parts'][0]['text'] ?? null;
                    if ($reply) {
                        return response()->json(['response' => $this->parseMarkdown($reply)]);
                    }
                }

                Log::error('Gemini API call failed: ' . $response->body());
            } catch (\Throwable $e) {
                Log::error('Error calling Gemini API: ' . $e->getMessage());
            }
        }

        // Fallback to intelligent mock response if no API key or on failure
        $mockReply = $this->generateMockResponse($agent, $message);
        return response()->json(['response' => $mockReply]);
    }

    /**
     * Generate an intelligent simulated response reflecting the agent's personality.
     */
    private function generateMockResponse(AiAgent $agent, string $message): string
    {
        $name = strtolower($agent->name);
        
        if (str_contains($name, 'socrates')) {
            return "<p class='mb-2'>Qué interesante planteamiento sobre <em>\"" . e($message) . "\"</em>. Como tutor académico de Solutions Factory Studio, mi propósito no es darte una respuesta empaquetada, sino invitarte a indagar en ella.</p>" .
                   "<p class='mb-2'>Para guiar nuestra investigación deductiva, te propongo reflexionar en lo siguiente:</p>" .
                   "<ul class='list-disc pl-5 mb-2 space-y-1'>" .
                     "<li>¿Cuáles son las premisas básicas en las que fundamentas este concepto?</li>" .
                     "<li>¿Qué contradicciones o excepciones podrían surgir si llevamos esa idea al límite?</li>" .
                     "<li>¿Cómo se relaciona esto con la eficiencia de un algoritmo u optimización lógica?</li>" .
                   "</ul>" .
                   "<p>¿Qué opinas al respecto? Tu reflexión inicial nos dará el norte para estructurar el desarrollo.</p>";
        }

        if (str_contains($name, 'ada')) {
            return "<p class='mb-2'>Entendido. He analizado tu consulta sobre <strong>\"" . e($message) . "\"</strong> bajo la óptica de la ingeniería y arquitectura de software.</p>" .
                   "<p class='mb-2'>Para mantener un código limpio, desacoplado y de alta mantenibilidad, te sugiero aplicar los siguientes patrones:</p>" .
                   "<ol class='list-decimal pl-5 mb-2 space-y-1'>" .
                     "<li><strong>Separación de Conceptos:</strong> Aísla la lógica de negocio de los controladores o interfaces externas.</li>" .
                     "<li><strong>Inyección de Dependencias:</strong> Depende de abstracciones en lugar de implementaciones concretas para facilitar las pruebas unitarias.</li>" .
                     "<li><strong>Principio de Responsabilidad Única (SRP):</strong> Cada clase y módulo debe resolver una sola tarea bien definida.</li>" .
                   "</ol>" .
                   "<p class='mb-2'>Aquí tienes un ejemplo de cómo estructurarlo conceptualmente:</p>" .
                   "<pre class='bg-brand-700 text-white font-mono text-xs p-3 rounded mb-2 overflow-x-auto'>" .
                   "// app/Services/BusinessService.php\n" .
                   "namespace App\\Services;\n\n" .
                   "class LogicManager {\n" .
                   "    public function executeAction(array \$data) {\n" .
                   "        // Lógica optimizada de Solutions Factory Studio\n" .
                   "        return \$this->process(\$data);\n" .
                   "    }\n" .
                   "}" .
                   "</pre>" .
                   "<p>¿Qué te parece este enfoque para resolver tu problema de ingeniería?</p>";
        }

        // Generic Agent response
        return "<p class='mb-2'>Hola. He recibido tu mensaje: <em>\"" . e($message) . "\"</em>.</p>" .
               "<p class='mb-2'>Como agente inteligente de <strong>Solutions Factory Studio</strong>, estoy procesando tu solicitud de acuerdo con mis directrices:</p>" .
               "<blockquote class='border-l-4 border-brand-accent pl-3 italic text-brand-600/90 mb-2'>\"" . e($agent->system_prompt) . "\"</blockquote>" .
               "<p>Si configuras tu <code>GEMINI_API_KEY</code> en el archivo <code>.env</code>, podré procesar esta consulta utilizando el modelo real <code>" . e($agent->model) . "</code> a través de " . e($agent->provider) . ". ¡Por ahora, he simulado con éxito este comportamiento!</p>";
    }

    /**
     * A very simple markdown to HTML parser for Gemini responses.
     */
    private function parseMarkdown(string $text): string
    {
        // Line breaks
        $text = nl2br($text);

        // Bold
        $text = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $text);

        // Italic
        $text = preg_replace('/\*(.*?)\*/', '<em>$1</em>', $text);

        // Code blocks
        $text = preg_replace('/```(.*?)```/s', '<pre class="bg-brand-700 text-white font-mono text-xs p-3 rounded my-2 overflow-x-auto">$1</pre>', $text);

        // Inline code
        $text = preg_replace('/`(.*?)`/', '<code class="bg-brand-100 text-brand-700 px-1 rounded font-mono">$1</code>', $text);

        return $text;
    }
}
