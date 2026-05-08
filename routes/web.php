<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware('auth')->group(function (): void {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('settings/profile', [ProfileController::class, 'edit'])->name('settings.profile.edit');
    Route::put('settings/profile', [ProfileController::class, 'update'])->name('settings.profile.update');
    Route::put('settings/password', [ProfileController::class, 'updatePassword'])->name('settings.password.update');
});

require __DIR__.'/auth.php';
