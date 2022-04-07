@extends('welcome')

@section('content')

<nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb" class="mb-3">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Menú</a></li>
      <li class="breadcrumb-item"><a href="#">Servicios escolares</a></li>
      <li class="breadcrumb-item active" aria-current="page">Validar Documentos</li>
  </ol>
</nav>
<h3 class="text-center my-2">Validar Documentos</h3>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab"
          aria-controls="tab-home" aria-selected="true">Tabla documentos</a></li>
</ul>
<div class="tab-content border-x border-bottom p-3" id="myTabContent">
  <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
      <div class="card mb-3">
        
        <!-- <div class="card-header">
              <div class="row flex-between-end">
                  <div class="col-auto align-self-center">
                      <h5 class="mb-0" data-anchor="data-anchor" id="pagination-with-numbering">Wolas<a
                              class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#"
                              href="#pagination-with-numbering" style="padding-left: 0.375em;"></a></h5>
                  </div>
              </div>              
          </div>-->
         

          <div class="card">
            <div id="tableExample2" data-list='{"valueNames":["name","status"],"page":10,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table table-bordered table-striped fs--1 mb-0">
                  <thead class="bg-200 text-900">
                    <tr>
                      <th class="sort" data-sort="name">Nombre</th>
                      <th>CURP</th>
                      <th>Acta de Nacimiento</th>
                      <th>Identificación</th>
                      <th class="sort" data-sort="status">Estatus</th>
                      <th>Envíar</th>
                    </tr>
                  </thead>
                  <tbody class="list">
               
                    <tr>
          
                      <!-- Imágen -->
                      <td class="name text-nowrap w-25">
                        <div class="d-flex align-items-center">
                          <div class="avatar" style="width: 7rem;">
                            <img class="rounded-3" src="/assets/img/team/6.jpg" alt="" />
                          </div>
                          <div class="ms-4">Andres Javier Camacho Ledezma</div>
                        </div>
                      </td>
                        <!-- CURP -->
                      <td class="align-middle text-center">            
          
          
                        <div class="d-flex mb-3 flex-column">
                          <div class="p-2">
                              <!-- Button trigger modal -->
                              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#curp">
                                <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                              </button>
              
                              <!-- Modal -->
                              <div class="modal fade" id="curp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">CURP</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">|
                                      <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="p-2">
                            <small>CURP_120035285.pdf</small>
                          </div>
                        </div>
            
                                                
                      
                      </td>
                        <!-- Acta de nacimiento -->
                      <td class="align-middle text-center">
            
                        <div class="d-flex mb-3 flex-column">
                          <div class="p-2">
                               <!-- Button trigger modal -->
                            <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Acta">
                              <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                            </a>
            
                            <!-- Modal -->
                            <div class="modal fade" id="Acta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Acta de Nacimiento</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="p-2">
                            <small>ActaDeNacimiento_120035275.pdf</small>
                          </div>
                        </div>
                                                
                      
                      </td>
                        <!-- Identificación -->
                      <td class="align-middle text-center">
                        
                        <div class="d-flex mb-3 flex-column">
                          <div class="p-2">
                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#identificacion">
                              <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                            </button>
            
                            <!-- Modal -->
                            <div class="modal fade" id="identificacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Identificación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="p-2">
                            <small>INE_120035275.pdf</small>
                          </div>
                        </div>
          
                                                 
                      
                      </td>
            
                      <!-- Estatus -->
                      <td class="status align-middle text-center">                  
                          <span class="badge rounded-pill badge-soft-success"  style="font-size: 1rem">Válidado</span>                                                                                                                                                                             
                      </td>
                        <!-- Formulario -->
                      <td class="align-middle text-center">
                        <div class="d-flex flex-column bd-highlight mb-3">
                          <div class="p-2 bd-highlight">
                              
                            <!-- Button trigger modal -->
                            <a class="btn p-0" type="button" data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#validar" title="Envíar">
                              <span class="text-500 fas fa-arrow-circle-right"></span>
                            </a>
            
            
                            <!-- Modal -->
                            <div class="modal fade" id="validar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Selecionar validación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
            
                                    
                                    
                                    <form action="" method="POST">
                                      @csrf
            
                                      <h5 class="mb-3">Andrés Javier Camacho Ledezma</h5>
                                      
            
                                      <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">                                  
                                        <div class="p-2 bd-highlight">
                                          
                                          <div class="mb-2">
                                            <h6>Imágen</h6> 
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-imagen1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-imagen2">Inválido</label>
                                            </div>
                                          </div>
                                          
            
                                          <div class="mb-2">
                                            <h6>CURP</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-curp1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-curp2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div class="mb-2">
                                            <h6>Acta de Nacimiento</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-acta1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-acta2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div class="mb-2">
                                            <h6>Identificación</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-id1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-id2">Inválido</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="p-2 bd-highlight flex-fill">
                                          <div class="form-floating">
                                            <textarea class="form-control h-100 d-inline-block" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Comentarios</label>
                                          </div>
                                        </div>
                                      </div>
            
                                      <div class="text-end">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a type="button" class="btn btn-primary mx-1">Envíar</a>
                                      </div>
            
                                    </form>                                                                                    
                                  </div>                                                    
                                </div>
                              </div>
                            </div>
                        </div>                        
                      </td>
          
                    </tr>
          
                    <tr>
          
                      <!-- Imágen -->
                      <td class="name text-nowrap w-25">
                        <div class="d-flex align-items-center">
                          <div class="avatar" style="width: 7rem;">
                            <img class="rounded-3" src="/assets/img/team/4.jpg" alt="" />
                          </div>
                          <div class="ms-4">Hector Emmanuel Mendoza Reyes</div>
                        </div>
                      </td>
                        <!-- CURP -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#curp">
                              <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                            </button>
            
                            <!-- Modal -->
                            <div class="modal fade" id="curp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">CURP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
                        <!-- Acta de nacimiento -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Acta">
                              <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                            </a>
            
                            <!-- Modal -->
                            <div class="modal fade" id="Acta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Acta de Nacimiento</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
                        <!-- Identificación -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#identificacion">
                              <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                            </button>
            
                            <!-- Modal -->
                            <div class="modal fade" id="identificacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Identificación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
            
                      <!-- Estatus -->
                      <td class="status align-middle text-center">                  
                          <span class="badge rounded-pill badge-soft-warning"  style="font-size: 1rem">Pendiente</span>                                                                                                                                                                             
                      </td>
                        <!-- Formulario -->
                      <td class="align-middle text-center">
                        <div class="d-flex flex-column bd-highlight mb-3">
                          <div class="p-2 bd-highlight">
                              
                            <!-- Button trigger modal -->
                            <a class="btn p-0" type="button" data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#validar" title="Envíar">
                              <span class="text-500 fas fa-arrow-circle-right"></span>
                            </a>
            
            
                            <!-- Modal -->
                            <div class="modal fade" id="validar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Selecionar validación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
            
                                    
                                    
                                    <form action="" method="POST">
                                      @csrf
            
                                      
                                      
            
                                      <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">                                  
                                        <div class="p-2 bd-highlight">
                                          
                                          <div>
                                            <h6>Imágen</h6> 
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-imagen1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-imagen2">Inválido</label>
                                            </div>
                                          </div>
                                          
            
                                          <div>
                                            <h6>CURP</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-curp1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-curp2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div>
                                            <h6>Acta de Nacimiento</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-acta1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-acta2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div>
                                            <h6>Identificación</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-id1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-id2">Inválido</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="p-2 bd-highlight flex-fill">
                                          <div class="form-floating">
                                            <textarea class="form-control h-100 d-inline-block" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Comentarios</label>
                                          </div>
                                        </div>
                                      </div>
            
                                      <div class="text-end">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a type="button" class="btn btn-primary mx-1">Envíar</a>
                                      </div>
            
                                    </form>                                                                                    
                                  </div>                                                    
                                </div>
                              </div>
                            </div>
                        </div>                        
                      </td>
          
                    </tr>
                    <tr>
          
                      <!-- Imágen -->
                      <td class="name text-nowrap w-25">
                        <div class="d-flex align-items-center">
                          <div class="avatar" style="width: 7rem;">
                            <img class="rounded-3" src="/assets/img/team/13.jpg" alt="" />
                          </div>
                          <div class="ms-4">Manuel Antonio Pechir Moctezuma</div>
                        </div>
                      </td>
                        <!-- CURP -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#curp">
                              <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                            </button>
            
                            <!-- Modal -->
                            <div class="modal fade" id="curp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">CURP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
                        <!-- Acta de nacimiento -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Acta">
                              <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                            </a>
            
                            <!-- Modal -->
                            <div class="modal fade" id="Acta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Acta de Nacimiento</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
                        <!-- Identificación -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#identificacion">
                              <span class="far fa-file-pdf text-danger fs-2 me-2"></span>
                            </button>
            
                            <!-- Modal -->
                            <div class="modal fade" id="identificacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Identificación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
            
                      <!-- Estatus -->
                      <td class="status align-middle text-center">                  
                          <span class="badge rounded-pill badge-soft-warning"  style="font-size: 1rem">Pendiente</span>                                                                                                                                                                             
                      </td>
                        <!-- Formulario -->
                      <td class="align-middle text-center">
                        <div class="d-flex flex-column bd-highlight mb-3">
                          <div class="p-2 bd-highlight">
                              
                            <!-- Button trigger modal -->
                            <a class="btn p-0" type="button" data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#validar" title="Envíar">
                              <span class="text-500 fas fa-arrow-circle-right"></span>
                            </a>
            
            
                            <!-- Modal -->
                            <div class="modal fade" id="validar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Selecionar validación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
            
                                    
                                    
                                    <form action="" method="POST">
                                      @csrf
            
                                      
                                      
            
                                      <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">                                  
                                        <div class="p-2 bd-highlight">
                                          
                                          <div>
                                            <h6>Imágen</h6> 
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-imagen1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-imagen2">Inválido</label>
                                            </div>
                                          </div>
                                          
            
                                          <div>
                                            <h6>CURP</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-curp1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-curp2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div>
                                            <h6>Acta de Nacimiento</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-acta1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-acta2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div>
                                            <h6>Identificación</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-id1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-id2">Inválido</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="p-2 bd-highlight flex-fill">
                                          <div class="form-floating">
                                            <textarea class="form-control h-100 d-inline-block" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Comentarios</label>
                                          </div>
                                        </div>
                                      </div>
            
                                      <div class="text-end">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a type="button" class="btn btn-primary mx-1">Envíar</a>
                                      </div>
            
                                    </form>                                                                                    
                                  </div>                                                    
                                </div>
                              </div>
                            </div>
                        </div>                        
                      </td>
          
                    </tr>
                    <tr>
          
                      <!-- Imágen -->
                      <td class="name text-nowrap w-25">
                        <div class="d-flex align-items-center">
                          <div class="avatar" style="width: 7rem;">
                            <img class="rounded-3" src="/assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="ms-4">John Paul Martinez</div>
                        </div>
                      </td>
                        <!-- CURP -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#curp">
                              <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                            </button>
            
                            <!-- Modal -->
                            <div class="modal fade" id="curp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">CURP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
                        <!-- Acta de nacimiento -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Acta">
                              <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                            </a>
            
                            <!-- Modal -->
                            <div class="modal fade" id="Acta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Acta de Nacimiento</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
                        <!-- Identificación -->
                      <td class="align-middle text-center">
            
                        <div class="p-2 bd-highlight">
            
                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#identificacion">
                              <span class="far fa-file-pdf text-success fs-2 me-2"></span>
                            </button>
            
                            <!-- Modal -->
                            <div class="modal fade" id="identificacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Identificación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">|
                                    <embed src="https://docs.google.com/viewer?srcid=1AdyzEZ8rhItZZ6PtQpHYsX4MyIpuYHgJ&pid=explorer&efh=false&a=v&chrome=false&embedded=true" type="application/pdf" width="100%" height="600px" />
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>                                        
                      
                      </td>
            
                      <!-- Estatus -->
                      <td class="status align-middle text-center">                  
                          <span class="badge rounded-pill badge-soft-success"  style="font-size: 1rem">Válidado</span>                                                                                                                                                                             
                      </td>
                        <!-- Formulario -->
                      <td class="align-middle text-center">
                        <div class="d-flex flex-column bd-highlight mb-3">
                          <div class="p-2 bd-highlight">
                              
                            <!-- Button trigger modal -->
                            <a class="btn p-0" type="button" data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#validar" title="Envíar">
                              <span class="text-500 fas fa-arrow-circle-right"></span>
                            </a>
            
            
                            <!-- Modal -->
                            <div class="modal fade" id="validar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Selecionar validación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
            
                                    
                                    
                                    <form action="" method="POST">
                                      @csrf
            
                                      
                                      
            
                                      <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">                                  
                                        <div class="p-2 bd-highlight">
                                          
                                          <div>
                                            <h6>Imágen</h6> 
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-imagen1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-imagen2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-imagen2">Inválido</label>
                                            </div>
                                          </div>
                                          
            
                                          <div>
                                            <h6>CURP</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-curp1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-curp" id="vbtn-curp2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-curp2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div>
                                            <h6>Acta de Nacimiento</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-acta1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-acta" id="vbtn-acta2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-acta2">Inválido</label>
                                            </div>
                                          </div>
            
                                          <div>
                                            <h6>Identificación</h6>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id1" autocomplete="off" checked="">
                                              <label class="btn btn-outline-success" for="vbtn-id1">Válido</label>
                                              <input type="radio" class="btn-check" name="vbtn-id" id="vbtn-id2" autocomplete="off">
                                              <label class="btn btn-outline-danger" for="vbtn-id2">Inválido</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="p-2 bd-highlight flex-fill">
                                          <div class="form-floating">
                                            <textarea class="form-control h-100 d-inline-block" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Comentarios</label>
                                          </div>
                                        </div>
                                      </div>
            
                                      <div class="text-end">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a type="button" class="btn btn-primary mx-1">Envíar</a>
                                      </div>
            
                                    </form>                                                                                    
                                  </div>                                                    
                                </div>
                              </div>
                            </div>
                        </div>                        
                      </td>
          
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="d-flex justify-content-center mt-3 mb-3">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev">
                  <span class="fas fa-chevron-left"></span>
                </button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next">
                  <span class="fas fa-chevron-right"> </span>
                </button>
              </div>
            </div>
          </div>

      </div>
  </div>
</div>






    


@endsection