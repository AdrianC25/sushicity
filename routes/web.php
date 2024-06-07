<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nuestras-ofertas', function () {
    return view('oferta');
});

Route::get('/contacto', function () {
    return view('contacto');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
