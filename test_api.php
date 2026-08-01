<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$apiKey = env('APP_APIKEY_AI');
echo "API Key loaded: " . ($apiKey ? $apiKey : "NULL") . "\n";

$response = \Illuminate\Support\Facades\Http::withHeaders([
    'Content-Type' => 'application/json',
])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . trim($apiKey), [
    'contents' => [
        ['parts' => [['text' => 'Hola']]]
    ]
]);

echo "Status: " . $response->status() . "\n";
echo "Response: " . $response->body() . "\n";
