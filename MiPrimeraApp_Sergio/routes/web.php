<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\CalculadoraIMCController;
use App\Http\Controllers\SorteoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;


Route::get('/hola', [HolaController::class, 'index'])->name("hola");

Route::get('/hola/{nombre}', [HolaController::class, 'show'])->name("holaConNombre");

Route::get('/suma/{n1}/{n2}', [CalculadoraController::class, 'suma'])->name("actividad5.1");

Route::get('/suma/{n1?}/{n2?}', [CalculadoraController::class, 'suma'])->name("actividad5.2");

Route::get('/sorteo/numero/{numero?}', [SorteoController::class, 'numero'])->name("actividad5.3");

Route::get('/calcularimc/{peso}/{altura}', [CalculadoraIMCController::class, 'calcularImc'])->name("imc");

 




