<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Models\AiAgent;
use App\Http\Controllers\AiAgentChatController;

Route::get('/', function () {
    $portfolios = Portfolio::where('is_active', true)->orderBy('order', 'asc')->get();
    $agents = AiAgent::where('is_active', true)->get();

    return view('landing', compact('portfolios', 'agents'));
})->name('home');

Route::get('/calculadora-matricial', function () {
    $portfolio = Portfolio::where('is_active', true)
        ->where(function ($q) {
            $q->where('title', 'like', '%Matricial%')
              ->orWhere('order', 1);
        })
        ->orderBy('order', 'asc')
        ->first();

    return view('apps.calculator', compact('portfolio'));
})->name('apps.calculator');

Route::get('/simulador-teoria-juegos', function () {
    $portfolio = Portfolio::where('is_active', true)
        ->where(function ($q) {
            $q->where('title', 'like', '%Teoría de Juegos%')
              ->orWhere('order', 2);
        })
        ->orderBy('order', 'asc')
        ->first();

    return view('apps.game-theory', compact('portfolio'));
})->name('apps.game-theory');

Route::get('/desarrollo-web-pymes', function () {
    $adaAgent = AiAgent::where('is_active', true)
        ->where('name', 'like', '%Ada%')
        ->first();

    return view('services.pymes', compact('adaAgent'));
})->name('services.pymes');

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::post('/agents/{agent}/chat', [AiAgentChatController::class, 'chat'])->name('agents.chat');

Route::get('/aviso-privacidad', function () {
    $title = 'Aviso de Privacidad General';
    $subtitle = 'Sitio web oficial · solutions-factory-studio.app';
    $content = <<<'HTML'
<h2>1. Identidad y Domicilio del Responsable</h2>
<p><strong>Solutions Factory Studio S.A.S.</strong> es responsable del tratamiento de los datos personales que usted proporcione a través del sitio web <code>https://solutions-factory-studio.app</code>, sus formularios de contacto y canales de atención digital.</p>

<h2>2. Datos Personales Recabados</h2>
<p>Para atender solicitudes de información, soporte técnico de aplicaciones móviles o cotizaciones de desarrollo web para micro y PyMEs, podemos recabar únicamente:</p>
<ul>
    <li>Nombre completo o razón social / institución.</li>
    <li>Correo electrónico de contacto.</li>
    <li>Detalles del proyecto o consulta enviada voluntariamente en el formulario.</li>
</ul>
<p><strong>Nota sobre nuestras aplicaciones móviles:</strong> Nuestras apps publicadas en Google Play operan bajo una arquitectura <strong>Local-First</strong>; no recopilan datos personales, no requieren registro ni envían información de tus cálculos a servidores externos.</p>

<h2>3. Finalidades del Tratamiento</h2>
<ul>
    <li>Responder consultas técnicas o comerciales enviadas por el usuario.</li>
    <li>Elaborar propuestas y cotizaciones de sitios web para micro y pequeñas empresas.</li>
    <li>Enviar novedades sobre lanzamientos de aplicaciones o guías gratuitas únicamente cuando el usuario lo solicite de forma expresa.</li>
</ul>

<h2>4. Derechos ARCO y Contacto</h2>
<p>Usted puede ejercer sus derechos de Acceso, Rectificación, Cancelación u Oposición (ARCO), así como revocar su consentimiento, enviando una solicitud al correo oficial: <a href="mailto:contacto@solutions-factory-studio.app">contacto@solutions-factory-studio.app</a>.</p>

<h2>5. Cambios al Aviso de Privacidad</h2>
<p><strong>Solutions Factory Studio S.A.S.</strong> podrá actualizar este Aviso de Privacidad en cualquier momento. La versión vigente estará siempre disponible en esta URL.</p>
HTML;

    return view('legal', compact('title', 'subtitle', 'content'));
})->name('legal.privacy-general');

Route::get('/privacidad-calculadora', function () {
    $portfolio = Portfolio::where('title', 'like', '%Matricial%')->first()
        ?? Portfolio::orderBy('order', 'asc')->first();
    abort_if(!$portfolio || !$portfolio->privacy_policy, 404);

    $title = 'Política de Privacidad - ' . $portfolio->title;
    $content = $portfolio->privacy_policy;
    return view('legal', compact('title', 'content', 'portfolio'));
})->name('legal.privacy-calculator');

Route::get('/terminos-calculadora', function () {
    $portfolio = Portfolio::where('title', 'like', '%Matricial%')->first()
        ?? Portfolio::orderBy('order', 'asc')->first();
    abort_if(!$portfolio || !$portfolio->terms_and_conditions, 404);

    $title = 'Términos y Condiciones - ' . $portfolio->title;
    $content = $portfolio->terms_and_conditions;
    return view('legal', compact('title', 'content', 'portfolio'));
})->name('legal.terms-calculator');

Route::get('/privacidad-simulador', function () {
    $portfolio = Portfolio::where('title', 'like', '%Teoría de Juegos%')->first()
        ?? Portfolio::orderBy('order', 'asc')->skip(1)->first();
    abort_if(!$portfolio || !$portfolio->privacy_policy, 404);

    $title = 'Política de Privacidad - ' . $portfolio->title;
    $content = $portfolio->privacy_policy;
    return view('legal', compact('title', 'content', 'portfolio'));
})->name('legal.privacy-simulator');

Route::get('/terminos-simulador', function () {
    $portfolio = Portfolio::where('title', 'like', '%Teoría de Juegos%')->first()
        ?? Portfolio::orderBy('order', 'asc')->skip(1)->first();
    abort_if(!$portfolio || !$portfolio->terms_and_conditions, 404);

    $title = 'Términos y Condiciones - ' . $portfolio->title;
    $content = $portfolio->terms_and_conditions;
    return view('legal', compact('title', 'content', 'portfolio'));
})->name('legal.terms-simulator');

Route::get('/portfolio/{portfolio}/privacy', function (Portfolio $portfolio) {
    if (!$portfolio->is_active || !$portfolio->privacy_policy) abort(404);
    $title = 'Política de Privacidad - ' . $portfolio->title;
    $content = $portfolio->privacy_policy;
    return view('legal', compact('title', 'content', 'portfolio'));
})->name('portfolio.privacy');

Route::get('/portfolio/{portfolio}/terms', function (Portfolio $portfolio) {
    if (!$portfolio->is_active || !$portfolio->terms_and_conditions) abort(404);
    $title = 'Términos y Condiciones - ' . $portfolio->title;
    $content = $portfolio->terms_and_conditions;
    return view('legal', compact('title', 'content', 'portfolio'));
})->name('portfolio.terms');
