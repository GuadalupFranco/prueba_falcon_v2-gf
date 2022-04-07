@extends('welcome')

@section('content')

<!-- Seccion de formulario -->
<div class="card mb-3">
  <div class="card-header">
    <h5 class="mb-0">Asignación de profesores &#62; Curso Inducción</h5>
  </div>
  <div class="card-body bg-light">
    <form>
      <div class="row gx-3">
        <div class="col-sm-3"><label class="form-label" for="grupo">Grupo</label><select class="form-select">
            <option>S171</option>
            <option selected>S172</option>
            <option>S173</option>
            <option>S174</option>
            <option>S175</option>
          </select>
        </div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="aula">Aula</label><input class="form-control" type="text" placeholder="C102" readonly="readonly"></div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="aspirantes">Total de aspirantes</label><input class="form-control" type="text" placeholder="30" readonly="readonly"></div>
        <div class="col-12">
          <div class="border-dashed-bottom my-3"></div>
        </div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="materia1">Materia 1</label><input class="form-control" type="text" placeholder="Desarrollo Humano" readonly="readonly"></div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="horario">Horario</label><input class="form-control" type="text" placeholder="00:00" readonly="readonly"></div>
        <div class="col-sm-6"><label class="form-label" for="profesor">Profesor/a</label>
          <select class="form-select">
            <option selected disabled>Seleccione</option>
            <option>Juan López</option>
            <option>Marta Jiménez</option>
            <option>Rebeca García</option>
            <option>José Martínez</option>
          </select>
        </div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="materia1">Materia 2</label><input class="form-control" type="text" placeholder="Inglés" readonly="readonly"></div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="horario">Horario</label><input class="form-control" type="text" placeholder="00:00" readonly="readonly"></div>
        <div class="col-sm-6"><label class="form-label" for="profesor">Profesor/a</label>
          <select class="form-select">
            <option selected disabled>Seleccione</option>
            <option>Juan López</option>
            <option>Marta Jiménez</option>
            <option>Rebeca García</option>
            <option>José Martínez</option>
          </select>
        </div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="materia1">Materia 3</label><input class="form-control" type="text" placeholder="Matemáticas" readonly="readonly"></div>
        <div class="col-sm-3 mb-3"><label class="form-label" for="horario">Horario</label><input class="form-control" type="text" placeholder="00:00" readonly="readonly"></div>
        <div class="col-sm-6"><label class="form-label" for="profesor">Profesor/a</label>
          <select class="form-select">
            <option selected disabled>Seleccione</option>
            <option>Juan López</option>
            <option>Marta Jiménez</option>
            <option>Rebeca García</option>
            <option>José Martínez</option>
          </select>
        </div>
      </div>
      <div class="d-flex col-12">
        <button class="btn btn-primary mt-3" type="button">
          </span>Actualizar
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Seccion de horario -->
<div class="card mb-3">
  <div class="card-header">
    <h5 class="mb-0">Horario</h5>
  </div>
  <div class="card-body p-0 bg-light mb-3">
    <div class="p-3 d-flex align-items-center justify-content-end col-sm-3">
      <select class="form-select">
        <option>S171</option>
        <option selected>S172</option>
        <option>S173</option>
        <option>S174</option>
        <option>S175</option>
      </select>
    </div>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-md mb-0">
        <thead class="text-center text-black bg-200">
          <tr>
            <th scope="col"></th>
            <th scope="col">09/04</th>
            <th scope="col">16/04</th>
            <th scope="col">23/04</th>
            <th scope="col">30/04</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr class="align-middle">
            <th class="text-wrap">07:00</td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROGRAMA EDUCATIVO</span>
              <label class="mb-0">DIRECCION CARRERA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
            </td>
          </tr>
          <tr class="align-middle">
            <th class="text-wrap">08:00</th>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROGRAMA EDUCATIVO</span>
              <label class="mb-0">DIRECCION CARRERA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
            </td>
          </tr>
          <tr class="align-middle">
            <th class="text-wrap">09:00</th>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROGRAMA EDUCATIVO</span>
              <label class="mb-0">DIRECCION CARRERA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
              <label class="mb-0">MARTA JIMÉNEZ</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
              <label class="mb-0">MARTA JIMÉNEZ</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
              <label class="mb-0">MARTA JIMÉNEZ</label>
            </td>
          </tr>
          <tr class="align-middle">
            <th class="text-wrap">10:00</th>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROGRAMA EDUCATIVO</span>
              <label class="mb-0">DIRECCION CARRERA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
              <label class="mb-0">MARTA JIMÉNEZ</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
              <label class="mb-0">MARTA JIMÉNEZ</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
              <label class="mb-0">MARTA JIMÉNEZ</label>
            </td>
          </tr>
          <tr class="align-middle">
            <th class="text-wrap">11:00</th>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROGRAMA EDUCATIVO</span>
              <label class="mb-0">DIRECCION CARRERA</label>
            </td>
            <td class="text-wrap"></td>
            <td class="text-wrap"></td>
            <td class="text-wrap"></td>
          </tr>
          <tr class="align-middle">
            <th class="text-wrap">12:00</td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROGRAMA EDUCATIVO</span>
              <label class="mb-0">DIRECCION CARRERA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
              <label class="mb-0">REBECA GARCÍA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
              <label class="mb-0">REBECA GARCÍA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
              <label class="mb-0">REBECA GARCÍA</label>
            </td>
          </tr>
          <tr class="align-middle">
            <th class="text-wrap">13:00</th>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROGRAMA EDUCATIVO</span>
              <label class="mb-0">DIRECCION CARRERA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
              <label class="mb-0">REBECA GARCÍA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
              <label class="mb-0">REBECA GARCÍA</label>
            </td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
              <label class="mb-0">REBECA GARCÍA</label>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection