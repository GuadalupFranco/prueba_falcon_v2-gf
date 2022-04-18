@extends('welcome')

@section('content')

<div class="container mx-0 my-0">

<div class="">
              <div class="card z-index-1" id="tablaGruposProfesor" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;product&quot;,&quot;payment&quot;,&quot;amount&quot;],&quot;page&quot;:7,&quot;pagination&quot;:true}">
                
              <div class="card-header">
                  <div class="row flex-between-center">

                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                      <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"> Bachillerato Avanzado: Grupo Sistemas </h5>
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
                    
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="matricula">Matricula</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nombre">Nombre</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="faltas">Faltas</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="calificacion">Calificacion</th>
                        </tr>
                      </thead>

                      <tbody class="list" id="table-grupos-body"><tr class="btn-reveal-trigger">
                        
                        
                        <tr class="btn-reveal-trigger">
                          <th class="align-middle white-space-nowrap matricula"> 00014254886 </th>
                          <td class="align-middle white-space-nowrap nombre"> Alumno No.1 </td>
                          <td class="align-middle white-space-nowrap faltas"> <input class="form-control" id="basic-form-name" type="number"  /> </td>
                          <td class="align-middle white-space-nowrap calificacion"> <input class="form-control" id="basic-form-name" type="number"  /> </td>
                        </tr>

                        <tr class="btn-reveal-trigger">
                          <th class="align-middle white-space-nowrap matricula"> 00088789412</th>
                          <td class="align-middle white-space-nowrap nombre"> Alumno No.2 </td>
                          <td class="align-middle white-space-nowrap faltas"> <input class="form-control" id="basic-form-name" type="number"  /> </td>
                          <td class="align-middle white-space-nowrap calificacion"> <input class="form-control" id="basic-form-name" type="number"  /> </td>
                        </tr>

                        <tr class="btn-reveal-trigger">
                          <th class="align-middle white-space-nowrap matricula"> 000714135432 </th>
                          <td class="align-middle white-space-nowrap nombre"> Alumno No.3 </td>
                          <td class="align-middle white-space-nowrap faltas"> <input class="form-control" id="basic-form-name" type="number"  /> </td>
                          <td class="align-middle white-space-nowrap calificacion"> <input class="form-control" id="basic-form-name" type="number"  /> </td>
                        </tr>


                                                 
                     
                      
                      </tbody>
                    </table>
                  </div>
                </div>
                
                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="pagination d-none"><li class="active"><button class="page" type="button" data-i="1" data-page="7">1</button></li><li><button class="page" type="button" data-i="2" data-page="7">2</button></li></div>
                    <div class="col">
                      <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info">1 to 1 of 1</span></p>
                    </div>
                    <div class="col-auto d-flex">
                      <button onclick="Swal.fire('Correcto!','Se guardaron las calificaciones','success')" class="btn btn-sm btn-success " type="button"  ><span>Guardar</span></button> 
                      <button onclick="Swal.fire('Correcto!','Se guardaron las calificaciones','success')" class="btn btn-sm btn-warning px-4 ms-2" type="button" ><span>Guardar y salir</span></button></div>
                  </div>
                </div>
              </div>
            </div>



</div>






<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stop




