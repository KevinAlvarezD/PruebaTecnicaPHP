<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GastoController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    // Ruta para el dashboard, solo accesible por usuarios autenticados
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Ruta para gestionar los gastos, usando el controlador GastoController
    Route::resource('gastos', GastoController::class);
});

