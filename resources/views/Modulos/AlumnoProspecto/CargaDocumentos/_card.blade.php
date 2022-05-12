<div class="card text-center h-100">
    <img class="card-img-top" src="../../assets/img/generic/4.jpg" alt="">
    <div class="card-body d-flex flex-column justify-content-evenly">
        <h5 class="card-title">
            <span class="card-subtitle badge rounded-pill bg-{{ $data[2] }}">{{ $data[1] }}</span>
            <hr>
            {{ $data[0] }}
        </h5>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#modalLoadFile{{ $index }}">
            Subir Documento
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalLoadFile{{ $index }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="modalLoadFile{{ $index }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    @yield('modal-header')
                    <h4 class="mb-1" id="staticBackdropLabel">Subir {{ $data[0] }}</h4>
                </div>
                @yield('modal-body')
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <div class="alert alert-primary">
                                {{ $data[3] }}
                            </div>
                            <label class="form-label" for="customFile">Recuerda que tu documento debe tener buena
                                calidad y estar en formato .pdf</label>
                            <input class="form-control" id="customFile" type="file" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        @yield('modal-footer')
                        <button class="btn btn-success" type="submit">Guardar</button>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
