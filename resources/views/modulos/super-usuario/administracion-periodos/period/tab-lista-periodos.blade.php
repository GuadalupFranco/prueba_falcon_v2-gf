
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
              <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px">
                <div class="modal-content position-relative">
                  <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                      <h4 class="mb-1" id="modalExampleDemoLabel"> Registrar nuevo periodo </h4>
                    </div>
                   @include('modulos.super-usuario.administracion-periodos.period.formulario-periodo') 

                  </div>
                  <div class="modal-footer mx-0 my-0">
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
      @include('modulos.super-usuario.administracion-periodos.period.periodos-index')
    </div>
