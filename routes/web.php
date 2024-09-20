<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create');

Route::get('/terms', function() {
    return view('terms');
});
