<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/ideas', [IdeaController::class, 'store'])->name('idea.create');

Route::get('/ideas/{id}', [IdeaController::class, 'show'])->name('idea.show');
Route::get('/ideas/{id}/edit', [IdeaController::class, 'edit'])->name('idea.edit');
Route::put('/ideas/{id}', [IdeaController::class, 'update'])->name('idea.update');
Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('idea.destroy');

Route::get('/terms', function() {
    return view('terms');
});
