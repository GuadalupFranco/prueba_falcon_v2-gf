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
"name" => "Modificar permiso",
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0">Modificar Permiso</h5>
            </div>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b"
                id="dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b">
                <form action="{{ route('administrador-permisos.update', $permiso) }}" method="POST" enctype="multipart/form-data" id="form-modificar">
                    @csrf
                    @method('PUT')
                    <div class="py-0 p-4">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-form-name">Nombre del permiso</label>
                                <input class="form-control" type="text" name="name" placeholder="Nombre" value="{{ $permiso -> name }}"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-form-name">Descripción del permiso</label>
                                <input class="form-control" type="text" name="description" placeholder="Descripción" value="{{ $permiso -> description }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-falcon-default" href="{{ route('administrador-roles.index') }}">Regresar</a>
                        <a class="btn btn-outline-success" onclick="modificar()">Guardar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-scripts')
    @include('Modulos.Administrador.RolesPermisos.Roles.js.index')
@endsection