<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Models\AiAgent;
use App\Http\Controllers\AiAgentChatController;

Route::get('/', function () {
    $portfolios = Portfolio::where('is_active', true)->orderBy('order', 'asc')->get();
    $agents = AiAgent::where('is_active', true)->get();
    
    return view('landing', compact('portfolios', 'agents'));
});

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::post('/agents/{agent}/chat', [AiAgentChatController::class, 'chat'])->name('agents.chat');

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
