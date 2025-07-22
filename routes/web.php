<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('about');
});

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::fallback(function () {
    return view('errors.404');
});
