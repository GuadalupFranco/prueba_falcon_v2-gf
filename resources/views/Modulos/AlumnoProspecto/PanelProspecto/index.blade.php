@extends('welcome')

@section('content')

  <div class="d-flex justify-content-center mt-2">
        <div class="p-2 w-100">
          <h1 class="text-start">Panel de Inicio</h1>
        </div>
        <div class="p-2 flex-shrink-1 justify-content-md-center">
          <h5><span class="badge badge-soft-warning mt-3">Estatus: Prospecto</span></h5>          
        </div>
  </div>
      

  <div class="row d-flex flex-wrap d-block">
          
            <div class="col">

              <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                  <div>
                      <strong><span class="fas fa-exclamation-triangle text-warning fa-1x me-2"></span>Mensaje Importante</strong>                        
                        <ul class="mt-3">
                            <li>Falta hace el pago de aspirante</li>
                            <li>Falta esto</li>
                            <li>Falta esto</li>
                            <li>Falta esto</li>
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

                </div>

                <!-- Grupo de cartas -->
                <div class="d-flex flex-wrap mt-4">
                  <div class="p-2">
                      <div class="row row-cols-1 row-cols-md-4 g-4">
                        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                          <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/1.jpg" alt="Card image">
                          </div>
                          <div class="card-img-overlay d-flex align-items-center">
                              <div class="text-center" style="width: 100%">
                                  <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Ver Calendario</a>
                              </div>
                          </div>
                        </div>  

                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                          <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/2.jpg" alt="Card image">
                          </div>
                          <div class="card-img-overlay d-flex align-items-center">
                              <div class="text-center" style="width: 100%">
                                  <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Curso de Inducción</a>
                              </div>
                          </div>
                        </div> 

                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                          <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/3.jpg" alt="Card image">
                          </div>
                          <div class="card-img-overlay d-flex align-items-center">
                              <div class="text-center" style="width: 100%">
                                  <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Ir a Pagos</a>
                              </div>
                          </div>
                        </div> 

                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                          <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/4.jpg" alt="Card image">
                          </div>
                          <div class="card-img-overlay d-flex align-items-center">
                              <div class="text-center" style="width: 100%">
                                  <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Subir Documentos</a>
                              </div>
                          </div>
                        </div> 

                      </div>
                  </div>
                  <div class="p-2 mt-5">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                      
                      <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                        <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/5.jpg" alt="Card image">
                        </div>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="text-center" style="width: 100%">
                                <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Completar Datos</a>
                            </div>
                        </div>
                      </div>  

                      <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                        <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/6.jpg" alt="Card image">
                        </div>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="text-center" style="width: 100%">
                                <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Encuesta Orientación Educativa</a>
                            </div>
                        </div>
                      </div> 

                      <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                        <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/7.jpg" alt="Card image">
                        </div>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="text-center" style="width: 100%">
                                <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Encuesta Socio-Económica</a>
                            </div>
                        </div>
                      </div> 

                      <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                        <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/8.jpg" alt="Card image">
                        </div>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="text-center" style="width: 100%">
                                <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Status Proceso</a>
                            </div>
                        </div>
                      </div> 

                    </div>
                  </div>
              </div>
  </div>
            




@endsection
