<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Resource routes
Route::resource('espacios', EspacioController::class)->except(['show']);
Route::resource('reservas', ReservaController::class)->except(['show']);
