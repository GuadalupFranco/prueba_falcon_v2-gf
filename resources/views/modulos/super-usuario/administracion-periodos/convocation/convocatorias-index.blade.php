<div id="tableExample2" data-list='{"valueNames":["id","period_id","task_id","description","starter_date","due_date","status"],"page":5,"pagination":true}'>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th class="sort text-wrap" data-sort="id">Id</th>
            <th class="sort text-wrap" data-sort="period_id">Periodo Relacionado</th>
            <th class="sort text-wrap" data-sort="task_id">Tarea relacionada</th>
            <th class="sort text-wrap" data-sort="description">Descripción</th>
            <th class="sort text-wrap" data-sort="starter_date">Fecha de inicio</th>
            <th class="sort text-wrap" data-sort="due_date">Fecha final</th>
            <th class="sort text-wrap" data-sort="status">Estatus</th>
            <th class="sort text-wrap" data-sort="script_info">Script Informativo</th>
            <th class="sort text-wrap" data-sort="service_id">Servicio asoiciado</th>
            <th class="text-end">Acciones</th>
          </tr>
        </thead>
        <tbody class="list">
          <tr>
            <td class="id">1</td>
            <td class="period_id">9</td>
            <td class="task_id">6</td>
            <td class="description text-wrap">Convocatoria Beca por Excelencia EA2023</td>
            <td class="starter_date">05/12/2022 </td>
            <td class="due_date">14/12/2022</td>
            <td class="status"><div class="d-inline-block"><span class="material-icons text-danger fs-3">cancel</span></div></td>
            <td class="script_info text-wrap"><div class="d-inline-block">script.txt<span class="material-icons text-secundary fs-3">file_present</span></div></td>
            <td class="service_id text-wrap">null</td>
            <td class="text-end">
                <button class="btn btn-falcon-default mt-2" data-bs-toggle="modal" data-bs-target="#editar-periodo-modal" role="button">editar</button>
                <div class="modal fade" id="editar-periodo-modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar convocatoria </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.period.formulario-periodo') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar convocatoria </button>
                            <button class="btn btn-success" type="button">Guardar </button>
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="id">2</td>
            <td class="period_id text-wrap">9</td>
            <td class="task_id text-wrap">6</td>
            <td class="description text-wrap">Convocatoria Beca por vulnerabilidad EA2023</td>
            <td class="starter_date">16/11/2022 </td>
            <td class="due_date">14/12/2022</td>
            <td class="status"><div class="d-inline-block"><span class="material-icons text-danger fs-3">cancel</span></div></td>
            <td class="script_info text-wrap"><div class="d-inline-block">script.txt<span class="material-icons text-secundary fs-3">file_present</span></div></td>
            <td class="service_id text-wrap">null</td>
            <td class="text-end">
                <button class="btn btn-falcon-default mt-2" data-bs-toggle="modal" data-bs-target="#editar-periodo-modal" role="button">editar</button>
                <div class="modal fade" id="editar-periodo-modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar convocatoria </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.convocation.formulario-convocatoria')  

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar convocatoria </button>
                            <button class="btn btn-success" type="button">Guardar </button>
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="id">3</td>
            <td class="period_id text-wrap">9</td>
            <td class="task_id text-wrap">7</td>
            <td class="description text-wrap">Convocatoria Beca de transporte EA2023</td>
            <td class="starter_date ">05/12/2022 </td>
            <td class="due_date ">14/12/2022</td>
            <td class="status text-wrap"><div class="d-inline-block"><span class="material-icons text-danger fs-3">cancel</span></div></td>
            <td class="script_info text-wrap"><div class="d-inline-block">script.txt<span class="material-icons text-secundary fs-3">file_present</span></div></td>
            <td class="service_id text-wrap">205</td>
            <td class="text-end">
                <button class="btn btn-falcon-default mt-2" data-bs-toggle="modal" data-bs-target="#editar-periodo-modal" role="button">editar</button>
                <div class="modal fade" id="editar-periodo-modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar convocatoria </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.convocation.formulario-convocatoria') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar convocatoria </button>
                            <button class="btn btn-success" type="button">Guardar </button>
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="id">4</td>
            <td class="period_id">14</td>
            <td class="task_id">5</td>
            <td class="description text-wrap">Convocatoria Reinscripción cuatrimestre EA2023</td>
            <td class="starter_date">02/01/2023 </td>
            <td class="due_date">07/01/2022</td>
            <td class="status"><div class="d-inline-block"><span class="material-icons text-danger fs-3">cancel</span></div></td>
            <td class="script_info text-wrap"><div class="d-inline-block">script.txt<span class="material-icons text-secundary fs-3">file_present</span></div></td>
            <td class="service_id text-wrap">192</td>
            <td class="text-end">
                <button class="btn btn-falcon-default mt-2" data-bs-toggle="modal" data-bs-target="#editar-periodo-modal" role="button">editar</button>
                <div class="modal fade" id="editar-periodo-modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar nueva convocatoria </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.convocation.formulario-convocatoria') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar convocatoria </button>
                            <button class="btn btn-success" type="button">Guardar </button>
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
      <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
    </div>
  </div>