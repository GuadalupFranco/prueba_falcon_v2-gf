@extends('welcome')

@section('content')

<nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Menú</a></li>
        <li class="breadcrumb-item"><a href="#">Servicios escolares</a></li>
        <li class="breadcrumb-item active" aria-current="page">Control de fichas</li>
    </ol>
</nav>
<h3 class="text-center my-2">Control de fichas</h3>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab"
            aria-controls="tab-home" aria-selected="true">Control de fichas</a></li>
</ul>
<div class="tab-content border-x border-bottom p-3" id="myTabContent">
    <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0" data-anchor="data-anchor" id="pagination-with-numbering">Prospectos<a
                                class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#"
                                href="#pagination-with-numbering" style="padding-left: 0.375em;"></a></h5>
                    </div>
                </div>
                <!--<div class="col-12 ms-auto">
                        <button class="btn btn-info m-auto float-end" type="button">
                        <span class="fas fa-file text-white fs-2 me-2"></span>
                        Nuevo
                        </button>
                    </div>-->
            </div>
            <div class="card-body pt-0">
                <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel"
                        aria-labelledby="tab-dom-c33e079e-6e1a-483b-8755-69c47bcdf1e1"
                        id="dom-c33e079e-6e1a-483b-8755-69c47bcdf1e1">
                        <div id="tableExample2"
                            data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-striped fs--1 mb-0">
                                    <thead class="bg-200 text-900">
                                        <tr>
                                            <th class="sort" data-sort="name">Nombre del alumno</th>
                                            <th class="sort" data-sort="email">Acta de nacimiento</th>
                                            <th class="sort" data-sort="age">CURP</th>
                                            <th class="sort" data-sort="age">Identificación</th>
                                            <th class="sort" data-sort="age">Certificado</th>
                                            <th class="sort" data-sort="age">Comprobante de domicilio</th>
                                            <th data-sort="age">Proceso</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="name">Nombre del alumno</td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <button class="btn btn-falcon-warning btn-sm float-center"
                                                    type="button">
                                                    <span class="fas fa-graduation-cap text-warning fs-1"></span>
                                                    Entregar ficha
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">Nombre del alumno 2</td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <button class="btn btn-falcon-warning btn-sm float-center"
                                                    type="button">
                                                    <span class="fas fa-graduation-cap text-warning fs-1"></span>
                                                    Entregar ficha
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">Nombre del alumno 3</td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <button class="btn btn-falcon-default btn-sm float-center"
                                                    type="button">
                                                    <span class="fas fa-graduation-cap text-secondary fs-1"></span>
                                                    Entregar ficha
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">Nombre del alumno 4</td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <button class="btn btn-falcon-warning btn-sm float-center"
                                                    type="button">
                                                    <span class="fas fa-graduation-cap text-warning fs-1"></span>
                                                    Entregar ficha
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">Nombre del alumno 5</td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                                            </td>
                                            <td class="name text-center">
                                                <button class="btn btn-falcon-default btn-sm float-center"
                                                    type="button">
                                                    <span class="fas fa-graduation-cap text-secondary fs-1"></span>
                                                    Entregar ficha
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center mt-3"><button
                                    class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous"
                                    data-list-pagination="prev" disabled=""><svg
                                        class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="chevron-left" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                                <ul class="pagination mb-0">
                                    <li class="active"><button class="page" type="button" data-i="1"
                                            data-page="5">1</button>
                                    </li>
                                    <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                                    <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                                </ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                    data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right fa-w-10"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        data-fa-i2svg="">
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
    </div>
</div>

@endsection