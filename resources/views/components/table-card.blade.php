<div class="card pt-0 my-0">
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
              <div {!! $order ?? "" !!}>
                <div class="table-responsive scrollbar {{ ($align ?? false) ? 'text-center' : '' }}">
                  <table class="table mb-0 table-striped">
                    {{ $tableContent }}
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>