@extends('welcome')

@section('content')


@php
$navs = [
    [
        "link" => "/",
        "name" => "Menú"
    ],
    [
        "link" => "PanelDireccionCarrera.index",
        "name" => "Dirección de Carrera"
    ],
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<h3 class="text-center my-2 mb-4">Panel principal</h3>

<div class="row">
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/3.jpg" alt="Card image cap" /></div>
            <div class="card-img-overlay d-flex align-items-center dropdown">
                <div class="text-center" style="width: 100%">
                    <p class="btn btn-falcon-primary me-1 mb-1 dropdown-toggle" id="ConsultaGrupsDropdown" type="button" 
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consulta Grupos</p>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="ConsultaGrupsDropdown">
                        <a class="dropdown-item" href="{{ route('ConsultaGruposCI.index') }}">Curso de Inducción</a>
                        <a class="dropdown-item" href="{{ route('ConsultaGruposBA.index') }}">Bachillerato Avanzado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card overflow-hidden" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/7.jpg" alt="Card image cap" /></div>
            <div class="card-img-overlay d-flex align-items-center dropdown">
                <div class="text-center" style="width: 100%">
                    <p class="btn btn-falcon-primary me-1 mb-1 dropdown-toggle" id="AsignaProfesoresDropdown" type="button" 
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asigna Profesores</p>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="AsignaProfesoresDropdown">
                        <a class="dropdown-item" href="{{ route('AsignaProfesoresCI.index') }}">Curso de Inducción</a>
                        <a class="dropdown-item" href="{{ route('AsignaProfesoresBA.index') }}">Bachillerato Avanzado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection