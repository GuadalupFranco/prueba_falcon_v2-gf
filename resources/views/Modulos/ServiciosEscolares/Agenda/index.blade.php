@extends('welcome')

<head>
    <link href="/vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link href="/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
</head>




@section('content')

@php
$navs = [
    [
        "link" => "/",
        "name" => "Menu"
    ],
    [
        "link" => "PanelPrincipal.index",
        "name" => "Servicios escolares"
    ],
    [
        "link" => "Agenda.index",
        "name" => "Agenda",
    ]
    ]
@endphp

<x-breadcrumb-head :navs="$navs"/>

<div class="container" id="top">
    <div class="card mb-3 overflow-hidden">
        <div class="card-header">
            <div class="row gx-0 align-items-center">
                <div class="col-auto d-flex justify-content-end order-md-1"><button
                        class="btn icon-item icon-item-sm shadow-none p-0 me-1 ms-md-2" type="button" data-event="prev"
                        data-bs-toggle="tooltip" title="Previous"><span
                            class="fas fa-arrow-left"></span></button><button
                        class="btn icon-item icon-item-sm shadow-none p-0 me-1 me-lg-2" type="button" data-event="next"
                        data-bs-toggle="tooltip" title="Next"><span class="fas fa-arrow-right"></span></button></div>
                <div class="col-auto col-md-auto order-md-2">
                    <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title"></h4>
                </div>
                <div class="col col-md-auto d-flex justify-content-end order-md-3"><button
                        class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Hoy</button>
                </div>
                <div class="col-md-auto d-md-none">
                    <hr />
                </div>
                <div class="col-auto d-flex order-md-0">
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> 
                        <span class="fas fa-plus me-2"></span>
                        Agregar
                    </button>
                </div>
                <div class="col d-flex justify-content-end order-md-2">
                    <div class="dropdown font-sans-serif me-md-2">
                        <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
                            <span data-view-title="data-view-title">Vista Mes</span>
                            <span class="fas fa-sort ms-2 fs--1"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-filter">
                            <a class="active dropdown-item d-flex justify-content-between" href="#!" data-fc-view="dayGridMonth">
                                Vista Mes
                                <span class="icon-check">
                                    <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="timeGridWeek">
                                Vista Semana
                                <span class="icon-check"><span
                                        class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a
                                class="dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="timeGridDay">Vista D??a<span class="icon-check"><span class="fas fa-check"
                                        data-fa-transform="down-4 shrink-4"></span></span></a><a
                                class="dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="listWeek">Vista en Lista<span class="icon-check"><span
                                        class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a
                                class="dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="listYear">Vista A??o<span class="icon-check"><span class="fas fa-check"
                                        data-fa-transform="down-4 shrink-4"></span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="calendar-outline" id="appCalendar"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="eventDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border"></div>
    </div>
</div>
<div class="modal fade" id="addEventModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border">
            <form id="addEventForm" autocomplete="off">
                <div class="modal-header px-card bg-light border-bottom-0">
                    <h5 class="modal-title">Crear evento</h5><button class="btn-close me-n1" type="button"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                    <div class="mb-3"><label class="fs-0" for="eventTitle">Titulo</label><input class="form-control"
                            id="eventTitle" type="text" name="title" required="required" />
                    </div>
                    <div class="mb-3"><label class="fs-0" for="eventStartDate">Fecha Inicio</label><input
                            class="form-control datetimepicker" id="eventStartDate" type="text" required="required"
                            name="startDate" placeholder="yyyy/mm/dd hh:mm"
                            data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                    </div>
                    <div class="mb-3"><label class="fs-0" for="eventEndDate">Fecha Fin</label><input
                            class="form-control datetimepicker" id="eventEndDate" type="date" name="endDate"
                            placeholder="yyyy/mm/dd hh:mm"
                            data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                    </div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="eventAllDay"
                            name="allDay" /><label class="form-check-label" for="eventAllDay">Todo el d??a</label>
                    </div>
                    <div class="mb-3"> <label class="fs-0">Agendar Reuni??n</label>
                        <div><a class="btn badge-soft-success btn-sm" href="#!"><span
                                    class="fas fa-video me-2"></span>Agregar link de conferencia</a></div>
                    </div>
                    <div class="mb-3"><label class="fs-0" for="eventDescription">Descripci??n</label><textarea
                            class="form-control" rows="3" name="description" id="eventDescription"></textarea>
                    </div>
                    <div class="mb-3"><label class="fs-0" for="eventLabel">Materias</label><select class="form-select"
                            id="eventLabel" name="label">
                            <option value="" selected="selected" disabled>Elegir . . .</option>
                            <option value="primary">Desarrollo Humano</option>
                            <option value="danger">Matem??ticas para Ingenier??a I</option>
                            <option value="success">F??sica Para Ingenier??a I</option>
                            <option value="warning">Programaci??n Orientada a Objetos</option>
                        </select></div>
                </div>
<<<<<<< HEAD
                <div class="card-footer d-flex justify-content-end align-items-center bg-light"><a class="me-3 text-600"
                        href="../app/events/create-an-event.html">More options</a><button class="btn btn-primary px-4"
                        type="submit">Save</button></div>
            </form>
=======
            </div>
            
            
>>>>>>> origin/javier-camacho
        </div>
    </div>
</div>

<<<<<<< HEAD
=======

>>>>>>> origin/javier-camacho
<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
</script>
<script src="/vendors/fullcalendar/main.min.js"></script>
<script src="/assets/js/flatpickr.js"></script>
<script src="/vendors/dayjs/dayjs.min.js"></script>
@endsection
