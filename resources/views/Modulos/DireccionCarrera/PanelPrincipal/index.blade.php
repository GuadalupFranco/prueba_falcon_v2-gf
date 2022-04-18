@extends('welcome')

@section('content')

<div class="row">
    <div class="col-sm-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/3.jpg" alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Consulta grupos</h5>
                <!--<p class="card-text"></p>-->
            </div>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <a class="card-link" href="{{ route('ConsultaGruposCI.index') }}">Curso de Inducción</a>
                </li>
                <li class="list-group-item">
                    <a class="card-link" href="{{ route('ConsultaGruposBA.index') }}">Bachillerato Avanzado</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card overflow-hidden" style="width: 20rem;">
            <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/7.jpg" alt="Card image cap" /></div>
            <div class="card-body">
                <h5 class="card-title">Asigna profesores</h5>
                <!--<p class="card-text"></p>-->
            </div>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <a class="card-link" href="{{ route('AsignaProfesoresCI.index') }}">Curso de Inducción</a>
                </li>
                <li class="list-group-item">
                    <a class="card-link" href="{{ route('AsignaProfesoresBA.index') }}">Bachillerato Avanzado</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection