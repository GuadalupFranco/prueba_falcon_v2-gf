<div id="tableExample2" data-list='{"valueNames":["id","task_id","description","convocatoria_tag"],"page":5,"pagination":true}'>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th class="sort" data-sort="id">Id</th>
            <th class="sort" data-sort="task_id">tarea superior</th>
            <th class="sort" data-sort="description">Descripción</th>
            <th class="sort" data-sort="convocation_tag">Bandera convocatoria</th>
            <th class="text-end">Acciones</th>
          </tr>
        </thead>
        <tbody class="list">
          <tr>
            <td class="id">1</td>
            <td class="task_id">null</td>
            <td class="description">Ciclo escolar</td>
            <td class="convocaion_tag"><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" disabled=""/> </td>
            <td class="text-end">
                <button class="btn btn-falcon-default mt-2" data-bs-toggle="modal" data-bs-target="#editar-tarea-modal" role="button">editar</button>
                <div class="modal fade" id="editar-tarea-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar tarea </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.task.formulario-tareas') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar tarea </button>
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
            <td class="task_id">1</td>
            <td class="description">Cuatrimestre </td>
            <td class="convocaion_tag"><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" disabled=""/> </td>
            <td class="text-end">
                <button class="btn btn-falcon-default mt-2" data-bs-toggle="modal" data-bs-target="#editar-tarea-modal" role="button">editar</button>
                <div class="modal fade" id="editar-tarea-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel">Editar tarea </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.task.formulario-tareas') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar tarea </button>
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
            <td class="task_id">2</td>
            <td class="description">Parcial</td>
            <td class="convocaion_tag"><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" disabled=""/> </td>
            <td class="text-end">
                <button class="btn btn-falcon-default mt-2" data-bs-toggle="modal" data-bs-target="#editar-tarea-modal" role="button">editar</button>
                <div class="modal fade" id="editar-tarea-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Editar tarea </h4>
                        </div>
                        @include('modulos.super-usuario.administracion-periodos.task.formulario-tareas') 

                        </div>
                        <div class="modal-footer mx-0 my-0">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-danger" type="button">Eliminar tarea </button>
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