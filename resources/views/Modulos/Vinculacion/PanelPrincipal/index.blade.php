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
"link" => "PanelVinculacionController.index",
"name" => "Vinculación"
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<h3 class="text-center my-2 mb-4">Panel principal</h3>
<div class="row">
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/1.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Calendario de actividades</h5>
                <a href="#" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/1-2.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Solicitud de transporte</h5>
                <a href="#" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/1-3.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Formulario de pre-registro</h5>
                <a href="{{ route('Preregistro.index') }}" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/1-4.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Agenda promocional</h5>
                <a href="{{ route('AgendaPromocional.index') }}" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/1-5.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Consultar prospecto</h5>
                <a href="#" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/1-6.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Asignación</h5>
                <a href="#" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/2.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Formulario de vistas guiadas</h5>
                <a href="{{ route('VisitaGuiada.index') }}" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card overflow-hidden">
            <div class="card-img-top">
                <img class="img-fluid" src="/assets/img/products/3.jpg" alt="Card image cap" />
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Formulario de visitas para preparatoria</h5>
                <a href="#" class="btn btn-outline-info">Ver</a>
            </div>
        </div>
    </div>
</div>
@endsection
