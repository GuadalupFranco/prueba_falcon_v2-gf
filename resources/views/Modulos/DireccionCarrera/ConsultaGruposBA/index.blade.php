@extends('welcome')

@section('content')

<div class="card mb-3" 
    data-list="{&quot;valueNames&quot;:[&quot;grupo&quot;,&quot;aula&quot;,
                &quot;estudiantes&quot;,&quot;desarrollo-h&quot;,&quot;fisica-estadistica&quot;,
                &quot;ingles&quot;,&quot;matematicas&quot;,&quot;proyecto&quot;,
                &quot;estatus&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Consulta Grupos &#62; Curso Inducción</h5>
            </div>
            <div class="col-8 col-sm-auto ms-auto text-end ps-0">
                <div id="orders-actions">
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-filter">
                        </span><span class="d-none d-sm-inline-block ms-1">Filtrar</span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-external-link-alt"></span>
                        <span class="d-none d-sm-inline-block ms-1">Exportar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-1000">
                    <tr>
                        <th class="sort white-space-nowrap pe-4" data-sort="grupo">Grupo</th>
                        <th class="sort white-space-nowrap pe-5" data-sort="aula">Aula</th>
                        <th class="sort white-space-nowrap pe-4" data-sort="estudiantes">Estudiantes</th>
                        <th class="sort white-space-nowrap pe-5" data-sort="desarrollo-h">Desarrollo Humano</th>
                        <th class="sort white-space-nowrap pe-6" data-sort="fisica-estadistica">Física/Estadística</th>
                        <th class="sort white-space-nowrap pe-7" data-sort="ingles">Inglés</th>
                        <th class="sort white-space-nowrap pe-6" data-sort="matematicas">Matemáticas</th>
                        <th class="sort white-space-nowrap pe-7" data-sort="proyecto">Proyecto</th>
                        <th class="sort white-space-nowrap pe-6" data-sort="estatus">Estatus</th>
                        <th class="sort ps-3 align-middle pe-3">...</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <td class="py-2 align-middle"><strong>S172</strong></td>
                        <td class="py-2 align-middle">C206</td>
                        <td class="py-2 align-middle">30</td>
                        <td class="py-2 align-middle">Jose Rodríguez</td>
                        <td class="py-2 align-middle">Marta Jiménez</td>
                        <td class="py-2 align-middle">Rebeca García</td>
                        <td class="py-2 align-middle">Juan López</td>
                        <td class="py-2 align-middle">Rebeca García</td>
                        <td class="py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-success">Completado
                                <span class="ms-1 fas fa-check"></span>
                            </span>
                        </td>
                        <td class="px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 align-middle"><strong>S173</strong></td>
                        <td class="py-2 align-middle">C207</td>
                        <td class="py-2 align-middle">27</td>
                        <td class="py-2 align-middle">Juan López</td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle">Rebeca García</td>
                        <td class="py-2 align-middle">Juan López</td>
                        <td class="py-2 align-middle">Rebeca García</td>
                        <td class="py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-primary">Asignando
                                <span class="ms-1 fas fa-stream"></span>
                            </span>
                        </td>
                        <td class="px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 align-middle"><strong>S173</strong></td>
                        <td class="py-2 align-middle">C207</td>
                        <td class="py-2 align-middle">27</td>
                        <td class="py-2 align-middle">José Rodríguez</td>
                        <td class="py-2 align-middle">Juan López</td>
                        <td class="py-2 align-middle">Rebeca García</td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-primary">Asignando
                                <span class="ms-1 fas fa-stream"></span>
                            </span>
                        </td>
                        <td class="px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 align-middle"><strong>S174</strong></td>
                        <td class="py-2 align-middle">C208</td>
                        <td class="py-2 align-middle">29</td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-secondary">En Espera
                                <span class="ms-1 fas fa-ban"></span>
                            </span>
                        </td>
                        <td class="px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 align-middle"><strong>S171</strong></td>
                        <td class="py-2 align-middle">C205</td>
                        <td class="py-2 align-middle">37</td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-secondary">En Espera
                                <span class="ms-1 fas fa-ban"></span>
                            </span>
                        </td>
                        <td class="px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr=>
                    <tr>
                        <td class="py-2 align-middle"><strong>S173</strong></td>
                        <td class="py-2 align-middle">C207</td>
                        <td class="py-2 align-middle">27</td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle"></td>
                        <td class="py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-warning">Pendiente
                                <span class="ms-1 fas fa-exclamation"></span>
                            </span>
                        </td>
                        <td class="px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex align-items-center justify-content-center">
            <button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous" data-list-pagination="prev" disabled="">
                <span class="fas fa-chevron-left"></span>
            </button>
            <ul class="pagination mb-0">
                <li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li>
                <li><button class="page" type="button" data-i="2" data-page="10">2</button></li>
                <li><button class="page" type="button" data-i="3" data-page="10">3</button></li>
            </ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next">
                <span class="fas fa-chevron-right"></span>
            </button>
        </div>
    </div>
</div>
@endsection