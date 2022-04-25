@extends('welcome')
<link rel="stylesheet" href="css/InicioAlumno.css">
@section('content')



<div class="d-flex flex-column bd-highlight mb-3">
    <div class="p-2 bd-highlight">

        <div class="d-grid gap-2">


            <section class="carousel mt-0 py-0 position-static">  

              <p class="d-grid gap-2">                     
                  <button 
                  class="btn btn-primary notification-indicator notification-indicator-danger" 
                  type="button" 
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseExample" 
                  aria-expanded="false" 
                  aria-controls="collapseExample">
                    AVISOS
                </button>
        
                
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body p-1 m-1">
          
                    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-1 light">
                        <div class="carousel-inner">

                            <div class="carousel-item active" data-bs-interval="10000">
                                <img class="carousel-image d-block w-100 h-100 justify-content-center" style="object-fit: cover; object-position: 10px; max-height: 400px" src="../../assets/img/generic/2.jpg" alt="First slide" />

                                <div class="badge carousel-caption text-wrap p-0 m-0" style="font-size: 2vw; margin: auto;">
                                        <h6 class="text-white">
                                            Estimado ANDRES JAVIER CAMACHO:
                                        </h6>
                                        
                                       
                                        <p class="text-white">Si estás interesado en participar en el proceso de asignación de EXENCIÓN DE PAGO POR EXCELENCIA MAYO - AGOSTO 2022, 
                                                ya puedes consultar la convocatoria en la siguiente liga:</p>
                                       

                                        
                                        <a class="btn btn-outline-primary me-1 btn-sm btn-block" style="margin: auto;" type="button">Consultar Convocatoria</a>
                                          
                                        
                                </div>
                            </div>

                            <div class="carousel-item" data-bs-interval="10000">
                                <img class="carousel-image d-block w-100 h-100 justify-content-center" style="object-fit: cover; object-position: 10px; max-height: 400px" src="../../assets/img/generic/3.jpg" alt="First slide" />

                                <div class="badge carousel-caption text-wrap p-0 m-0" style="font-size: 2vw; margin: auto;">
                                        <h6 class="text-white">
                                            Estimado ANDRES JAVIER CAMACHO:
                                        </h6>
                                        <p class="text-white">Si estás interesado en participar en el proceso de asignación de EXENCIÓN DE PAGO POR EXCELENCIA MAYO - AGOSTO 2022, 
                                            ya puedes consultar la convocatoria en la siguiente liga:</p>

                                        
                                        <a class="btn btn-outline-primary me-1 btn-sm btn-block" style="margin: auto;" type="button">Consultar Convocatoria</a>
                                          
                                        
                                </div>
                            </div>

                            <div class="carousel-item" data-bs-interval="10000">
                                <img class="carousel-image d-block w-100 h-100 justify-content-center" style="object-fit: cover; object-position: 10px; max-height: 400px" src="../../assets/img/generic/4.jpg" alt="First slide" />

                                <div class="badge carousel-caption text-wrap p-0 m-0" style="font-size: 2vw; margin: auto;">
                                        <h6 class="text-white">
                                            Estimado ANDRES JAVIER CAMACHO:
                                        </h6>
                                        <p class="text-white">Si estás interesado en participar en el proceso de asignación de EXENCIÓN DE PAGO POR EXCELENCIA MAYO - AGOSTO 2022, 
                                            ya puedes consultar la convocatoria en la siguiente liga:</p>

                                        
                                        <a class="btn btn-outline-primary me-1 btn-sm btn-block" style="margin: auto;" type="button">Consultar Convocatoria</a>
                                          
                                        
                                </div>
                            </div>


                            <div class="carousel-item" data-bs-interval="10000">
                                <img class="carousel-image d-block w-100 h-100 justify-content-center" style="object-fit: cover; object-position: 10px; max-height: 400px" src="../../assets/img/generic/3.jpg" alt="First slide" />

                                <div class="badge carousel-caption text-wrap p-0 m-0" style="font-size: 2vw; margin: auto;">
                                        <h6 class="text-white">
                                            Estimado ANDRES JAVIER CAMACHO:
                                        </h6>
                                        <p class="text-white">Si estás interesado en participar en el proceso de asignación de EXENCIÓN DE PAGO POR EXCELENCIA MAYO - AGOSTO 2022, 
                                            ya puedes consultar la convocatoria en la siguiente liga:</p>

                                        
                                        <a class="btn btn-outline-primary me-1 btn-sm btn-block" style="margin: auto;" type="button">Consultar Convocatoria</a>
                                          
                                        
                                </div>
                            </div>

                           
                        </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        

                        

                      </div>
                
              </div>
            </section>

        </div>
</div>

<ul class="nav nav-tabs mb-3 nav-fill" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">

        <span class="fas fa-info-circle text-primary fa-1x"></span>        
          Información Importante
          
        </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">

        <span class="fas fa-book text-primary fa-1x"></span>
          Servicios Bibliotecarios
          
        </button>
    </li>
    
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <div class="d-flex flex-column bd-highlight mb-3">

            <div class="p-2 bd-highlight mx-3">
                <div class="row">
                    <div class="col-sm  mt-3">
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/1.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Ver Calendario</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm  mt-3">
        
        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/2.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Catálogo de Cuotas</a>
                                </div>
                            </div>
                        </div>
        
        
                    </div>
                    <div class="col-sm  mt-3">
                    
                    
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/3.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Manual Alumnos SII</a>
                                </div>
                            </div>
                        </div>
        
        
                    </div>    
                    <div class="col-sm  mt-3">
                        
                    
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/4.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Movilidad Académica</a>
                                </div>
                            </div>
                        </div>
                    
                    
                    </div> 
                </div>
            </div>
            <div class="p-2 bd-highlight mx-3">
                <div class="row">
                    <div class="col-sm  mt-3">
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/5.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Currículum</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm  mt-3">
        
        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/6.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Estancias y Estadías</a>
                                </div>
                            </div>
                        </div>
        
        
                    </div>
                    <div class="col-sm  mt-3">
        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/7.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Trámite de Seguro Facultativo</a>
                                </div>
                            </div>
                        </div>
                    
                    
                    </div>    
                    <div class="col-sm  mt-3">
        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/8.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Movilidad Académica</a>
                                </div>
                            </div>
                        </div>
                        
                    
                    </div> 
                  </div>
                </div>
            </div>

    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


        <div class="p-2 bd-highlight mx-3">
                <div class="row">
                    <div class="col-sm  mt-3">
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/5.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href="chrome-extension://efaidnbmnnnibpcajpcglclefindmkaj/viewer.html?pdfurl=https%3A%2F%2Fsistemaintegral.upq.edu.mx%2Fuploads%2Fdocumentos%2FN_ReglamentoBiblioteca.pdf&clen=713072&chunk=true">
                                        Lineamientos Biblioteca UPQ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm  mt-3">
        
        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/6.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">
                                        Biblioteca Digital ECEST
                                    </a>
                                </div>
                            </div>
                        </div>
        
        
                    </div>
                    <div class="col-sm  mt-3">
        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/7.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">
                                        Base de Datos <code>EBSCO Host</code> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                    
                    </div>    
                    <div class="col-sm  mt-3">
        
                        <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                            <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/8.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="text-center" style="width: 100%">
                                    <a class="btn btn-falcon-primary me-1 mb-1" href=". . .">Catálogo en línea</a>
                                </div>
                            </div>
                        </div>
                        
                    
                    </div> 
                  </div>
                </div>
        </div>


    </div>
   



                




    

    





    



@endsection
