<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});


//---------------------------rutas CRUD

Route::resource('/grupos', 'App\Http\Controllers\GrupoController');

Route::resource('/aulas', 'App\Http\Controllers\AulaController');

//4.- crear la ruta  para todo el CRUD  de esa tabla (index)
Route::resource('/materias', 'App\Http\Controllers\MateriaController');

Route::resource('/personas', 'App\Http\Controllers\PersonaController');

Route::resource('/tutores', 'App\Http\Controllers\TutorController');












//RUTAS DE LOGIUN Y USUARIOIS

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});