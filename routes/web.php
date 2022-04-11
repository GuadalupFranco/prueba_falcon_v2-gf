<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosEscolares\{ControlFichas\ControlFichasController, Prospectos\Prospectos, Agenda\AgendaController, PanelPrincipal\PanelPrincipalController, GruposInduccion\GruposInduccionController};
use App\Http\Controllers\Vinculacion\{PanelPrincipal\PanelVinculacionController, AgendaPromocional\AgendaPromocionalController, VisitaGuiada\VisitaGuiadaController, Preregistro\PreregistroController};

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('panel-principal');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Rutas de Servicios escolares */
Route::resource('ControlFichas', ControlFichasController::class)->middleware('auth');
Route::resource('Prospectos', Prospectos::class)->middleware('auth');
Route::resource('Agenda', AgendaController::class)->middleware('auth');
Route::resource('PanelPrincipal', PanelPrincipalController::class)->middleware('auth');
Route::resource('GruposInduccion', GruposInduccionController::class)->middleware('auth');

/* Rutas de Secretaria académica */

/* Rutas de Orientación educativa */

/* Rutas de Vinculación */
Route::resource('PanelVinculacion', PanelVinculacionController::class)->middleware('auth');
Route::resource('AgendaPromocional', AgendaPromocionalController::class)->middleware('auth');
Route::resource('VisitaGuiada', VisitaGuiadaController::class)->middleware('auth');
Route::resource('Preregistro', PreregistroController::class)->middleware('auth');
