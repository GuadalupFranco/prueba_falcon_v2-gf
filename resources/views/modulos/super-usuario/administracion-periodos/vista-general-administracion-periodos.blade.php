
@extends('welcome')

@section('extra-styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

@endsection


@section('content')
<div class="container mx-0 my-0"> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('panel-principal-superusuario')}}">Panel de superusuarios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Administración de periodos</li>
  </ol>
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor" id="basic-example">Administración de periodos<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-example" style="padding-left: 0.375em;"></a></h5>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="periodos-tab" data-bs-toggle="tab" href="#tab-periodos" role="tab" aria-controls="tab-periodos" aria-selected="true">Periodos</a></li>
        <li class="nav-item"><a class="nav-link" id="tareas-tab" data-bs-toggle="tab" href="#tab-tareas" role="tab" aria-controls="tab-tareas" aria-selected="false">Tareas</a></li>
        <li class="nav-item"><a class="nav-link" id="convocatorias-tab" data-bs-toggle="tab" href="#tab-convocatorias" role="tab" aria-controls="tab-convocatorias" aria-selected="false">Convocatorias</a></li>
      </ul>
      <div class="tab-content border-x border-bottom p-3" id="myTabContent">
        <div class="tab-pane fade show active" id="tab-periodos" role="tabpanel" aria-labelledby="periodos-tab"> @include('modulos.super-usuario.administracion-periodos.period.tab-lista-periodos')</div>
        <div class="tab-pane fade" id="tab-tareas" role="tabpanel" aria-labelledby="tareas-tab"> @include('modulos.super-usuario.administracion-periodos.task.tab-lista-tareas') </div>
        <div class="tab-pane fade" id="tab-convocatorias" role="tabpanel" aria-labelledby="convocatorias-tab">@include('modulos.super-usuario.administracion-periodos.convocation.tab-lista-convocatorias')</div>
      </div>
    </div>
  </div>
</div>   
@endsection


@section('extra-scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection