@extends('welcome')

@section('content')
<div class="container mx-0 my-0">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
        <h2 class="accordion-header" id="heading1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    Acceso Rápido
            </button>
        </h2>
        <div class="accordion-collapse collapse show px-1 py-1" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample"> 
            <div class="row px-2 py-2">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card overflow-hidden" style="width: 20rem;">
                        <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                                alt="Card image cap" /></div>
                        <div class="card-body">
                            <h5 class="card-title">Administrar periodos</h5>
                            <p>
                                <a class="btn btn-falcon-default mt-2" href="{{route('lista-periodos')}}"
                                    role="button">Ir</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card overflow-hidden" style="width: 20rem;">
                        <div class="card-img-top"><img class="img-fluid" src="../../assets/img/generic/1.jpg"
                                alt="Card image cap" /></div>
                        <div class="card-body">
                            <h5 class="card-title">Administrar tareas</h5>
                            <p>
                                <a class="btn btn-falcon-default mt-2 stretched-link" href="{{route('lista-periodos')}}"
                                    role="button">Ir</a>
                            </p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection