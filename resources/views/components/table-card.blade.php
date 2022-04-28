<div class="card pt-0 my-0">
  @isset($cardHeader)
      <div class="card-header">
        <div class="row flex-between-end">
          <div class="col-auto align-self-center">
            <h5 class="mb-0" data-anchor="data-anchor" id="pagination-with-numbering">{{ $cardHeader }}</h5>
          </div>
        </div>
      </div>
  @endisset
    <div class="card-body">
      <div class="tab-content">
        <div
          class="tab-pane preview-tab-pane active p-0"
          role="tabpanel"
        >
          <div class="card shadow-none">
            <div class="card-body p-0 pb-3">
              @isset ($tableOptions)    
              <div
                class="d-flex align-items-center justify-content-end mb-3 mx-5 gap-2"
              >
                {{ $tableOptions }}
              </div>
              @endisset
              <!-- Mas pequeño ??? fs--1 -->
              <div {!! $data ?? "" !!}>
                <div class="table-responsive scrollbar {{ ($align ?? false) ? 'text-center' : '' }}">
                  <table class="table mb-0 table-striped fs--1 mb-0">
                    {{ $tableContent }}
                  </table>
                </div>
                @isset($pagination)
                  <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous"
                        data-list-pagination="prev" disabled="">
                        <span class="fas fa-chevron-left"></span>
                    </button>
                    <ul class="pagination mb-0">
                        <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button>
                        </li>
                        <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                        <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                    </ul>
                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                        data-list-pagination="next">
                        <span class="fas fa-chevron-right"></span>
                    </button>
                  </div>
                @endisset
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>