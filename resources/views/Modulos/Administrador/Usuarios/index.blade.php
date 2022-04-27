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
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<h3 class="text-center my-2">Usuarios</h3>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab"
            aria-controls="tab-home" aria-selected="true">
            Usuarios Generales
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab"
            aria-controls="tab-profile" aria-selected="false">
            Estudiantes
        </a>
    </li>
</ul>

<div class="tab-content border-x border-bottom p-3" id="myTabContent">
    {{-- Contenido de roles --}}
    <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
        @include('Modulos.Administrador.Usuarios.UsuariosGenerales.index')
    </div>

    {{-- Contenido de permisos --}}
    <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
        {{----}}
    </div>
</div>
@endsection