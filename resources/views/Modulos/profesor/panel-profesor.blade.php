@extends('welcome')

@section('content')

<h1 class=" text-center mt-4 mb-4">Panel Profesor </h1>


<div class="card-group">

  <div class="row">
    <div class="col-sm-6">
    <div class="card m-2" >
    <img src="assets\img\generic\4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Grupos Asignados</h5>
      <p class="card-text"><small class="text-muted">Consulta los grupos del curso induccion</small></p>
    </div>
    <div class="card-footer">
    <a href="gruposProfesores" class="btn btn-primary">Acceder</a>
    </div>
  </div>

    </div>
 
    <div class="col-sm-6">
    <div class="card m-2">
    <img src="assets\img\generic\5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bachillerato Avanzado</h5>
      <p class="card-text"><small class="text-muted">Consulta los grupos del curso Bachillerato Avanzado</small></p>
    </div>
    <div class="card-footer">
    <a href="gruposProfesoresBA" class="btn btn-primary">Acceder</a>
    </div>

    </div>

  </div>





 


  </div>

 


</div>



@stop