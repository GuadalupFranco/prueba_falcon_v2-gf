<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosEscolares\{ControlFichas\ControlFichasController, Prospectos\Prospectos, Agenda\AgendaController, PanelPrincipal\PanelPrincipalController, GruposInduccion\GruposInduccionController};

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





// Rutas Branch javier-camacho
Route::get('/FormatoSolicitud1', function () {
    return view('Modulos.AlumnoProspecto.FormatoSolicitud1.index');
});

Route::get('/PanelProspecto', function () {
    return view('Modulos.AlumnoProspecto.PanelProspecto.index');
});

Route::get('/AccesoProspecto', function () {
    return view('Modulos.AlumnoProspecto.AccesoProspecto.index');
});

Route::get('/InicioAlumno', function () {
    return view('Modulos.AlumnoProspecto.InicioAlumno.index');
});

Route::get('/ValidarDocumentos', function () {
    return view('Modulos.ServiciosEscolares.ValidarDocumentos.index');
});

// fin rutas javier-camacho