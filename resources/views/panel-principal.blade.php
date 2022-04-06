@extends('welcome')

@section('content')
<nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Menú</a></li>
        <li class="breadcrumb-item"><a href="#">Servicios escolares</a></li>
        <li class="breadcrumb-item active" aria-current="page">Proyecciones</li>
    </ol>
</nav>
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
                    <a class="btn btn-primary" href="#">Panel principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary mb-2" href="{{ route('ControlFichas.index') }}">Control de Fichas</a>
<a class="btn btn-primary mb-2" href="{{ route('Prospectos.index') }}">Prospectos</a>
<a class="btn btn-primary mb-2" href="{{ route('Agenda.index') }}">Agenda</a>
@endsection
