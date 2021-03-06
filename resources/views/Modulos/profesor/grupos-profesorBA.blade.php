@extends('welcome')

@section('content')

<div class="container mx-0 my-0">

<div class="">
              <div class="card z-index-1" id="tablaGruposProfesor" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;product&quot;,&quot;payment&quot;,&quot;amount&quot;],&quot;page&quot;:7,&quot;pagination&quot;:true}">
                
              <div class="card-header">
                  <div class="row flex-between-center">

                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                      <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Grupos: Bachillerato Avanzado </h5>
                    </div>

                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                      <div class="d-none" id="table-purchases-actions">
                        <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>

                          </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
                      </div>
                      <div id="table-purchases-replace-element">
                        <button class="btn btn-falcon-default btn-sm mx-2" type="button"><svg class="svg-inline--fa fa-filter fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">Filtrar</span></button>
                        <button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-external-link-alt fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">Exportar</span></button></div>
                   
                      </div>
                  </div>
                </div>


                <div class="card-body px-0 py-0">
                  <div class="table-responsive scrollbar">
                    
                  <table class="table table-sm fs--1 mb-0 overflow-hidden">
                      <thead class="bg-200 text-900">
                        <tr>
                    
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="grupo">Grupo</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="salon">Salon</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="horario">Horario</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="asignatura">Asignatura</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="status">Status Captura</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-center" >Acciones</th>
                        </tr>
                      </thead>

                      <tbody class="list" id="table-grupos-body"><tr class="btn-reveal-trigger">
                        
                        
                        <tr class="btn-reveal-trigger">
                 
                          <th class="align-middle white-space-nowrap name"> Sistemas </th>
                          <td class="align-middle white-space-nowrap email">C102 </td>
                          <td class="align-middle white-space-nowrap product"> 8:00 a 9:00 </td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Matematicas</span> </td>
                          <td class="align-middle text-end amount"><span class="badge badge rounded-pill badge-soft-success">Capturado<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                          <td class="align-middle white-space-nowrap text-center">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item text-primary" href="capturaCalificacionesBA">Capturar Calificaciones</a><a class="dropdown-item text-danger" href="#!">Cerrar Captura</a>
                              </div>
                            </div>
                          </td>
                        </tr>


                                                
                        <tr class="btn-reveal-trigger">
 
                          <th class="align-middle white-space-nowrap name"> Negocios Internacionales </th>
                          <td class="align-middle white-space-nowrap email">C103 </td>
                          <td class="align-middle white-space-nowrap product"> 9:00 a 10:00 </td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Matematicas</span> </td>
                          <td class="align-middle text-end fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pendiente <svg class="svg-inline--fa fa-stream fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="stream" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M16 128h416c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H16C7.16 32 0 39.16 0 48v64c0 8.84 7.16 16 16 16zm480 80H80c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16zm-64 176H16c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="align-middle white-space-nowrap text-center">
                          <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item text-primary" href="capturaCalificacionesBA">Capturar Calificaciones</a><a class="dropdown-item text-danger" href="#!">Cerrar Captura</a>
                              </div>
                            </div>
                          </td>
                        </tr>

 
                        <tr class="btn-reveal-trigger">

                          <th class="align-middle white-space-nowrap name"> Mecatronica </th>
                          <td class="align-middle white-space-nowrap email">C104 </td>
                          <td class="align-middle white-space-nowrap product"> 10:00 a 11:00 </td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-danger">Matematicas</span> </td>
                          <td class="align-middle text-end fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Cerrada<svg class="svg-inline--fa fa-ban fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="align-middle white-space-nowrap text-center">
                          <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item text-primary" href="#!">Capturar Calificaciones</a><a class="dropdown-item text-danger" href="#!">Cerrar Captura</a>
                              </div>
                            </div>
                          </td>
                        </tr>

                      
                      </tbody>
                    </table>
                  </div>
                </div>
                
                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="pagination d-none"><li class="active"><button class="page" type="button" data-i="1" data-page="1">1</button></li><li><button class="page" type="button" data-i="2" data-page="7">2</button></li></div>
                    <div class="col">
                      <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info">1 to 1 of 1</span></p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>



</div>



@stop