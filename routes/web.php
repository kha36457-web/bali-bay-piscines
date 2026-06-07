<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// ── Public Pages ──
Route::get('/', [PageController::class, 'index']);
Route::get('/services', [PageController::class, 'services'])->name('services');

// ── Contact Form ──
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// ── Admin Auth ──
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// ── Admin Panel (protected) ──
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    // Messages
    Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
    Route::patch('/messages/{contact}', [ContactController::class, 'update'])->name('messages.update');
    Route::delete('/messages/{contact}', [ContactController::class, 'destroy'])->name('messages.destroy');
});
