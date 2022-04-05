@extends('welcome')

@section('extra-styles')
<link href="/vendors/fullcalendar/main.min.css" rel="stylesheet" />
@endsection

@section('content')

<nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Menú</a></li>
        <li class="breadcrumb-item"><a href="#">Servicios escolares</a></li>
        <li class="breadcrumb-item active" aria-current="page">Agenda</li>
    </ol>
</nav>
<h3 class="text-center my-2">Agenda</h3>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab"
            aria-controls="tab-home" aria-selected="true">Agenda</a></li>
</ul>
<div class="tab-content border-x border-bottom p-3" id="myTabContent">
    <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0" data-anchor="data-anchor" id="pagination-with-numbering">Agenda<a
                                class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#"
                                href="#pagination-with-numbering" style="padding-left: 0.375em;"></a></h5>
                    </div>
                </div>
            </div>
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <div class="row gx-0 align-items-center">
                        <div class="col-auto d-flex justify-content-end order-md-1"><button
                                class="btn icon-item icon-item-sm shadow-none p-0 me-1 ms-md-2" type="button"
                                data-event="prev" data-bs-toggle="tooltip" title="" data-bs-original-title="Previous"
                                aria-label="Previous"><svg class="svg-inline--fa fa-arrow-left fa-w-14"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-arrow-left"></span> Font Awesome fontawesome.com --></button><button
                                class="btn icon-item icon-item-sm shadow-none p-0 me-1 me-lg-2" type="button"
                                data-event="next" data-bs-toggle="tooltip" title="" data-bs-original-title="Next"
                                aria-label="Next"><svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-arrow-right"></span> Font Awesome fontawesome.com --></button>
                        </div>
                        <div class="col-auto col-md-auto order-md-2">
                            <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title">April 2022</h4>
                        </div>
                        <div class="col col-md-auto d-flex justify-content-end order-md-3"><button
                                class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Today</button>
                        </div>
                        <div class="col-md-auto d-md-none">
                            <hr>
                        </div>
                        <div class="col-auto d-flex order-md-0"><button class="btn btn-primary btn-sm" type="button"
                                data-bs-toggle="modal" data-bs-target="#addEventModal"> <svg
                                    class="svg-inline--fa fa-plus fa-w-14 me-2" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                    </path>
                                </svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add
                                Schedule</button></div>
                        <div class="col d-flex justify-content-end order-md-2">
                            <div class="dropdown font-sans-serif me-md-2"><button
                                    class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"
                                    type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        data-view-title="data-view-title">Month View</span><svg
                                        class="svg-inline--fa fa-sort fa-w-10 ms-2 fs--1" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="sort" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-sort ms-2 fs--1"></span> Font Awesome fontawesome.com --></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-filter">
                                    <a class="active dropdown-item d-flex justify-content-between" href="#!"
                                        data-fc-view="dayGridMonth">Month View<span class="icon-check"><svg
                                                class="svg-inline--fa fa-check fa-w-16"
                                                data-fa-transform="down-4 shrink-4" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="check" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="" style="transform-origin: 0.5em 0.75em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, 128)  scale(0.75, 0.75)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                                            transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> Font Awesome fontawesome.com --></span></a><a
                                        class="dropdown-item d-flex justify-content-between" href="#!"
                                        data-fc-view="timeGridWeek">Week View<span class="icon-check"><svg
                                                class="svg-inline--fa fa-check fa-w-16"
                                                data-fa-transform="down-4 shrink-4" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="check" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="" style="transform-origin: 0.5em 0.75em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, 128)  scale(0.75, 0.75)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                                            transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> Font Awesome fontawesome.com --></span></a><a
                                        class="dropdown-item d-flex justify-content-between" href="#!"
                                        data-fc-view="timeGridDay">Day View<span class="icon-check"><svg
                                                class="svg-inline--fa fa-check fa-w-16"
                                                data-fa-transform="down-4 shrink-4" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="check" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="" style="transform-origin: 0.5em 0.75em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, 128)  scale(0.75, 0.75)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                                            transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> Font Awesome fontawesome.com --></span></a><a
                                        class="dropdown-item d-flex justify-content-between" href="#!"
                                        data-fc-view="listWeek">List View<span class="icon-check"><svg
                                                class="svg-inline--fa fa-check fa-w-16"
                                                data-fa-transform="down-4 shrink-4" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="check" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="" style="transform-origin: 0.5em 0.75em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, 128)  scale(0.75, 0.75)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                                            transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> Font Awesome fontawesome.com --></span></a><a
                                        class="dropdown-item d-flex justify-content-between" href="#!"
                                        data-fc-view="listYear">Year View<span class="icon-check"><svg
                                                class="svg-inline--fa fa-check fa-w-16"
                                                data-fa-transform="down-4 shrink-4" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="check" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="" style="transform-origin: 0.5em 0.75em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, 128)  scale(0.75, 0.75)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                                            transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> Font Awesome fontawesome.com --></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="calendar-outline fc fc-media-screen fc-direction-ltr fc-theme-standard" id="appCalendar"
                        style="height: 800px;">
                        <div class="fc-view-harness fc-view-harness-active">
                            <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                <table class="fc-scrollgrid  fc-scrollgrid-liquid">
                                    <thead>
                                        <tr class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                            <td>
                                                <div class="fc-scroller-harness">
                                                    <div class="fc-scroller" style="overflow: hidden;">
                                                        <table class="fc-col-header " style="width: 856px;">
                                                            <colgroup></colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <th class="fc-col-header-cell fc-day fc-day-sun">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                class="fc-col-header-cell-cushion ">Sun</a>
                                                                        </div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-mon">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                class="fc-col-header-cell-cushion ">Mon</a>
                                                                        </div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-tue">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                class="fc-col-header-cell-cushion ">Tue</a>
                                                                        </div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-wed">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                class="fc-col-header-cell-cushion ">Wed</a>
                                                                        </div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-thu">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                class="fc-col-header-cell-cushion ">Thu</a>
                                                                        </div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-fri">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                class="fc-col-header-cell-cushion ">Fri</a>
                                                                        </div>
                                                                    </th>
                                                                    <th class="fc-col-header-cell fc-day fc-day-sat">
                                                                        <div class="fc-scrollgrid-sync-inner"><a
                                                                                class="fc-col-header-cell-cushion ">Sat</a>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                            <td>
                                                <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                    <div class="fc-scroller fc-scroller-liquid-absolute"
                                                        style="overflow: hidden auto;">
                                                        <div class="fc-daygrid-body fc-daygrid-body-unbalanced "
                                                            style="width: 856px;">
                                                            <table class="fc-scrollgrid-sync-table"
                                                                style="width: 856px; height: 769px;">
                                                                <colgroup></colgroup>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                            data-date="2022-03-27">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">27</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                            data-date="2022-03-28">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">28</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other"
                                                                            data-date="2022-03-29">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">29</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other"
                                                                            data-date="2022-03-30">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">30</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other"
                                                                            data-date="2022-03-31">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">31</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                            data-date="2022-04-01">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">1</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="top: 0px; left: 0px; right: -122.823px;">
                                                                                        <a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start bg-soft-success">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-time">
                                                                                                        10 AM</div>
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Boot Camp
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 34px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                            data-date="2022-04-02">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">2</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 34px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                            data-date="2022-04-03">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">3</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-end bg-soft-success">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-time">
                                                                                                        10 AM</div>
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Boot Camp
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-today "
                                                                            data-date="2022-04-04">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">4</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today bg-soft-success">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Conference
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today event-bg-soft-success">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot">
                                                                                            </div>
                                                                                            <div class="fc-event-time">
                                                                                                11 AM</div>
                                                                                            <div class="fc-event-title">
                                                                                                Reporting</div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today event-bg-soft-success">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot">
                                                                                            </div>
                                                                                            <div class="fc-event-time">2
                                                                                                PM</div>
                                                                                            <div class="fc-event-title">
                                                                                                Lunch</div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today event-bg-soft-success">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot">
                                                                                            </div>
                                                                                            <div class="fc-event-time">4
                                                                                                PM</div>
                                                                                            <div class="fc-event-title">
                                                                                                Contest</div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                        <a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today event-bg-soft-success">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot">
                                                                                            </div>
                                                                                            <div class="fc-event-time">
                                                                                                10 PM</div>
                                                                                            <div class="fc-event-title">
                                                                                                Dinner</div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-more-link fc-more-link">+3
                                                                                            more</a></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-04-05">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">5</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-04-06">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">6</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-04-07">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">7</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot">
                                                                                            </div>
                                                                                            <div class="fc-event-time">
                                                                                                10 AM</div>
                                                                                            <div class="fc-event-title">
                                                                                                Meeting</div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                            data-date="2022-04-08">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">8</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                            data-date="2022-04-09">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">9</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                            data-date="2022-04-10">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">10</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                            data-date="2022-04-11">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">11</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-soft-primary">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Crain's New
                                                                                                            York
                                                                                                            Business
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-04-12">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">12</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-04-13">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">13</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-04-14">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">14</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                            <div
                                                                                                class="fc-daygrid-event-dot">
                                                                                            </div>
                                                                                            <div class="fc-event-time">
                                                                                                10 AM</div>
                                                                                            <div class="fc-event-title">
                                                                                                Contest</div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                            data-date="2022-04-15">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">15</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                            data-date="2022-04-16">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">16</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-future bg-soft-warning">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-time">
                                                                                                        10 AM</div>
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            ICT Expo
                                                                                                            2022 -
                                                                                                            Product
                                                                                                            Release
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                            data-date="2022-04-17">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">17</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                        style="top: 0px; left: 0px; right: -122.277px;">
                                                                                        <a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-end fc-event-future bg-soft-warning">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-time">
                                                                                                        10 AM</div>
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            ICT Expo
                                                                                                            2022 -
                                                                                                            Product
                                                                                                            Release
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 34px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                            data-date="2022-04-18">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">18</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 34px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-04-19">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">19</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-04-20">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">20</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-04-21">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">21</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                            data-date="2022-04-22">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">22</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                            data-date="2022-04-23">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">23</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-soft-success"
                                                                                            href="http://google.com">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Event With
                                                                                                            Url</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                            data-date="2022-04-24">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">24</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                            data-date="2022-04-25">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">25</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                            data-date="2022-04-26">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">26</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-soft-danger">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Competition
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                            data-date="2022-04-27">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">27</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                            data-date="2022-04-28">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">28</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                            data-date="2022-04-29">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">29</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                            data-date="2022-04-30">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">30</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other"
                                                                            data-date="2022-05-01">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">1</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other"
                                                                            data-date="2022-05-02">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">2</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other"
                                                                            data-date="2022-05-03">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">3</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other"
                                                                            data-date="2022-05-04">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">4</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                            data-date="2022-05-05">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">5</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-event-harness"
                                                                                        style="margin-top: 0px;"><a
                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future bg-soft-primary">
                                                                                            <div class="fc-event-main">
                                                                                                <div
                                                                                                    class="fc-event-main-frame">
                                                                                                    <div
                                                                                                        class="fc-event-title-container">
                                                                                                        <div
                                                                                                            class="fc-event-title fc-sticky">
                                                                                                            Birthday
                                                                                                            Party</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                            </div>
                                                                                        </a></div>
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                            data-date="2022-05-06">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">6</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                            data-date="2022-05-07">
                                                                            <div
                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                <div class="fc-daygrid-day-top"><a
                                                                                        class="fc-daygrid-day-number">7</a>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-events">
                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                        style="margin-top: 0px;"></div>
                                                                                </div>
                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('extra-scripts')
<script src="/vendors/fullcalendar/main.min.js"></script>
@endsection
@endsection