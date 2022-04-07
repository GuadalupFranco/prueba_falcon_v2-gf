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
        "link" => "PanelPrincipal.index",
        "name" => "Servicios escolares"
    ],
    [
        "link" => "Prospectos.index",
        "name" => "Prospectos",
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
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('ControlFichas.index') }}">Control de Fichas</a>
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
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('Prospectos.index') }}">Prospectos</a>
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
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('Agenda.index') }}">Agenda</a>
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
                    <a class="btn btn-falcon-primary me-1 mb-1" href="#">Proyecciones</a>
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
                    <a class="btn btn-falcon-primary me-1 mb-1" href="#">Control de grupos</a>
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
                    <a class="btn btn-falcon-primary me-1 mb-1" href="{{ route('GruposInduccion.index') }}">Grupos de inducción</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
