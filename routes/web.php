<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CredencializacionController;
use App\Http\Controllers\SecCredencializacionController;
use App\Http\Controllers\SecBoletasController;



Route::get('/', function () {
    return view('auth.login');
});


//---------------------------rutas CRUD

Route::resource('/grupos', 'App\Http\Controllers\GrupoController')->names('grupos');

Route::resource('/aulas', 'App\Http\Controllers\AulaController')->names('aulas');

//4.- crear la ruta  para todo el CRUD  de esa tabla (5->views->index)
Route::resource('/materias', 'App\Http\Controllers\MateriaController')->names('materias');

Route::resource('/personas', 'App\Http\Controllers\PersonaController')->names('personas');

Route::resource('/tutores', 'App\Http\Controllers\TutorController')->names('tutores');

Route::resource('/trabajadores', 'App\Http\Controllers\TrabajadorController')->names('trabajadores');

Route::resource('/docentes', 'App\Http\Controllers\DocenteController')->names('docentes');

Route::resource('/alumnos', 'App\Http\Controllers\AlumnoController')->names('alumnos');

Route::resource('/reportes', 'App\Http\Controllers\ReporteController')->names('reportes');

Route::resource('/clases', 'App\Http\Controllers\ClaseController')->names('clases');

Route::resource('/calificaciones','App\Http\Controllers\CalificacionController')->names('calificaciones');


//rutas para EL MÓDULO secretaria
Route::resource('/inscripciones','App\Http\Controllers\InscripcionController')->names('inscripciones');

Route::resource('/credencializacion',SecCredencializacionController::class)->names('credencializacion');
Route::resource('/boletas',SecBoletasController::class)->names('boletas');


Route::get('/inscripcion', function () {
    return view('modSecretaria.inscripcionCreate');
});



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
