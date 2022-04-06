<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Profesor\ControladorProfesor;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('content');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::get('/panelProfesores', function () { 
    return view('Modulos.profesor.panel-profesor');
});

Route::get('/gruposProfesores', function () { 
    return view('Modulos.profesor.grupos-profesor');
});

Route::get('/capturaCalificaciones', function () { 
    return view('Modulos.profesor.captura-calificacion');
});

Route::get('/gruposProfesoresBA', function () { 
    return view('Modulos.profesor.grupos-profesorBA');
});

Route::get('/capturaCalificacionesBA', function () { 
    return view('Modulos.profesor.captura-calificacionBA');
});



