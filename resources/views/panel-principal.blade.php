@extends('welcome')

@section('content')
<nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Menú</a></li>
        <li class="breadcrumb-item"><a href="#">Servicios escolares</a></li>
        <li class="breadcrumb-item active" aria-current="page">Proyecciones</li>
    </ol>
</nav>
<a class="btn btn-primary mb-2" href="{{ route('ControlFichas.index') }}">Control de Fichas</a>
<a class="btn btn-primary mb-2" href="{{ route('Prospectos.index') }}">Prospectos</a>
@endsection
