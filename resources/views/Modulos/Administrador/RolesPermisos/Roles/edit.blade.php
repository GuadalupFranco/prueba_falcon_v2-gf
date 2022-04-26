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
                <h5 class="mb-0">Modificar Rol</h5>
            </div>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b"
                id="dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b">
                <form action="{{ route('administrador-roles.update', $role->id) }}" method="POST" enctype="multipart/form-data" id="form-modificarRol">
                    @csrf
                    @method('PUT')
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nombre del rol</label>
                            <input class="form-control" type="text" name="name" placeholder="Nombre" value="{{ old('name', $role->name) }}"/>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <h2 class="h5">Seleccionar un rol</h2>
                                    <hr>
                                    @foreach ($permisos as $permiso)
                                    <div class="form-check">
                                        <input
                                        {{($role->hasPermissionTo($permiso->id)) ? "checked" : ""}}
                                        class="form-check-input" id="flexRadioDefault2" type="checkbox"
                                            value="{{ $permiso->id }}" name="permissions[]"/>
                                        <label class="form-check-label mb-0"
                                            for="flexRadioDefault2">{{$permiso->description}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-falcon-default" href="{{ route('administrador-roles.index') }}">Regresar</a>
                        <a class="btn btn-outline-success" onclick="modificarRol()">Guardar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('Modulos.Administrador.RolesPermisos.Roles.js.index')
@endsection
