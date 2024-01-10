<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\FoundationAuthController;
use App\Http\Controllers\Foundation\FoundationDashboardController;

Route::prefix('foundation')->as('foundation.')->group(function () {
    Route::get('login', [FoundationAuthController::class, 'login'])->name('login');
    Route::post('login', [FoundationAuthController::class, 'save_login'])->name('save_login');

    Route::get('register', [FoundationAuthController::class, 'register'])->name('register');
    Route::post('register', [FoundationAuthController::class, 'save_register'])->name('save_register');

    Route::get('contact', [FoundationAuthController::class, 'contact'])->name('contact');

    Route::middleware('foundation.auth')->group(function () {
        Route::get('dashboard', [FoundationDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('contact', [FoundationDashboardController::class, 'contact'])->name('contact');
        Route::get('logout', [FoundationDashboardController::class, 'logout'])->name('logout');
    });
});
