<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Livewire\Pages;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', Pages\Dashboard::class)->name('dashboard');

    Route::prefix('profile')
        ->name('profile.')
        ->group(function () {
            Route::get('/', Pages\Profile\Show::class)->name('show');
        });

    Route::prefix('dish')
        ->name('dish.')
        ->group(function () {
            Route::get('/', Pages\Dish\Index::class)->name('index');
        });

    Route::prefix('last')
        ->name('last.')
        ->group(function () {
            Route::get('/', Pages\Last\Index::class)->name('index');
        });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.submit');
});
