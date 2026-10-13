<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaMundoController;

Route::get('/', [HolaMundoController::class, 'index']);

Route::get('/usuarios/registro', function () {
	return view('usuarios.registro');
})->name('usuarios.registro');

Route::get('/usuarios', function () {
    return view('usuarios.index');
})->name('usuarios.index');

Route::get('/usuarios/perfil', function () {
	return view('usuarios.perfil');
})->name('usuarios.perfil');
