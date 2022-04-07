<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/direccion_carrera/', function () {
    return view('modulos.direccion_carrera.panel');
})->name('direccion_carrera.panel');

Route::get('/direccion_carrera/asigna_profesores/curso-induccion', function () {
    return view('modulos.direccion_carrera.asigna_profesores.curso-induccion');
})->name('asigna_profesores.curso-induccion');

Route::get('/direccion_carrera/consulta_grupos/curso-induccion', function () {
    return view('modulos.direccion_carrera.consulta_grupos.curso-induccion');
})->name('consulta_grupos.curso-induccion');

Route::get('/direccion_carrera/asigna_profesores/bachillerato-avanzado', function () {
    return view('modulos.direccion_carrera.asigna_profesores.bachillerato-avanzado');
})->name('asigna_profesores.bachillerato-avanzado');

Route::get('/direccion_carrera/consulta_grupos/bachillerato-avanzado', function () {
    return view('modulos.direccion_carrera.consulta_grupos.bachillerato-avanzado');
})->name('consulta_grupos.bachillerato-avanzado');



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