@extends('welcome')

@section('content')
    

<div class="container">
  <div class="card mb-3">
      <div class="card-header">
          <!-- Titulo de formulario -->
          <h5 class="text-center mb-0">Formato de Pre-registro</h5>
      </div>
      <div class="card-body bg-light">
          <form method="" action="" class="g-3 needs-validation" novalidate>

              @csrf


              

              <div class="container form group">
                  <div class="row">
                      <div class="col">
                          <!-- División Información Personal -->
                          <div class="informacionPersonal">
                             


                              <div class="container-fluid">
                                <h4 class="">Información Personal</h4>
                                  <div class="row-fluid">
                                      <div class="col">
                                          <div class="col-12 mb-3">
                                              <label class="form-label"
                                                  for="Nombre">Nombre(s)</label>
                                                  <input required class="form-control"
                                                  style="text-transform:uppercase" id="Nombre" type="text"
                                                  placeholder="" required></div>
                                      </div>
                                      <div class="col">
                                          <div class="col-12 mb-3"><label class="form-label"
                                                  for="ApellidoPaterno">Apellido
                                                  Paterno</label><input required class="form-control" id="ApellidoPaterno"
                                                  type="text" placeholder="" style="text-transform:uppercase">
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="col-12 mb-3"><label class="form-label"
                                                  for="ApellidoMaterno">Apellido
                                                  Materno</label><input required class="form-control" id="ApellidoMaterno"
                                                  type="text" placeholder="" style="text-transform:uppercase">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row-fluid">
                                      <div class="col">
                                          <div class="col-12 mb-3"><label class="form-label"
                                                  for="FechaNacimiento">Fecha de
                                                  nacimiento</label>
                                              <input required class="form-control" id="FechaNacimiento" type="date"
                                                  placeholder="">
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="col-12 mb-3"><label class="form-label" for="sexo">Sexo</label>
                                              <select class="form-select" id="sexo" required>
                                                  <option selected disabled value="">Escoger . . .</option>
                                                  <option value="Masculino">Masculino</option>
                                                  <option value="Femenino">Femenino</option>
                                                  <option value="Indistinto">Prefiero no decir</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <!-- Columna Opciones educativas -->
                      <div class="col">
                          <div class="opcionesEducativas gx-2">
                              <h4>Opciones Educativas</h4>
                              <h6>Eliga las 2 carreras en las que estes interesado en orden a tu preferencia:</h6>
                              <div class="mt-2"><label class="form-label" name="PrimeraOpcion">Primera Opción</label>
                                  <select class="form-select" id="PrimeraOpcion" required>
                                      <option selected disabled value="">Escoger . . .</option>
                                      <option value="Sistemas">SISTEMAS</option>
                                      <option value="Redes">REDES Y TELECOMUNICACIONES</option>
                                      <option value="AUTOMOTRIZ">AUTOMOTRIZ</option>
                                      <option value="Indistinto">MANUFACTURA</option>
                                      <option value="Indistinto">MECATRÓNICA</option>
                                      <option value="Indistinto">ADMINISTRACIÓN Y GESTIÓN</option>
                                      <option value="Indistinto">NEGOCIOS</option>
                                  </select>
                              </div>


                              <div class="mt-3"><label class="form-label" name="PrimeraOpcion">Segunda Opción</label>
                                  <select class="form-select" id="PrimeraOpcion" required>
                                      <option selected disabled value="">Escoger . . .</option>
                                      <option value="Sistemas">SISTEMAS</option>
                                      <option value="Redes">REDES Y TELECOMUNICACIONES</option>
                                      <option value="AUTOMOTRIZ">AUTOMOTRIZ</option>
                                      <option value="Indistinto">MANUFACTURA</option>
                                      <option value="Indistinto">MECATRÓNICA</option>
                                      <option value="Indistinto">ADMINISTRACIÓN Y GESTIÓN</option>
                                      <option value="Indistinto">NEGOCIOS</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col mt-3">

                          <div class="text-danger mb-3">
                              <span class="fas fa-exclamation-triangle fs-1 text-warning"></span>
                              Los siguientes datos son muy importantes para ponernos en contacto contigo
                          </div>

                          <div class="container">
                              <div class="row">
                                  <div class="col">
                                      <div class="col-13 mb-3"><label class="form-label" for="correo">Correo
                                              electrónico</label><input required class="form-control" id="ApellidoPaterno"
                                              type="email" placeholder="Ingrese su correo" required></div>
                                  </div>
                                  <div class="col">
                                      <div class="col-12 mb-3"><label class="form-label"
                                              for="Confirmarcorreo">Confirmar correo
                                              electrónico</label><input required class="form-control" id="ApellidoPaterno"
                                              type="email" placeholder="Ingrese su correo" required></div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col">
                                      <div class="col-12 mb-3"><label class="form-label" for="number">Telefono
                                              casa</label><input required class="form-control" id="ApellidoPaterno"
                                              type="number" placeholder="Ingrese su numero"></div>
                                  </div>
                                  <div class="col">
                                      <div class="col-12 mb-3">
                                        <label class="form-label" for="number">Telefono celular</label>
                                        <input required class="form-control" id="ApellidoPaterno" type="number" placeholder="Ingrese su numero">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>


                      <!-- División Institución de procedencia -->
                      <div class="container mt-4 mb-4">
                          <div class="row">
                              <h4>Institución de procedencia</h4>
                              <div class="col">
                                  <div class="col-12 mb-3"><label class="form-label"
                                          for="institucion">Institución</label><input required class="form-control"
                                          id="institucion" type="text" placeholder=". . ." disabled></div>
                              </div>
                          </div>


                          <!-- Modal Buscar institución -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#myModal">
                              Buscar Institución
                          </button>


                          <!-- The Modal -->
                          <div class="modal" id="myModal">
                              <div class="modal-dialog modal-xl">
                                  <div class="modal-content">

                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                          <h4 class="modal-title">Buscar Institución</h4>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                      </div>

                                      <!-- Modal body -->
                                      <div class="modal-body">

                                          <div class="container">
                                              <div class="row d-flex flex-wrap">
                                                  <div class="col-sm">
                                                      <div class="row">
                                                          <div class="col mb-4">
                                                              <!-- Select Estado -->
                                                              <div class="mt-3">
                                                                  <select class="form-select" id="PrimeraOpcion" required>
                                                                      <option disabled value="">Estado</option>
                                                                      <option value="AGUASCALIENTES">AGUASCALIENTES
                                                                      </option>
                                                                      <option value="BAJA CALIFORNIA">BAJA CALIFORNIA
                                                                      </option>
                                                                      <option value="BAJA CALIFORNIA SUR">BAJA
                                                                          CALIFORNIA SUR</option>
                                                                      <option value="CAMPECHE">CAMPECHE</option>
                                                                      <option value="CHIAPAS">CHIAPAS</option>
                                                                      <option value="CHIHUAHUA">CHIHUAHUA</option>
                                                                      <option value="COAHUILA">COAHUILA</option>
                                                                      <option value="COLIMA">COLIMA</option>
                                                                      <option value="DISTRITO FEDERAL">DISTRITO
                                                                          FEDERAL</option>
                                                                      <option value="DURANGO">DURANGO</option>
                                                                      <option value="EXTRANJERO">EXTRANJERO</option>
                                                                      <option value="GUANAJUATO">GUANAJUATO</option>
                                                                      <option value="GUERRERO">GUERRERO</option>
                                                                      <option value="HIDALGO">HIDALGO</option>
                                                                      <option value="JALISCO">JALISCO</option>
                                                                      <option value="MEXICO">MEXICO</option>
                                                                      <option value="MICHOACAN">MICHOACAN</option>
                                                                      <option value="MORELOS">MORELOS</option>
                                                                      <option value="NAYARIT">NAYARIT</option>
                                                                      <option value="NUEVO LEON">NUEVO LEON</option>
                                                                      <option value="OAXACA">OAXACA</option>
                                                                      <option value="PUEBLA">PUEBLA</option>
                                                                      <option value="QUERETARO" selected="selected">
                                                                          QUERETARO</option>
                                                                      <option value="QUINTANA ROO">QUINTANA ROO
                                                                      </option>
                                                                      <option value="SAN LUIS POTOSI">SAN LUIS POTOSI
                                                                      </option>
                                                                      <option value="SINALOA">SINALOA</option>
                                                                      <option value="SONORA">SONORA</option>
                                                                      <option value="TABASCO">TABASCO</option>
                                                                      <option value="TAMAULIPAS">TAMAULIPAS</option>
                                                                      <option value="TLAXCALA">TLAXCALA</option>
                                                                      <option value="VERACRUZ">VERACRUZ</option>
                                                                      <option value="YUCATAN">YUCATAN</option>
                                                                      <option value="ZACATECAS">ZACATECAS</option>
                                                                      <option value="Extranjero">Extranjero</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                          <div class="w-100"></div>
                                                          <div class="col">
                                                              <!-- Select Municipio -->
                                                              <div class="mt-3 mb-3">
                                                                  <select class="form-select" id="PrimeraOpcion" required>
                                                                      <option selected disabled value="">Municipio</option>
                                                                      <option value="">1</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm">
                                                      <!-- Mensaje de alerta -->
                                                      <div class="alert alert-dark" role="alert">
                                                          <div class="mb-2">
                                                              <span
                                                                  class="fas fa-exclamation-triangle fs-1 text-warning">
                                                              </span>
                                                              Mensaje importante
                                                          </div>
                                                          <p>
                                                              Si no encuentra la institución educativa en el catálogo,
                                                              por favor
                                                              comuniquese a la Dirección de Servicios Estudiantiles de
                                                              la Universidad
                                                              Politécnica de Querétaro al 1019000 EXT. 353 para
                                                              cargarla al sistema.
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Tabla de instituciones -->
                                          <div class="container" style="overflow-x:auto;">
                                              <table
                                                  class="table table-dashboard mb-0 table-borderless fs--1 border-200"">
                        <thead class=" bg-light">
                                                  <tr class="text-900">
                                                      <th>#</th>
                                                      <th class="">Clave CCT</th>
                                                      <th class="">Nombre de la escuela</th>
                                                      <th class="">Dirección</th>
                                                      <th class="">Código postal</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr class="border-bottom border-200">
                                                          <td>
                                                              <div
                                                                  class="d-flex align-items-center position-relative">
                                                                  <img class="rounded-1 border border-200"
                                                                      src="assets/img/products/12.png" width="60"
                                                                      alt="">
                                                                  <div class="flex-1 ms-3">
                                                                      <h6 class="mb-1 fw-semi-bold"><a
                                                                              class="text-dark stretched-link"
                                                                              href="#!">Raven
                                                                              Pro</a></h6>
                                                                      <p class="fw-semi-bold mb-0 text-500">Landing
                                                                      </p>
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="align-middle text-end fw-semi-bold">$1311</td>
                                                          <td class="align-middle pe-card">
                                                              <div class="d-flex align-items-center">
                                                                  <div class="progress me-3 rounded-3 bg-200"
                                                                      style="height: 5px;width:80px">
                                                                      <div class="progress-bar rounded-pill"
                                                                          role="progressbar" style="width: 39%;"
                                                                          aria-valuenow="39" aria-valuemin="0"
                                                                          aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="fw-semi-bold ms-2">39%</div>
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr class="border-bottom border-200">
                                                          <td>
                                                              <div
                                                                  class="d-flex align-items-center position-relative">
                                                                  <img class="rounded-1 border border-200"
                                                                      src="assets/img/products/10.png" width="60"
                                                                      alt="">
                                                                  <div class="flex-1 ms-3">
                                                                      <h6 class="mb-1 fw-semi-bold"><a
                                                                              class="text-dark stretched-link"
                                                                              href="#!">Boots4</a>
                                                                      </h6>
                                                                      <p class="fw-semi-bold mb-0 text-500">Portfolio
                                                                      </p>
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="align-middle text-end fw-semi-bold">$860</td>
                                                          <td class="align-middle pe-card">
                                                              <div class="d-flex align-items-center">
                                                                  <div class="progress me-3 rounded-3 bg-200"
                                                                      style="height: 5px;width:80px">
                                                                      <div class="progress-bar rounded-pill"
                                                                          role="progressbar" style="width: 26%;"
                                                                          aria-valuenow="26" aria-valuemin="0"
                                                                          aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="fw-semi-bold ms-2">26%</div>
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr class="border-bottom border-200">
                                                          <td>
                                                              <div
                                                                  class="d-flex align-items-center position-relative">
                                                                  <img class="rounded-1 border border-200"
                                                                      src="assets/img/products/11.png" width="60"
                                                                      alt="">
                                                                  <div class="flex-1 ms-3">
                                                                      <h6 class="mb-1 fw-semi-bold"><a
                                                                              class="text-dark stretched-link"
                                                                              href="#!">Falcon</a>
                                                                      </h6>
                                                                      <p class="fw-semi-bold mb-0 text-500">Admin</p>
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="align-middle text-end fw-semi-bold">$539</td>
                                                          <td class="align-middle pe-card">
                                                              <div class="d-flex align-items-center">
                                                                  <div class="progress me-3 rounded-3 bg-200"
                                                                      style="height: 5px;width:80px">
                                                                      <div class="progress-bar rounded-pill"
                                                                          role="progressbar" style="width: 16%;"
                                                                          aria-valuenow="16" aria-valuemin="0"
                                                                          aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="fw-semi-bold ms-2">16%</div>
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr class="border-bottom border-200">
                                                          <td>
                                                              <div
                                                                  class="d-flex align-items-center position-relative">
                                                                  <img class="rounded-1 border border-200"
                                                                      src="assets/img/products/14.png" width="60"
                                                                      alt="">
                                                                  <div class="flex-1 ms-3">
                                                                      <h6 class="mb-1 fw-semi-bold"><a
                                                                              class="text-dark stretched-link"
                                                                              href="#!">Slick</a>
                                                                      </h6>
                                                                      <p class="fw-semi-bold mb-0 text-500">Builder
                                                                      </p>
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="align-middle text-end fw-semi-bold">$343</td>
                                                          <td class="align-middle pe-card">
                                                              <div class="d-flex align-items-center">
                                                                  <div class="progress me-3 rounded-3 bg-200"
                                                                      style="height: 5px;width:80px">
                                                                      <div class="progress-bar rounded-pill"
                                                                          role="progressbar" style="width: 10%;"
                                                                          aria-valuenow="10" aria-valuemin="0"
                                                                          aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="fw-semi-bold ms-2">10%</div>
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <div
                                                                  class="d-flex align-items-center position-relative">
                                                                  <img class="rounded-1 border border-200"
                                                                      src="assets/img/products/13.png" width="60"
                                                                      alt="">
                                                                  <div class="flex-1 ms-3">
                                                                      <h6 class="mb-1 fw-semi-bold"><a
                                                                              class="text-dark stretched-link"
                                                                              href="#!">Reign
                                                                              Pro</a></h6>
                                                                      <p class="fw-semi-bold mb-0 text-500">Agency</p>
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="align-middle text-end fw-semi-bold">$280</td>
                                                          <td class="align-middle pe-card">
                                                              <div class="d-flex align-items-center">
                                                                  <div class="progress me-3 rounded-3 bg-200"
                                                                      style="height: 5px;width:80px">
                                                                      <div class="progress-bar rounded-pill"
                                                                          role="progressbar" style="width: 8%;"
                                                                          aria-valuenow="8" aria-valuemin="0"
                                                                          aria-valuemax="100"></div>
                                                                  </div>
                                                                  <div class="fw-semi-bold ms-2">8%</div>
                                                              </div>
                                                          </td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>


                                          <!-- Modal footer -->
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-danger"
                                                  data-bs-dismiss="modal">Cerrar</button>
                                              <button type="button" class="btn btn-primary">Guardar</button>
                                          </div>

                                      </div>
                                  </div>
                              </div>




                          </div>
                      </div>
                  </div>

              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Envíar</button>
              </div>

          </form>
      </div>
  </div>
</div>


@endsection