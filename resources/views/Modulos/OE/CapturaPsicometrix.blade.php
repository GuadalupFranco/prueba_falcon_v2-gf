@extends('welcome')

@section('content')
  <h2>Resultados Psicometrix</h2>
  <form>
    <div class="card mb-3">
      <div class="card-body bg-light">
        <div class="tab-content">
          <div>
            <div
              class="dropzone dropzone-single p-0"
              data-dropzone="data-dropzone"
              data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'
            >
              <div class="fallback">
                <input type="file" name="file" />
              </div>
              <div class="dz-preview dz-preview-single">
                <div class="dz-preview-cover dz-complete">
                  <img
                    class="dz-preview-img"
                    src="/assets/img/generic/image-file-2.png"
                    alt="..."
                    data-dz-thumbnail=""
                  /><a
                    class="dz-remove text-danger"
                    href="#!"
                    data-dz-remove="data-dz-remove"
                    ><span class="fas fa-times"></span
                  ></a>
                  <div class="dz-progress">
                    <span
                      class="dz-upload"
                      data-dz-uploadprogress=""
                    ></span>
                  </div>
                  <div class="dz-errormessage m-1">
                    <span
                      data-dz-errormessage="data-dz-errormessage"
                    ></span>
                  </div>
                </div>
                <div class="dz-progress">
                  <span
                    class="dz-upload"
                    data-dz-uploadprogress=""
                  ></span>
                </div>
              </div>
              <div
                class="dz-message"
                data-dz-message="data-dz-message"
              >
                <div class="dz-message-text">
                  <img
                    class="me-2"
                    src="/assets/img/icons/cloud-upload.svg"
                    width="25"
                    alt=""
                  />Drop your file here
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="d-flex flex-row-reverse mt-3">
      <li>Archivo .xlsx o .xls</li>
    </ul>
    <button type="submit" class="btn btn-success float-end">
      Subir resultados
    </button>
  </form>
@endsection

@section('extra-scripts')
  <script
    src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"
  ></script>    
@endsection

@section('extra-styles')
  <link
  rel="stylesheet"
  href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css"
  type="text/css"
  />
  <link
    href="/assets/css/theme.min.css"
    rel="stylesheet"
    id="style-default"
  />
@endsection