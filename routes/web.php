<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Bosh sahifa
Route::get('/', [ProjectController::class, 'index'])->name('welcome');

// Admin panel (Loyiha qo'shish va boshqarish)
Route::get('/admin-panel', [ProjectController::class, 'admin'])->name('admin');
Route::post('/admin-panel/store', [ProjectController::class, 'store'])->name('projects.store');
Route::delete('/admin-panel/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');