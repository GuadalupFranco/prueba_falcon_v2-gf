<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosEscolares\{ControlFichas\ControlFichasController, Prospectos\Prospectos, Agenda\AgendaController, PanelPrincipal\PanelPrincipalController};
use App\Http\Controllers\AlumnoProspecto\{Encuestas\EncuestasController, CargaDocumentos\CargaDocumentosController, ContinuarRegistro\ContinuarRegistroController};

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


Route::resource('ContinuarRegistro', ContinuarRegistroController::class)->middleware('auth');
Route::resource('CargaDocumentos', CargaDocumentosController::class)->middleware('auth');
Route::resource('Encuestas', EncuestasController::class)->middleware('auth');

