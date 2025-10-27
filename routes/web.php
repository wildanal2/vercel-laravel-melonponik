<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/charts', function () {
    return view('welcome'); // Sementara menampilkan halaman welcome
});

Route::get('/tables', function () {
    return view('welcome'); // Sementara menampilkan halaman welcome
});
