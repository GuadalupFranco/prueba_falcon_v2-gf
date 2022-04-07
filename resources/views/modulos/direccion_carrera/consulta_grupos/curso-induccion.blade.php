@extends('welcome')

@section('content')

<div class="card mb-3" id="gruposTable" data-list="{&quot;valueNames&quot;:[&quot;order&quot;,&quot;date&quot;,&quot;address&quot;,&quot;status&quot;,&quot;amount&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Consulta Grupos &#62; Curso Inducción</h5>
            </div>
            <div class="col-8 col-sm-auto ms-auto text-end ps-0">
                <div id="orders-actions">
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-filter" data-fa-transform="shrink-3 down-2">
                        </span><span class="d-none d-sm-inline-block ms-1">Filtrar</span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Exportar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-4" data-sort="order">Grupo</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-5" data-sort="order">Aula</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-4" data-sort="order">Aspirantes</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="order">Desarrollo Humano</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="order">Inglés</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="order">Matemáticas</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-5" data-sort="order">Estado</th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-center">...</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-orders-body">
                    <tr>
                        <td class="grupo py-2 align-middle white-space-nowrap"><strong>S172</strong></td>
                        <td class="aula py-2 align-middle">C206</td>
                        <td class="aspirantes py-2 align-middle white-space-nowrap">30</td>
                        <td class="desarrollo-humnano py-2 align-middle white-space-nowrap">Jose Rodríguez</td>
                        <td class="ingles py-2 align-middle white-space-nowrap">Marta Jiménez</td>
                        <td class="matematicas py-2 align-middle white-space-nowrap">Rebeca García</td>
                        <td class="estatus py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-success">Completado
                                <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                            </span>
                        </td>
                        <td class="editar px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="grupo py-2 align-middle white-space-nowrap"><strong>S173</strong></td>
                        <td class="aula py-2 align-middle">C207</td>
                        <td class="aspirantes py-2 align-middle white-space-nowrap">27</td>
                        <td class="desarrollo-humnano py-2 align-middle white-space-nowrap">José Rodríguez</td>
                        <td class="ingles py-2 align-middle white-space-nowrap"></td>
                        <td class="matematicas py-2 align-middle white-space-nowrap">Rebeca García</td>
                        <td class="status py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-primary">Asignando
                                <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span>
                            </span>
                        </td>
                        <td class="editar px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="grupo py-2 align-middle white-space-nowrap"><strong>S173</strong></td>
                        <td class="aula py-2 align-middle">C207</td>
                        <td class="aspirantes py-2 align-middle white-space-nowrap">27</td>
                        <td class="desarrollo-humnano py-2 align-middle white-space-nowrap"></td>
                        <td class="ingles py-2 align-middle white-space-nowrap">Juan López</td>
                        <td class="matematicas py-2 align-middle white-space-nowrap">Rebeca García</td>
                        <td class="estatus py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-primary">Asignando
                                <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span>
                            </span>
                        </td>
                        <td class="editar px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="grupo py-2 align-middle white-space-nowrap"><strong>S174</strong></td>
                        <td class="aula py-2 align-middle">C208</td>
                        <td class="aspirantes py-2 align-middle white-space-nowrap">29</td>
                        <td class="desarrollo-humnano py-2 align-middle white-space-nowrap"></td>
                        <td class="ingles py-2 align-middle white-space-nowrap"></td>
                        <td class="matematicas py-2 align-middle white-space-nowrap"></td>
                        <td class="estatus py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-secondary">En Espera
                                <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span>
                            </span>
                        </td>
                        <td class="editar px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                        <td class="grupo py-2 align-middle white-space-nowrap"><strong>S171</strong></td>
                        <td class="aula py-2 align-middle">C205</td>
                        <td class="aspirantes py-2 align-middle white-space-nowrap">37</td>
                        <td class="desarrollo-humnano py-2 align-middle white-space-nowrap"></td>
                        <td class="ingles py-2 align-middle white-space-nowrap"></td>
                        <td class="matematicas py-2 align-middle white-space-nowrap"></td>
                        <td class="estatus py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-secondary">En Espera
                                <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span>
                            </span>
                        </td>
                        <td class="editar px-3 py-2 align-middle">
                            <span class="fas fa-edit fs--1"></span>
                        </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                        <td class="grupo py-2 align-middle white-space-nowrap"><strong>S173</strong></td>
                        <td class="aula py-2 align-middle">C207</td>
                        <td class="aspirantes py-2 align-middle white-space-nowrap">27</td>
                        <td class="desarrollo-humnano py-2 align-middle white-space-nowrap"></td>
                        <td class="ingles py-2 align-middle white-space-nowrap"></td>
                        <td class="matematicas py-2 align-middle white-space-nowrap"></td>
                        <td class="estatus py-2 align-middle text-center fs-0 white-space-nowrap">
                            <span class="badge badge rounded-pill d-block badge-soft-warning">Pendiente
                                <span class="ms-1 fas fa-exclamation" data-fa-transform="shrink-2"></span>
                            </span>
                        </td>
                        <td class="editar px-3 py-2 align-middle">
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