<div
  class="modal fade"
  tabindex="-1"
  id="{{ $id }}"
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg p-1" role="document">
    <div class="modal-content">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button
          class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="m-0">{{ $title }}</h4>
        </div>
        {{ $content }}
      </div>
      <div class="modal-footer">
        <button
          class="btn btn-falcon-danger"
          type="button"
          data-bs-dismiss="modal"
        >
          Cerrar
        </button>
        @isset($action)    
        <button class="btn btn-falcon-success" type="button">
            {{ $title }}
        </button>
        @endisset
      </div>
    </div>
  </div>
</div>