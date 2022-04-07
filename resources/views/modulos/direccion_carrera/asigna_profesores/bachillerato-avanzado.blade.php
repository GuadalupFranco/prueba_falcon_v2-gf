@extends('welcome')

@section('content')

<!-- Seccion de formulario -->
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Asignación de profesores &#62; Bachillerato Avanzado</h5>
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
                <div class="col-sm-3 mb-3"><label class="form-label" for="estudiantes">Total de estudiantes</label><input class="form-control" type="text" placeholder="30" readonly="readonly"></div>
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
                <div class="col-sm-3 mb-3"><label class="form-label" for="materia2">Materia 2</label><input class="form-control" type="text" placeholder="Física/Estadística" readonly="readonly"></div>
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
                <div class="col-sm-3 mb-3"><label class="form-label" for="materia3">Materia 3</label><input class="form-control" type="text" placeholder="Inglés" readonly="readonly"></div>
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
                <div class="col-sm-3 mb-3"><label class="form-label" for="materia4">Materia 4</label><input class="form-control" type="text" placeholder="Matemáticas" readonly="readonly"></div>
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
                <div class="col-sm-3 mb-3"><label class="form-label" for="proyecto">Proyecto</label><input class="form-control" type="text" placeholder="Sistema Integral" readonly="readonly"></div>
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
        <div class="p-3 d-flex flex-row-reverse col-sm-3">
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
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="align-middle">
                        <th class="text-wrap">07:00</td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span>
                            <label class="mb-0"></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
                            <label for="">JUAN LÓPEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span>
                            <label class="mb-0"></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
                            <label for="">JUAN LÓPEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span>
                            <label class="mb-0"></label>
                        </td>

                    <tr class="align-middle">
                        <th class="text-wrap">08:00</th>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span>
                            <label class="mb-0"></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
                            <label for="">JUAN LÓPEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span>
                            <label class="mb-0"></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
                            <label for="">JUAN LÓPEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span>
                            <label class="mb-0"></label>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <th class="text-wrap">09:00</th>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
                            <label ></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
                            <label class="mb-0"></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <th class="text-wrap">10:00</th>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
                            <label ></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-primary mb-2">DESARROLLO HUMANO</span>
                            <label ></label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger mb-2">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <th class="text-wrap">11:00</th>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
                            <label for="">JUAN LÓPEZ</label>
                        </td>
                        <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span></td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
                            <label for="">JUAN LÓPEZ</label>
                        </td>
                        <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">FÍSICA/ESTADÍSTICA</span></td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-success mb-2">INGLÉS</span>
                            <label for="">JUAN LÓPEZ</label>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <th class="text-wrap">12:00</td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROYECTO</span>
                            <label class="mb-0">JOSÉ MARTÍNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROYECTO</span>
                            <label class="mb-0">JOSÉ MARTÍNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-danger">MATEMÁTICAS</span>
                            <label class="mb-0">MARTA JIMÉNEZ</label>
                        </td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROYECTO</span>
                            <label class="mb-0">JOSÉ MARTÍNEZ</label>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <th class="text-wrap">13:00</th>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROYECTO</span>
                            <label class="mb-0">JOSÉ MARTÍNEZ</label>
                        </td>
                        <td></td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROYECTO</span>
                            <label class="mb-0">JOSÉ MARTÍNEZ</label>
                        </td>
                        <td></td>
                        <td>
                            <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary mb-2">PROYECTO</span>
                            <label class="mb-0">JOSÉ MARTÍNEZ</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection