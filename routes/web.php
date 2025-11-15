<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('iot')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('iot.dashboard');
    Route::get('/charts', [PagesController::class, 'charts'])->name('iot.statistik');
    Route::get('/tables', [PagesController::class, 'tables'])->name('iot.history-sensor');
    Route::get('/aktivitas', [PagesController::class, 'aktivitas'])->name('iot.history-aktivitas');
    Route::get('/relay', [PagesController::class, 'relay'])->name('iot.relay');
});

