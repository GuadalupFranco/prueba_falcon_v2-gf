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
"link" => "administrador-usuarios.index",
"name" => "Usuarios",
],
[
"link" => "#",
"name" => "Crear usuario",
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0">Crear rol</h5>
            </div>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b"
                id="dom-223cfc4a-eef3-4cc8-9803-fe0bb8c3898b">
                <form action="{{ route('administrador-usuarios.store') }}" method="POST" enctype="multipart/form-data" id="form-guardarUsuario">
                    @csrf
                    <div class="p-4 pb-0 row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-form-name">Nombre</label>
                            <input class="form-control" type="text" name="name" placeholder="Nombre" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-form-name">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="email@upq.edu.mx" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-form-name">Contraseña</label>
                            <input class="form-control" type="password" name="password" placeholder="" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-form-name">Repetir contraseña</label>
                            <input class="form-control" type="password" name="password_confirmation" placeholder=""/>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <h2 class="h5">Seleccionar roles</h2>
                                    <hr>
                                    @foreach ($roles as $role)
                                    <div class="form-check">
                                        <input class="form-check-input" id="flexRadioDefault2" type="checkbox"
                                            value="{{ $role->id }}" name="roles[]"/>
                                        <label class="form-check-label mb-0"
                                            for="flexRadioDefault2">{{$role->name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-falcon-default" href="{{ route('administrador-usuarios.index') }}">Regresar</a>
                        <a class="btn btn-outline-success" onclick="guardarUsuario()">Guardar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('Modulos.Administrador.Usuarios.UsuariosGenerales.js.index')
@endsection
