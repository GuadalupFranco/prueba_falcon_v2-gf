<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosEscolares\{ControlFichas\ControlFichasController, Prospectos\Prospectos, Agenda\AgendaController, PanelPrincipal\PanelPrincipalController, GruposInduccion\GruposInduccionController, ValidarDocumentos\ValidarDocumentosController, GenerarHorarios\GenerarHorariosController};
use App\Http\Controllers\Vinculacion\{PanelPrincipal\PanelVinculacionController, AgendaPromocional\AgendaPromocionalController, VisitaGuiada\VisitaGuiadaController, Preregistro\PreregistroController};
use App\Http\Controllers\AlumnoProspecto\{InicioAlumno\InicioAlumnoController, FormatoSolicitud1\FormatoSolicitud1Controller, PanelProspecto\PanelProspectoController, AccesoProspecto\AccesoProspectoController};
use App\Http\Controllers\Administrador\{RolesPermisos, Usuarios};

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('panel-principal');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Rutas de Administrador */
Route::resource('administrador-roles', RolesPermisos\RoleController::class)->middleware('auth');
Route::resource('administrador-permisos', RolesPermisos\PermissionController::class)->except(['index', 'show']) -> middleware('auth');
Route::resource('administrador-usuarios', Usuarios\UsuariosController::class)->middleware('auth');

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

    /*Rutas AlumnoProspecto*/ 
        Route::resource('InicioAlumno', InicioAlumnoController::class)->middleware('auth');
        Route::resource('FormatoSolicitud1', FormatoSolicitud1Controller::class)->middleware('auth');
        Route::resource('PanelProspecto', PanelProspectoController::class)->middleware('auth');
        Route::resource('AccesoProspecto', AccesoProspectoController::class);
    /*Fin Rutas Servicios Escolares*/

    /*Rutas Servicios Escolares*/
        Route::resource('ValidarDocumentos', ValidarDocumentosController::class)->middleware('auth');
        Route::resource('GenerarHorarios', GenerarHorariosController::class)->middleware('auth');
    /*Fin Rutas Servicios Escolares*/
    
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
/* Route::resource('DCPanelPrincipal', PanelController::class)->middleware('auth');
Route::resource('ConsultaGruposCI', ConsultaGruposCIController::class)->middleware('auth');
Route::resource('ConsultaGruposBA', ConsultaGruposBAController::class)->middleware('auth');
Route::resource('AsignaProfesoresCI', AsignaProfesoresCIController::class)->middleware('auth');
Route::resource('AsignaProfesoresBA', AsignaProfesoresBAController::class)->middleware('auth'); */

// ! Recordar descomentar esto

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
