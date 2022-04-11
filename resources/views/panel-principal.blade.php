@extends('welcome')

@section('content')

{{-- Array para el breadcrumb --}}
@php
$navs = [
    [
        "link" => "/",
        "name" => "Menu"
    ]
    ]
@endphp

<x-breadcrumb-head :navs="$navs"/>

<div class="row">
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/3.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <h5 class="card-title text-white">Servicios escolares</h5>
                    <a class="btn btn-primary" href="{{ route('PanelPrincipal.index') }}">Panel principal</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/3.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <h5 class="card-title text-white">Secretaria académica</h5>
                    <a class="btn btn-primary" href="#">Panel principal</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/3.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <h5 class="card-title text-white">Orientación educativa</h5>
                    <a class="btn btn-primary" href="#">Panel principal</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/3.jpg" alt="Card image" />
            </div>
            <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center" style="width: 100%">
                    <h5 class="card-title text-white">Vinculación</h5>
                    <a class="btn btn-primary" href="{{ route('PanelVinculacion.index') }}">Panel principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
