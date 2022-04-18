<div id="tableExample2" data-list='{"valueNames":["id","period_id","task_id","description","starter_date","due_date","status"],"page":5,"pagination":true}'>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th class="sort" data-sort="id">Id</th>
            <th class="sort" data-sort="period_id">Periodo superior</th>
            <th class="sort" data-sort="task_id">Tarea relacionada</th>
            <th class="sort" data-sort="description">Descripción</th>
            <th class="sort" data-sort="starter_date">Fecha de inicio</th>
            <th class="sort" data-sort="due_date">Fecha final</th>
            <th class="sort" data-sort="status">Estatus</th>
            
            <th class="text-end">Acciones</th>
          </tr>
        </thead>
        <tbody class="list">
          <tr>
            <td class="id">1</td>
            <td class="period_id">null</td>
            <td class="task_id">1</td>
            <td class="description">Ciclo escolar 2022-2023</td>
            <td class="starter_date">01/09/2022 </td>
            <td class="due_date">31/08/2023</td>
            <td class="status"><div class="d-inline-block"><span class="material-icons text-danger fs-3">cancel</span></div></td>
            
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
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar periodo </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.period.formulario-periodo') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar periodo </button>
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
            <td class="period_id">1</td>
            <td class="task_id">2</td>
            <td class="description">Cuatrimestre Septiembre-Diciembre 2022</td>
            <td class="starter_date">01/09/2022 </td>
            <td class="due_date">31/12/22022</td>
            <td class="status"><div class="d-inline-block"><span class="material-icons text-danger fs-3">cancel</span></div></td>
            
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
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar periodo </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.period.formulario-periodo') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar periodo </button>
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
            <td class="period_id">2</td>
            <td class="task_id">3</td>
            <td class="description">Primer parcial SD2022</td>
            <td class="starter_date">07/09/2022 </td>
            <td class="due_date">12/10/22022</td>
            <td class="status"><div class="d-inline-block"><span class="material-icons text-danger fs-3">cancel</span></div></td>
            
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
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar periodo </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.period.formulario-periodo') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar periodo </button>
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