@extends('welcome')

@php
$institucionProcedencia = 'Informacion previamente introducida';
@endphp

@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Titulo</h2>
        <form action="" class="needs-validation" novalidate>
            @csrf
            @foreach ($preguntas as $pregunta)
                @if ($loop->odd) <div class="row"> @endif
                <div class="contaier my-2  col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $pregunta[0] }} </h5>
                            @if ($pregunta[1] != 'select')
                                <input class="form-control" type="{{ $pregunta[1] }}">
                            @else
                                <select class="form-select" id="" name="">
                                    @foreach ($pregunta[2] as $opcion)
                                        <option value="{{ $opcion[0] }}">{{ $opcion[1] }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
                @if ($loop->even) </div> @endif
            @endforeach
            <div class="container d-flex mt-4 mb-6">
                <button class="mx-auto btn btn-success">
                    Enviar Formulario
                </button>
            </div>
        </form>
    </div>
@endsection
