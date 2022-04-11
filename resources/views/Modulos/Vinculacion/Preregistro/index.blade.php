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
"link" => "Preregistro.index",
"name" => "Preregistro",
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<h3 class="text-center my-2">Consulta Preregistro</h3>

<div class="p-4">
    <div class="row">
        <div class="col-lg-7">
            {{-- Inicio del Anverso --}}
            <div class="col-lg-12 mb-3">
                <h4 class="text-center">Anverso</h4>
            </div>
            <div class="card overflow-hidden">
                <div class="col-lg-12 py-3 ps-3">
                    <div class="row">
                        <div class="col-sm-3 my-auto">
                            <img class="img-fluid" src="/assets/img/generic/1.jpg" alt="Card image cap" />
                        </div>
                        <div class="row col-sm-9">
                            <div class="col-sm-12">
                                <h4>Aspirante nuevo ingreso</h4>
                            </div>
                            <div class="col-sm-5">
                                <p>Nombre(s)</p>
                            </div>
                            <div class="col-sm-7">
                                <p>Dimas Becerra José Ignacio</p>
                            </div>
                            <div class="col-sm-5">
                                <p>Fecha de nacimiento</p>
                            </div>
                            <div class="col-sm-7">
                                <p>01/01/1999</p>
                            </div>
                            <div class="col-sm-5">
                                <p>Género</p>
                            </div>
                            <div class="col-sm-7">
                                <p>Masculino</p>
                            </div>
                            <div class="col-sm-5">
                                <p>Nacionalidad</p>
                            </div>
                            <div class="col-sm-7">
                                <p>Mexicano</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <p><b>Folio de registro:</b> 120036445</p>
                        </div>
                        <div class="row col-sm-12">
                            <div class="col-sm-4 text-center">
                                <p>Emisión: 31/01/2022</p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <p>Carrera<br>Ingeniería en Sistemas Computacionales</p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <p>Vigencia: 31/03/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin del Anverso --}}

            {{-- Inicio del Reverso --}}
            <div class="col-lg-12 my-3">
                <h4 class="text-center">Reverso</h4>
            </div>
            <div class="card overflow-hidden">
                <div class="col-lg-12 py-3 ps-3">
                    <div class="row">
                        <div class="row col-sm-12">
                            <div class="col-sm-12">
                                <h4>DOMICILIO DEL ASPIRANTE</h4>
                            </div>
                            <div class="col-sm-3">
                                <p>Calle</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Tercera 18 de marzo</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Colonia</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Nuevo Carrillo</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Exterior</p>
                            </div>
                            <div class="col-sm-3">
                                <p>190</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Delegación</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Felipe Carrillo Puerto</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Interior</p>
                            </div>
                            <div class="col-sm-3">
                                <p>93-A</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Código Postal</p>
                            </div>
                            <div class="col-sm-3">
                                <p>76138</p>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <p><b>Folio de registro:</b> 120036445</p>
                        </div>
                        <div class="row col-sm-12">
                            <div class="col-sm-12 text-center">
                                <p>Carrera<br>Ingeniería en Sistemas Computacionales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin del Reverso --}}
        </div>
        <div class="row col-lg-5" style="height: -webkit-fill-available">
            <div class="col-lg-12 mb-5">
                <h4 class="text-center">Fecha: 31/01/2022</h4>
                <h4 class="text-center">Hora: 12:09:56</h4>
            </div>
            <div class="col-lg-12 text-center">
                <p class="text-center">Acciones rápidas</p>
            </div>
            <div class="col-lg-12 text-center mb-3">
                <button class="btn btn-danger" type="submit">Consultar nuevo folio</button>
            </div>
            <div class="col-lg-12 text-center mb-3">
                <button class="btn btn-danger" type="submit">Imprimir</button>
            </div>
            <div class="col-lg-12 text-center mb-3">
                <button class="btn btn-danger" type="submit">Guardar</button>
            </div>
            <div class="col-lg-12 text-center mb-3">
                <button class="btn btn-danger" type="submit">Regresar a preregistro</button>
            </div>
        </div>
    </div>
</div>
@endsection
