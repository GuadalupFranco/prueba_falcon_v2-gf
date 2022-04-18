@extends('welcome')

@php
$institucionProcedencia = 'Informacion previamente introducida';
@endphp

@section('content')
    <div class="container-fluid">
        <h2 class="text-center">Completar Registro</h2>
        <form action="" class="needs-validation" novalidate>
            @csrf
            <div class="card p-3 my-3">
                <div class="card-body">
                    <div class="row">
                        <div class="container col-md-6 col-sm-12">
                            <h4>Datos</h4>
                            <div class="container-fluid w-100">
                                <label class="form-label" for="curp">CURP</label>
                                <input required id="curp" class="form-control" type="text" placeholder="" name=""
                                    aria-label="">
                                <label class="form-label" for="rfc">RFC</label>
                                <input required id="rfc" class="form-control" type="text" placeholder="" name=""
                                    aria-label="">
                            </div>
                            <div class="container-fuid mt-4">
                                <div class="w-50 mb-3 mx-auto">
                                    <label class="form-label" for="estado-civil">Estado Civil</label>
                                    <select required class="form-select" id="estado-civil" name="" aria-label="">
                                        <option value="" selected disabled>...</option>
                                        <option value="soltero">Soltero</option>
                                        <option value="casado">Casado</option>
                                        <option value="divorciado">Divorciado</option>
                                        <option value="separacio-proceso">Separacin en proceso judicial</option>
                                        <option value="viudo">Viudo</option>
                                        <option value="concubinato">Concubinato</option>
                                    </select>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Lugar de Nacimiento</h5>
                                    </div>
                                    <div class="card-body row mt-4">
                                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                                            <select required id="nacionalidad" class="form-select" name="" aria-label="">
                                                <option value="" selected disabled>Nacionadlidad</option>
                                                <option value="mexicano">Mexican@</option>
                                                <option value="extranjero">Extranjero</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                                            <select required id="ent-nacimiento" class="form-select" name="" aria-label="">
                                                <option value="" selected disabled>Estado de nacimiento</option>
                                                <option value="estado1">estado1</option>
                                                <option value="estado2">estado2</option>
                                                <option value="estado3">estado3</option>
                                                <option value="estado4">estado4</option>
                                                <option value="estado5">estado5</option>
                                                <option value="estado6">estado6</option>
                                                <option value="estado7">estado7</option>
                                                <option value="estado8">estado8</option>
                                                <option value="estado9">estado9</option>
                                                <option value="estado10">estado10</option>
                                                <option value="estado11">estado11</option>
                                                <option value="estado12">estado12</option>
                                                <option value="estado13">estado13</option>
                                                <option value="estado14">estado14</option>
                                                <option value="estado15">estado15</option>
                                                <option value="estado16">estado16</option>
                                                <option value="estado17">estado17</option>
                                                <option value="estado18">estado18</option>
                                                <option value="estado19">estado19</option>
                                                <option value="estado20">estado20</option>
                                                <option value="estado21">estado21</option>
                                                <option value="estado22">estado22</option>
                                                <option value="estado23">estado23</option>
                                                <option value="estado24">estado24</option>
                                                <option value="estado25">estado25</option>
                                                <option value="estado26">estado26</option>
                                                <option value="estado27">estado27</option>
                                                <option value="estado28">estado28</option>
                                                <option value="estado29">estado29</option>
                                                <option value="estado30">estado30</option>
                                                <option value="estado31">estado31</option>
                                                <option value="estado32">estado32</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-12 my-2">
                                            <select required id="mun-nacimiento" class="form-select" name="" aria-label="">
                                                <option value="" selected disabled>Municipio de nacimiento</option>
                                                <option value="municipio1">municipio1</option>
                                                <option value="municipio2">municipio2</option>
                                                <option value="municipio3">municipio3</option>
                                                <option value="municipio4">municipio4</option>
                                                <option value="municipio5">municipio5</option>
                                                <option value="municipio6">municipio6</option>
                                                <option value="municipio7">municipio7</option>
                                                <option value="municipio8">municipio8</option>
                                                <option value="municipio9">municipio9</option>
                                                <option value="municipio10">municipio10</option>
                                                <option value="municipio11">municipio11</option>
                                                <option value="municipio12">municipio12</option>
                                                <option value="municipio13">municipio13</option>
                                                <option value="municipio14">municipio14</option>
                                                <option value="municipio15">municipio15</option>
                                                <option value="municipio16">municipio16</option>
                                                <option value="municipio17">municipio17</option>
                                                <option value="municipio18">municipio18</option>
                                                <option value="municipio19">municipio19</option>
                                                <option value="municipio20">municipio20</option>
                                                <option value="municipio21">municipio21</option>
                                                <option value="municipio22">municipio22</option>
                                                <option value="municipio23">municipio23</option>
                                                <option value="municipio24">municipio24</option>
                                                <option value="municipio25">municipio25</option>
                                                <option value="municipio26">municipio26</option>
                                                <option value="municipio27">municipio27</option>
                                                <option value="municipio28">municipio28</option>
                                                <option value="municipio29">municipio29</option>
                                                <option value="municipio30">municipio30</option>
                                                <option value="municipio31">municipio31</option>
                                                <option value="municipio32">municipio32</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-75 mx-auto my-4">
                                    <label class="form-label" for="tipo-sangre">Tipo de Sangre</label>
                                    <select required class="form-select" id="tipo-sangre" name="" aria-label="">
                                        <option value="" selected disabled>. . .</option>
                                        <option value="o+">O+</option>
                                        <option value="o-">O-</option>
                                        <option value="a+">A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                        <option value="ab+">AB+</option>
                                        <option value="ab-">AB-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="container col-md-6 col-sm-12">
                            <h4>Domicilio</h4>
                            <div class="w-100 h-75 mt-4 d-flex flex-column justify-content-around">
                                <div class="container-fluid">
                                    <label class="form-label" for="direccion">Calle</label>
                                    <input required id="direccion" class="form-control" type="text" placeholder="">
                                </div>
                                <div class="row mx-auto d-flex justify-content-center">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label" for="localidad">Localidad o Poblacion</label>
                                        <input required id="localidad" class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label" for="cp">C.P.</label>
                                        <input required id="cp" class="form-control" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6 col-sm-12 my-2">
                                        <select required id="estado" class="form-select" name="" aria-label="">
                                            <option value="" selected disabled>Estado</option>
                                            <option value="estado1">estado1</option>
                                            <option value="estado2">estado2</option>
                                            <option value="estado3">estado3</option>
                                            <option value="estado4">estado4</option>
                                            <option value="estado5">estado5</option>
                                            <option value="estado6">estado6</option>
                                            <option value="estado7">estado7</option>
                                            <option value="estado8">estado8</option>
                                            <option value="estado9">estado9</option>
                                            <option value="estado10">estado10</option>
                                            <option value="estado11">estado11</option>
                                            <option value="estado12">estado12</option>
                                            <option value="estado13">estado13</option>
                                            <option value="estado14">estado14</option>
                                            <option value="estado15">estado15</option>
                                            <option value="estado16">estado16</option>
                                            <option value="estado17">estado17</option>
                                            <option value="estado18">estado18</option>
                                            <option value="estado19">estado19</option>
                                            <option value="estado20">estado20</option>
                                            <option value="estado21">estado21</option>
                                            <option value="estado22">estado22</option>
                                            <option value="estado23">estado23</option>
                                            <option value="estado24">estado24</option>
                                            <option value="estado25">estado25</option>
                                            <option value="estado26">estado26</option>
                                            <option value="estado27">estado27</option>
                                            <option value="estado28">estado28</option>
                                            <option value="estado29">estado29</option>
                                            <option value="estado30">estado30</option>
                                            <option value="estado31">estado31</option>
                                            <option value="estado32">estado32</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 my-2">
                                        <select required id="municipio" class="form-select" name="" aria-label="">
                                            <option value="" selected disabled>Municipio</option>
                                            <option value="municipio1">municipio1</option>
                                            <option value="municipio2">municipio2</option>
                                            <option value="municipio3">municipio3</option>
                                            <option value="municipio4">municipio4</option>
                                            <option value="municipio5">municipio5</option>
                                            <option value="municipio6">municipio6</option>
                                            <option value="municipio7">municipio7</option>
                                            <option value="municipio8">municipio8</option>
                                            <option value="municipio9">municipio9</option>
                                            <option value="municipio10">municipio10</option>
                                            <option value="municipio11">municipio11</option>
                                            <option value="municipio12">municipio12</option>
                                            <option value="municipio13">municipio13</option>
                                            <option value="municipio14">municipio14</option>
                                            <option value="municipio15">municipio15</option>
                                            <option value="municipio16">municipio16</option>
                                            <option value="municipio17">municipio17</option>
                                            <option value="municipio18">municipio18</option>
                                            <option value="municipio19">municipio19</option>
                                            <option value="municipio20">municipio20</option>
                                            <option value="municipio21">municipio21</option>
                                            <option value="municipio22">municipio22</option>
                                            <option value="municipio23">municipio23</option>
                                            <option value="municipio24">municipio24</option>
                                            <option value="municipio25">municipio25</option>
                                            <option value="municipio26">municipio26</option>
                                            <option value="municipio27">municipio27</option>
                                            <option value="municipio28">municipio28</option>
                                            <option value="municipio29">municipio29</option>
                                            <option value="municipio30">municipio30</option>
                                            <option value="municipio31">municipio31</option>
                                            <option value="municipio32">municipio32</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row vw-50 container mx-auto mt-5">
                        <label class="form-label" for="tutor">Padre o Tutor</label>
                        <input id="tutor" class="form-control" type="text" placeholder="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Institucion de Procedencia</h5>
                </div>
                <div class="card-body">
                    <div class="container-fluid vw-75">
                        <label class="form-label" for="instProcedencia">Institucion</label>
                        <input required id="instaProcedencia" class="form-control disabled" type="text"
                            placeholder="{{ $institucionProcedencia }}" disabled>
                    </div>
                    <div class="container-fluid py-4">
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="promedio">Promedio</label>
                                <input required id="promedio" class="form-control" type="number" step="0.1" min="0"
                                    max="10" placeholder="8.0">
                            </div>
                            <div class="col">
                                <label class="form-label" for="fechaEgreso">Fecha de Egreso</label>
                                <input required class="form-control" id="fechaEgreso" type="month"
                                    data-options='{"disableMobile":true}'>
                            </div>
                            <div class="col">
                                <div
                                    class="container mx-auto mt-5 align-self-center d-flex justify-content-center align-content-center">
                                    <input class="form-check-input" type="checkbox" name="" id="tsuCheck"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTsu" aria-expanded="false"
                                        aria-controls="collapseTsu">
                                    <label class="form-check-label" for="tsuCheck">Tienes TSU?</label>
                                </div>
                                <div class="collapse" id="collapseTsu">
                                    <h6>TSU</h6>
                                    <div class="d-flex justify-content-center">
                                        <div class="container">
                                            <label class="form-label" for="tsuProm">Promedio</label>
                                            <input id="tsuProm" class="form-control" type="number" step="0.1" min="0" max="10" placeholder="8.0">
                                        </div>
                                        <div class="container">
                                            <label class="form-label" for="tsuCarrera">Carrera</label>
                                            <input id="tsuCarrera" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="conatiner d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Enviar Formulario </button>
    </div>
    </form>
    </div>
@endsection
