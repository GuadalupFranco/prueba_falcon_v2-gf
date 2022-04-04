
@extends('welcome')
@section('content')
<div class="container mx-0 my-0"> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('panel-principal-superusuario')}}">Panel de superusuarios</a></li>
    <li class="breadcrumb-item"><a href="#">Administración de periodos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de periodos</li>
  </ol>
 
  <div class="card">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0">Lista de periodos</h5>
        </div>
        <div class="col-6 col-sm-auto ms-auto text-end ps-0">
          <div id="table-purchases-replace-element">
            <button class="btn btn-falcon-default btn-sm" role="button" data-bs-toggle="modal" data-bs-target="#error-modal">
              <svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;">
                <g transform="translate(224 256)">
                  <g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path>
                  </g>
                </g>
              </svg>
              <!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com -->
              <span class="d-none d-sm-inline-block ms-1">New</span>
            </button>
            <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1000px">
                <div class="modal-content position-relative">
                  <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form class="row g-3 needs-validation" novalidate="">
                    <div class="modal-body p-0">

                    
                      <div class="card">
                          <div class="card-header">
                            <div class="row flex-between-end">
                              <div class="col-auto align-self-center">
                                  <h6 class="mb-0">Información general</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card-body border-top">
                              <div class="row">
                                  <div class="col">
                                      <div class="col-md-6 position-relative">
                                          <label class="form-label" for="validationTooltip01">Descripción</label>
                                          <textarea class="form-control" id="validationTooltip01" value="" required=""></textarea>
                                          <div class="valid-tooltip">Por favor ingresa una descripción en el campo.</div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="row">
                                          <div class="col-md-5 position-relative">
                                              <label class="form-label" for="validationTooltip04">Periodo superior</label>
                                              <select class="form-select" id="validationTooltip04" required="">
                                                  <option selected="" disabled="" value="">seleccionar...</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                              </select>
                                              <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-5 position-relative">
                                              <label class="form-label" for="validationTooltip04">Tarea relacionada</label>
                                              <select class="form-select" id="validationTooltip04" required="">
                                                  <option selected="" disabled="" value="">seleccionar...</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                              </select>
                                              <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card border-top my-0">
                          <div class="card-header">
                            <div class="row flex-between-end">
                              <div class="col-auto align-self-center">
                                  <h6 class="mb-0">Especificaciones</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card-body border-top">
                              <div class="row">
                                  <div class="col-md-3 position-relative">
                                      <label class="form-label" for="validationTooltip04">Estatus</label>
                                      <select class="form-select" id="validationTooltip04" required="">
                                          <option selected="" disabled="" value="">seleccionar...</option>
                                          <option>Activo</option>
                                          <option>Inactivo</option>
                                      </select>
                                      <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                                  </div>
                                  <div class="col-md-2 position-relative">
                                      <label class="form-label" for="datepicker_ini">Fecha de inicio</label>
                                      <input class="form-control datetimepicker" id="datepicker_ini" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                                      <div class="valid-tooltip">Selecciona una fecha inicial válida</div>
                                  </div>
                                  <div class="col-md-2 position-relative">
                                      <label class="form-label" for="datepicker_fin">Fecha de fin</label>
                                      <input class="form-control datetimepicker" id="datepicker_fin" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                                      <div class="valid-tooltip">Selecciona una fecha final válida</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    

                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                      <button class="btn btn-success" type="button">Registrar </button>
                    </div>
                  </form>
                </div>
              </div>
            
            </div>
            <button class="btn btn-falcon-default btn-sm mx-2" type="button">
              <svg class="svg-inline--fa fa-filter fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;">
                <g transform="translate(256 256)">
                  <g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                    <path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" transform="translate(-256 -256)"></path>
                  </g>
                </g>
              </svg><!-- <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com -->
              <span class="d-none d-sm-inline-block ms-1">Filter</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body py-0 border-top">
      <div class="table-responsive scrollbar">
        <table class="table table-hover table-striped overflow-hidden">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Periodo superior</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha inicial</th>
            <th scope="col">Fecha final</th>
            <th scope="col">Estatus</th>
            <th scope="col">Tarea relacionada</th>
            <th class="text-end" scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="align-middle">
            <td class="text-nowrap">1</td>
            <td class="text-nowrap text-wrap">null</td>
            <td class="text-nowrap text-wrap">Ciclo escolar 2022-2023</td>
            <td class="text-nowrap">01/09/2022</td>
            <td class="text-nowrap">31/08/2023</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Inactivo<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-nowrap text-wrap">Ciclo escolar</td>
            <td class="text-end">
              <a class="btn btn-falcon-default mt-2" href="{{route('lista-periodos')}}"
              role="button">editar</a>
            </td>
          </tr>
          <tr class="align-middle">
            <td class="text-nowrap">2</td>
            <td class=" text-wrap">Ciclo escolar 2022-2023</td>
            <td class=" text-wrap">Cuatrimestre Septiembre-Diciembre 2022-2023</td>
            <td class="text-nowrap">01/09/2022</td>
            <td class="text-nowrap">31/12/2022</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Inactivo<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-wrap">Cuatrimestre</td>
            <td class="text-end">
              <a class="btn btn-falcon-default mt-2" href="{{route('lista-periodos')}}"
              role="button">editar</a>
            </td>
          </tr>
          <tr class="align-middle">
            <td class="text-nowrap">3</td>
            <td class=" text-wrap">null</td>
            <td class=" text-wrap">Segundo proceso de admisión 2022-2023</td>
            <td class="text-nowrap">07/03/2022</td>
            <td class="text-nowrap">06/05/2022</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Inactivo<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-wrap">Proceso de admisión</td>
            <td class="text-end">
              <a class="btn btn-falcon-default mt-2" href="{{route('lista-periodos')}}"
              role="button">editar</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>  
@endsection