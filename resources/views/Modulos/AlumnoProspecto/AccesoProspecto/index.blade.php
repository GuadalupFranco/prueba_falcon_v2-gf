@extends('welcome')

@section('content')
    
<style>
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
    }
</style>

<main class="main" id="top">
    <div class="container-fluid">
      <div class="row min-vh-100 flex-center g-0">
        <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
          <div class="card overflow-hidden z-index-1">
            <div class="card-body p-0">
              <div class="row g-0 h-100">
                <div class="col-md-5 text-center" style="background: linear-gradient(158.02deg, #FF4646 0%, #1970E2 99.47%);">
                  <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                    <!--/.bg-holder-->
                    <div class="z-index-1 position-relative mb-0">
                        <img src="" alt="">
                        <a class="d-flex flex-center mb-0" href="https://www.upq.mx/"><img class="" src="https://www.upq.mx/assets/logos/logo.svg" alt="" width="100"></a>
                        <a class="font-sans-serif fw-bolder fs-4 d-inline-block text-light" disabled>SIIUPQ</a>
                    </div>
                  </div>
                  <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                    <p class="text-white">Contacto<br><br>
                        Dirección de Servicios Estudiantiles.
                        correo: servicios.estudiantiles@upq.edu.mx
                        (442)-1019000 Ext. 353, 354 y 355.
                    </p>
                  </div>
                </div>
                <div class="col-md-7 d-flex flex-center">
                  <div class="p-4 p-md-5 flex-grow-1">
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <h3>Acceso Prospecto</h3>
                      </div>
                    </div>
                    <form method="" action="" class="needs-validation" novalidate>
                        <div class="mb-3">
                          <label class="form-label" for="card-number">Folio</label>
                          <input class="form-control" type="number" min="10000000" max="999999999" required/>
                        </div>
                      <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-text">CURP</label>
                        </div>
                        <input class="form-control" id="card-password" type="text" required/>
                      </div>
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="card-checkbox" checked="checked" /><label class="form-check-label mb-0" for="card-checkbox">Recordar</label></div>
                        </div>
                        <div class="col-auto"><a class="fs--1" href="https://www.gob.mx/curp/">No te sabes tu CURP?</a></div>
                      </div>
                      <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Iniciar Sesión</button></div>
                    </form>

                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

 


@endsection