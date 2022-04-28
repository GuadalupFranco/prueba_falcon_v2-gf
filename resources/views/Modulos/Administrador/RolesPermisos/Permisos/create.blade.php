@extends('welcome')

@section('content')

@php
$navs = [
[
"link" => "/",
"name" => "Menu"
],
[
"link" => "/",
"name" => "Superusuario"
],
[
"link" => "administrador-roles.index",
"name" => "Roles y permisos",
],
[
"link" => "#",
"name" => "Crear rol",
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0">Crear Permiso</h5>
            </div>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b"
                id="dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b">
                <form action="{{ route('administrador-permisos.store') }}" method="POST" enctype="multipart/form-data" id="form-guardar">
                    @csrf
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nombre del permiso</label>
                            <input class="form-control" type="text" name="name" placeholder="Nombre" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Descripción del permiso</label>
                            <input class="form-control" type="text" name="description" placeholder="Descripción" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-falcon-default" href="{{ route('administrador-roles.index') }}">Regresar</a>
                        <a class="btn btn-outline-success" onclick="guardar()">Guardar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('Modulos.Administrador.RolesPermisos.Roles.js.index')
@endsection
