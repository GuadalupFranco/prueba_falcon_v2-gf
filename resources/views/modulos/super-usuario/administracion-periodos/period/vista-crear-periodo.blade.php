@extends('welcome')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('panel-principal-superusuario')}}">Panel de superusuarios</a></li>
        <li class="breadcrumb-item"><a href="{{route('lista-periodos')}}">Administración de periodos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registrar nuevo periodo</li>
      </ol>
    <form class="row g-3 needs-validation" novalidate="">
        <div class="card">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h6 class="mb-0">Información general</h6>
                </div>
              </div>
            </div>
            <div class="card-body border-top">
                <div class="row">
                    <div class="col">
                        <div class="col-md-6 position-relative">
                            <label class="form-label" for="validationTooltip01">Descripción</label>
                            <textarea class="form-control" id="validationTooltip01" value="" required=""></textarea>
                            <div class="valid-tooltip">Por favor ingresa una descripción en el campo.</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-5 position-relative">
                                <label class="form-label" for="validationTooltip04">Periodo superior</label>
                                <select class="form-select" id="validationTooltip04" required="">
                                    <option selected="" disabled="" value="">seleccionar...</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 position-relative">
                                <label class="form-label" for="validationTooltip04">Tarea relacionada</label>
                                <select class="form-select" id="validationTooltip04" required="">
                                    <option selected="" disabled="" value="">seleccionar...</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-top my-0">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h6 class="mb-0">Especificaciones</h6>
                </div>
              </div>
            </div>
            <div class="card-body border-top">
                <div class="row">
                    <div class="col-md-3 position-relative">
                        <label class="form-label" for="validationTooltip04">Estatus</label>
                        <select class="form-select" id="validationTooltip04" required="">
                            <option selected="" disabled="" value="">seleccionar...</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                        <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                    </div>
                    <div class="col-md-2 position-relative">
                        <label class="form-label" for="datepicker_ini">Fecha de inicio</label>
                        <input class="form-control datetimepicker" id="datepicker_ini" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                        <div class="valid-tooltip">Selecciona una fecha inicial válida</div>
                    </div>
                    <div class="col-md-2 position-relative">
                        <label class="form-label" for="datepicker_fin">Fecha de fin</label>
                        <input class="form-control datetimepicker" id="datepicker_fin" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                        <div class="valid-tooltip">Selecciona una fecha final válida</div>
                    </div>
                </div>
            </div>
        </div>
       


@endsection