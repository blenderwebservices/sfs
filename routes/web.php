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
