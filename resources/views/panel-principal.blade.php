@extends('welcome')

@php
$modulos_nuevo_ingreso = [
    'formato_solicitud_2' => 'Continuar Proceso - Formato de Solicitud 2',
    'encuesta_generica' => 'Encuesta generica (Encuesta de orientacion etc...)',
    'carga_documentos' => 'Carga de Documentos',
    'panel_servicios_escolares' => 'Panel Servicios Escolares',
    'cursos' => 'Cursos'
];
$modulos_alumno_prospecto = [
    'formato_solicitud_1' => 'Formato solicitud No. 1',
    'inicio_alumno_prospecto' => 'Inicio Alumno/Prospecto',
    'panel_prospecto' => 'Panel Prospecto',
    'acceso_prospecto' => 'Acceso Prospecto',    
];
$modulos_servicios_escolares = [
    'generar_horarios' => 'Generar Horarios',
    'validacion_documentos_fotos' => 'Validación documentos y fotos',
    'agenda' => 'Agenda',
];
$modulos_secretaria_academica = [
    'validar_horarios_grupos' => 'Validar Horarios y Grupos',
    'validar_agenda' => 'Validar Agenda',
    'validar_proyecciones' => 'Validar Proyecciones',
    'validar_transporte' => 'Validar transporte',
];
$modulos_direccion_carrera = [
    'consulta_grupos' => 'Consultar grupos - Curso introducción',
    'asignar_profesor' =>'Asignar profesores - Curso Introducción',
    'bachillerato_avanzado_consultar_grupos' =>'Consultar grupos - Bachillerato avanzado',
    'bachillerato_avanzado_asignar_profesores' =>'Asignar profesores - Bachillerato avanzado',
];
$modulos_orientacion_educativa = [
    'captura_psicometrix' => 'Caputra de Psicometrix',
    'asignar_materias_grupos' => 'Asignar Materias a Grupos',
    'consultar_programacion_grupos' => 'Consultar Programación de Grupos',
];
$modulos_profesor_curso = [
    'profesor_curso_consultar_grupos' => 'Consultar grupos',
    'profesor_curso_ci_capturar_calificaciones' => 'Capturar calificaciones | Cursos de Inducción',
    'profesor_curso_ba_capturar_calificaciones' => 'Capturar calificaciones | Bachillerato Avanzado',
];
@endphp

@section('content')
<div class="row">
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                    alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Nuevo ingreso</h5>
                <p>
                    <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseNuevoIngreso"
                        role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
                </p>
                <div class="collapse" id="collapseNuevoIngreso">
                    <div class="border p-card rounded">
                        <ul class="list-group list-group-flush">
                            @foreach ($modulos_nuevo_ingreso as $key => $value)
                                <li class="list-group-item">
                                    <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                            <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                    alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Alumno / prospecto</h5>
                <p>
                    <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseAlumnoProspecto"
                        role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
                </p>
                <div class="collapse" id="collapseAlumnoProspecto">
                    <div class="border p-card rounded">
                        <ul class="list-group list-group-flush">
                            @foreach ($modulos_alumno_prospecto as $key => $value)
                                <li class="list-group-item">
                                    <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                            <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                    alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Servicios escolares</h5>
                <p>
                    <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseServiciosEscolares"
                        role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
                </p>
                <div class="collapse" id="collapseServiciosEscolares">
                    <div class="border p-card rounded">
                        <ul class="list-group list-group-flush">
                            @foreach ($modulos_servicios_escolares as $key => $value)
                                <li class="list-group-item">
                                    <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                            <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                    alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Secretaria académica</h5>
                <p>
                    <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseSecretariaAcademica"
                        role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
                </p>
                <div class="collapse" id="collapseSecretariaAcademica">
                    <div class="border p-card rounded">
                        <ul class="list-group list-group-flush">
                            @foreach ($modulos_secretaria_academica as $key => $value)
                                <li class="list-group-item">
                                    <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                            <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                    alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Dirección de Carrera</h5>
                <p>
                    <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseDireccionCarrera"
                        role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
                </p>
                <div class="collapse" id="collapseDireccionCarrera">
                    <div class="border p-card rounded">
                        <ul class="list-group list-group-flush">
                            @foreach ($modulos_direccion_carrera as $key => $value)
                                <li class="list-group-item">
                                    <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                            <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                    alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Orientación educativa</h5>
                <p>
                    <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseOrientacionEducativa"
                        role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
                </p>
                <div class="collapse" id="collapseOrientacionEducativa">
                    <div class="border p-card rounded">
                        <ul class="list-group list-group-flush">
                            @foreach ($modulos_direccion_carrera as $key => $value)
                                <li class="list-group-item">
                                    <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                            <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                    alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Profesor curso</h5>
                <p>
                    <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseProfesorCurso"
                        role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
                </p>
                <div class="collapse" id="collapseProfesorCurso">
                    <div class="border p-card rounded">
                        <ul class="list-group list-group-flush">
                            @foreach ($modulos_profesor_curso as $key => $value)
                                <li class="list-group-item">
                                    <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                            <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
