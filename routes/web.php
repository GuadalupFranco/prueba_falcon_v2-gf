<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosEscolares\{ControlFichas\ControlFichasController, Prospectos\Prospectos};

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('panel-principal');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('ControlFichas', ControlFichasController::class)->middleware('auth');
Route::resource('Prospectos', Prospectos::class)->middleware('auth');
