<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosEscolares\{ControlFichas\ControlFichasController, Prospectos\Prospectos, Agenda\AgendaController, PanelPrincipal\PanelPrincipalController, GruposInduccion\GruposInduccionController};
use App\Http\Controllers\DireccionCarrera\{ConsultaGruposCI\ConsultaGruposCIController, ConsultaGruposBA\ConsultaGruposBAController, 
    AsignaProfesoresCI\AsignaProfesoresCIController, AsignaProfesoresBA\AsignaProfesoresBAController, PanelPrincipal\PanelController};
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
    return view('panel-principal');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('ControlFichas', ControlFichasController::class)->middleware('auth');
Route::resource('Prospectos', Prospectos::class)->middleware('auth');
Route::resource('Agenda', AgendaController::class)->middleware('auth');
Route::resource('PanelPrincipal', PanelPrincipalController::class)->middleware('auth');
Route::resource('GruposInduccion', GruposInduccionController::class)->middleware('auth');

/* RUTAS DE DIRECCIÓN DE CARRERA */
Route::resource('DCPanelPrincipal', PanelController::class)->middleware('auth');
Route::resource('ConsultaGruposCI', ConsultaGruposCIController::class)->middleware('auth');
Route::resource('ConsultaGruposBA', ConsultaGruposBAController::class)->middleware('auth');
Route::resource('AsignaProfesoresCI', AsignaProfesoresCIController::class)->middleware('auth');
Route::resource('AsignaProfesoresBA', AsignaProfesoresBAController::class)->middleware('auth');