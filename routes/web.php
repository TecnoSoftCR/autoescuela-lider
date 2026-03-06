<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/reservar', function () {
    return view('reservar');
})->name('reservar');

Route::post('/reservar', function () {
    
})->name('reservar.store');
