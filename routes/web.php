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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('panel-principal');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');







/*
|-------------------------------------------------------------------
|    Rutas de Super usuario  
|-------------------------------------------------------------------
|   A partir de aquí se escribirán todas las rutas a las que puede acceder el super usuario
|
*/ 

Route::view('/vista-panel-principal-superusuario', 'modulos/super-usuario/vista-panel-principal-superusuario')->name('panel-principal-superusuario');

    /*
    |-------------------------------------------------------------------
    |    Rutas de módulo "Administración de periodos"
    |-------------------------------------------------------------------
    |   A partir de aquí se escribirán todas las rutas relacionadas con la administración de periodos, tareas y convocatorias
    |
    */ 

    Route::view('/administracion-periodos', 'modulos/super-usuario/administracion-periodos/vista-general-administracion-periodos')->name('vista-general-periodos');
    