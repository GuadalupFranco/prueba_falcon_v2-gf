@php(dd($submodulos))
<div class="col-sm-6 col-lg-4 mb-4">
    <div class="card overflow-hidden" style="width: 20rem;">
        <div class="card-img-top"><img class="img-fluid" src="/assets/img/generic/1.jpg" alt="Card image cap" />
        </div>
        <div class="card-body">
            <h5 class="card-title">Nuevo ingreso</h5>
            <p>
                <a class="btn btn-falcon-default mt-2" data-bs-toggle="collapse" href="#collapseNuevoIngreso"
                    role="button" aria-expanded="false" aria-controls="collapseExample">Módulos</a>
            </p>
            <div class="collapse" id="collapseNuevoIngreso">
                <div class="border p-card rounded">
                    <ul class="list-group list-group-flush">
                        @foreach ($submodulos as $key => $value)
                        <li class="list-group-item">
                            <a class="nav-link p-0" href="app/calendar.html" role="button" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="far fa-address-book text-dark fs-1 me-1"></span>
                                    <span class="nav-link-text ps-1 text-dark">{{ $value }}</span>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>