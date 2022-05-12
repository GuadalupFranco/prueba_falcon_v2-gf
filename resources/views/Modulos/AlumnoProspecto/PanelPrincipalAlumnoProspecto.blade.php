@extends('welcome')

@section('content')

{{-- Array para el breadcrumb --}}
@php
$navs = [
    [
        "link" => "/",
        "name" => "Menu"
    ],
    [
        "link" => "PanelPrincipalAlumnoProspecto.index",
        "name" => "AlumnoProspecto"
    ]
    ]
@endphp

<x-breadcrumb-head :navs="$navs"/>

<h3 class="text-center my-2 mb-4">Panel principal</h3>
<div class="row">
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/1.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('InicioAlumno.index') }}">InicioAlumno</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/2.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('PanelProspecto.index') }}">PanelProspecto</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/3.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('AccesoProspecto.index') }}">AccesoProspecto</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/4.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('FormatoSolicitud1.index') }}">Formato Solicitud 1</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/5.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="#">Formato Solicitud 2</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/6.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="">Subir Documentos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/7.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="">Encuesta Generica</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/8.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <a class="btn btn-falcon-primary me-1 mb-1" href="">Modal Portal Pago</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
