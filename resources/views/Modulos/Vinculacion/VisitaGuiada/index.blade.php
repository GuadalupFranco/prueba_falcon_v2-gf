@extends('welcome')

@section('content')

@php
$navs = [
[
"link" => "/",
"name" => "Menu"
],
[
"link" => "PanelVinculacion.index",
"name" => "Vinculación"
],
[
"link" => "VisitaGuiada.index",
"name" => "Visita guiada",
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<h3 class="text-center my-2">Formulario de visitas guiadas</h3>

<div class="p-4">
    <div class="row">
        <form class="row g-3">
            <div class="col-lg-6">
                <div class="col-lg-6 mb-3">
                    <h4 class="">Datos del solicitante</h4>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Nombre</label>
                    <input class="form-control" id="inputEmail4" type="text" />
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Apellido paterno</label>
                    <input class="form-control" id="inputEmail4" type="text" />
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Apellido materno</label>
                    <input class="form-control" id="inputEmail4" type="text" />
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Teléfono</label>
                    <input class="form-control" id="inputEmail4" type="number"/>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Escuela de procedencia</label>
                    <input class="form-control" id="inputEmail4" type="text" />
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Adjuntar archivo</label>
                    <input class="form-control" id="inputEmail4" type="file" />
                </div>
                {{-- Botones --}}
                <div class="col-12">
                    <button class="btn btn-outline-danger rounded-pill float-end" type="submit">Guardar datos</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 mb-3">
                    <h4 class="">Personas agregadas: 0</h4>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Correo electrónico</label>
                    <input class="form-control" id="inputEmail4" type="text" />
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputState">Carrera de interés</label>
                    <select class="form-select" id="inputState">
                        <option selected="selected">Seleccionar...</option>
                        <option>Ingeniería en Sistemas Computacionales (ISC)</option>
                        <option>Ingeniería en Manufactura</option>
                        <option>Negocios Internacionales</option>
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="inputEmail4">Fecha de la visita</label>
                    <input class="form-control" id="inputEmail4" type="date" />
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-outline-danger rounded-pill float-end" type="submit">Enviar</button>
                <button class="btn btn-outline-danger rounded-pill float-end me-2" type="submit">Regresar</button>
            </div>
        </form>
    </div>
</div>
@endsection
