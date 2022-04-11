<!-- modal -->
<div class="modal fade vh-100" id="modalPago" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
aria-labelledby="modalPago" aria-hidden="true">
<div class="modal-dialog modal-dialog-center modal-lg mt-6" role="document">
    <div class="modal-content border-0">
        <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                data-bs-dismiss="modal" aria-label="close"></button>
        </div>
        <div class="modal-body p-0">
            <div class="bg-light rounded-top-lg py-3 ps-4 pe-6 text-center">
                <i class="fas fa-money-check-alt fs-5"></i>
                <h4 class="my-3" id="staticbackdroplabel">Portal de Pagos</h4>
                <h5 class="-subtitle badge rounded-pill bg-{{ $status[1] }}">{{ $status[0] }}</h5>
            </div>
            <div class="p-4 pb-0">
                <div class="mb-3 text-center">
                    @if ($status[0] == 'Pagado')
                        <p>Gracias por realizar tu pago</p>
                    @else
                        <p>Como parte de tu proceso de admision serás dirigido al portal del banco para que puedas
                            realizar tu pago.</p>
                    @endif

                </div>
            </div>
            <div class="modal-footer">
                @if ($status[0] != 'Pagado')
                    <a href="#"><button class="btn btn-success" type="button">Ir al Portal de pago</button></a>
                @endif
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">cerrar</button>
            </div>
        </div>
    </div>
</div>
</div>
