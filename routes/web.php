<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/charts', [PagesController::class, 'charts'])->name('pages.statistik');
Route::get('/tables', [PagesController::class, 'tables'])->name('pages.history-sensor');
Route::get('/aktivitas', [PagesController::class, 'aktivitas'])->name('pages.history-aktivitas');
Route::get('/relay', [PagesController::class, 'relay'])->name('pages.relay');

