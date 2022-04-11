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
"link" => "AgendaPromocional.index",
"name" => "Agenda promocional",
]
]
@endphp

<x-breadcrumb-head :navs="$navs" />

<h3 class="text-center my-2">Agenda promocional</h3>

<div class="row">
    <div class="card mt-5 mb-3">
        <div class="card-header">
            <div class="col-12 float-right">
                <button class="btn btn-info float-end" type="button" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <span class="fas fa-file fs-2 me-2"></span>Nuevo
                </button>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-c33e079e-6e1a-483b-8755-69c47bcdf1e1"
                id="dom-c33e079e-6e1a-483b-8755-69c47bcdf1e1">
                <div id="tableExample2"
                    data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                    <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort">No.</th>
                                    <th class="sort">Encargado</th>
                                    <th class="sort">Nombre del evento promocional</th>
                                    <th class="sort">Lugar de promoción</th>
                                    <th class="sort">Fecha inicio</th>
                                    <th class="sort">Fecha fin</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="name">1</td>
                                    <td class="name">José Ignacio Dimas Becerra</td>
                                    <td class="name">Ida promocional COBAQ</td>
                                    <td class="name">COBAQ 1</td>
                                    <td class="name">07/01/2022</td>
                                    <td class="name">08/01/2022</td>
                                </tr>
                                <tr>
                                    <td class="name">2</td>
                                    <td class="name">Cristofer Jair Quillo Martínez</td>
                                    <td class="name">Juunta reparto de información CONALEP</td>
                                    <td class="name">CONALEP Ruíz Obregón</td>
                                    <td class="name">23/02/2022</td>
                                    <td class="name">24/02/2022</td>
                                </tr>
                                <tr>
                                    <td class="name">3</td>
                                    <td class="name">Daniel Martínez Suárez</td>
                                    <td class="name">Invitación a la UPQ - CECYTEQ</td>
                                    <td class="name">CECYTEQ 1</td>
                                    <td class="name">19/03/2022</td>
                                    <td class="name">20/03/2022</td>
                                </tr>
                                <tr>
                                    <td class="name">4</td>
                                    <td class="name">Adriel Conde Martínez</td>
                                    <td class="name">Dinámica Cardenal Prepa Norte</td>
                                    <td class="name">Prepa Norte</td>
                                    <td class="name">04/08/2022</td>
                                    <td class="name">05/08/2022</td>
                                </tr>
                                <tr>
                                    <td class="name">5</td>
                                    <td class="name">Ismael Jímenez Ruíz</td>
                                    <td class="name">Invitación Tour Cardenal - CBTis</td>
                                    <td class="name">CBTis 217</td>
                                    <td class="name">13/05/2022</td>
                                    <td class="name">14/05/2022</td>
                                </tr>
                                <tr>
                                    <td class="name">5</td>
                                    <td class="name">Lucía de Fátima</td>
                                    <td class="name">Carreras UPQ - CONALEP Aeronáutica</td>
                                    <td class="name">CONALEP Aeronáutica</td>
                                    <td class="name">09/10/2022</td>
                                    <td class="name">09/10/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3"><button
                            class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous"
                            data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left fa-w-10"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                </path>
                            </svg>
                            <!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                        <ul class="pagination mb-0">
                            <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button>
                            </li>
                            <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                            <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                        </ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                            data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right fa-w-10"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                </path>
                            </svg>
                            <!-- <span class="fas fa-chevron-right"> </span> Font Awesome fontawesome.com --></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">
                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="staticBackdropLabel">Agregar evento</h4>
                </div>
                <div class="p-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="inputEmail4">Fecha de inicio</label>
                                    <input class="form-control" id="inputEmail4" type="date"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputEmail4">Fecha de fin</label>
                                    <input class="form-control" id="inputEmail4" type="date"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputEmail4">Lugar de promoción</label>
                                    <input class="form-control" id="inputEmail4" type="text"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputEmail4">Medio promocional</label>
                                    <input class="form-control" id="inputEmail4" type="text"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputState">Encargado del evento</label>
                                    <select class="form-select" id="inputState">
                                        <option selected="selected">Seleccionar...</option>
                                        <option>José Ignacio Dimas Becerra</option>
                                        <option>Cristofer Jair Quillo Martínez</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputState">Personal del evento</label>
                                    <select class="form-select" id="inputState">
                                        <option selected="selected">Seleccionar...</option>
                                        <option>José Ignacio Dimas Becerra</option>
                                        <option>Cristofer Jair Quillo Martínez</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="basic-form-textarea">Description</label>
                                    <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-success rounded-pill float-end" type="submit">Generar evento</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
