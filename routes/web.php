<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('index');

Route::get('/reservar', [ReservaController::class, 'create'])->name('reserva.create');
Route::post('/reservar', [ReservaController::class, 'store'])->name('reserva.post');