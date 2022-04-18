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

// Rutas Branch isay-guerra

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

// Fin rutas isay-guerra

// Rutas Branch guadalupe-franco

/* RUTAS DE DIRECCIÓN DE CARRERA */
Route::resource('DCPanelPrincipal', PanelController::class)->middleware('auth');
Route::resource('ConsultaGruposCI', ConsultaGruposCIController::class)->middleware('auth');
Route::resource('ConsultaGruposBA', ConsultaGruposBAController::class)->middleware('auth');
Route::resource('AsignaProfesoresCI', AsignaProfesoresCIController::class)->middleware('auth');
Route::resource('AsignaProfesoresBA', AsignaProfesoresBAController::class)->middleware('auth');

// Fin rutas guadalupe-franco

// Rutas Branch gerson-perez
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
// Fin rutas gerson-perez

// Rutas Branch antonio-pechir
Route::get('/prueba', function () {
    // return view('Modulos.OE.AsignarMaterias', ['status' => "Completado", "nombre" => "Ingeniería en Sistemas Computacionales"]);
    // return view('Modulos.OE.CapturaPsicometrix');
    return view('Modulos.OE.ConsultaProgramacionCI');
});
// Fin rutas antonio-pechir