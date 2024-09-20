<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/ideas', [IdeaController::class, 'store'])->name('idea.create');

Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('idea.destroy');

Route::get('/terms', function() {
    return view('terms');
});
