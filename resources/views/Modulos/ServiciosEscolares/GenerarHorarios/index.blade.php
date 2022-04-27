@extends('welcome')

@section('content')



<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">Generar Horario</button>


<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
     
      <div class="modal-body p-0">
        <form id="addEventForm" autocomplete="off">
            <div class="modal-header px-card bg-light border-bottom-0">
                <h5 class="modal-title">Crear evento</h5><button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-card">
                <div class="mb-3"><label class="fs-0" for="eventTitle">Titulo</label><input class="form-control" id="eventTitle" type="text" name="title" required="required">
                </div>
                

                <div class="mb-3"><label class="fs-0" for="eventStartDate">Fecha Inicio</label><input class="form-control datetimepicker" id="eventStartDate" type="date" required="required" name="startDate" placeholder="yyyy/mm/dd hh:mm" data-options="{&quot;static&quot;:&quot;true&quot;,&quot;enableTime&quot;:&quot;true&quot;,&quot;dateFormat&quot;:&quot;Y-m-d H:i&quot;}">
                </div>
                <div class="mb-3"><label class="fs-0" for="eventEndDate">Fecha Fin</label><input class="form-control datetimepicker" id="eventEndDate" type="date" name="endDate" placeholder="yyyy/mm/dd hh:mm" data-options="{&quot;static&quot;:&quot;true&quot;,&quot;enableTime&quot;:&quot;true&quot;,&quot;dateFormat&quot;:&quot;Y-m-d H:i&quot;}">
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="eventAllDay" name="allDay"><label class="form-check-label" for="eventAllDay">Todo el día</label>
                </div>
                <div class="mb-3"> <label class="fs-0">Agendar Reunión</label>
                    <div><a class="btn badge-soft-success btn-sm" href="#!"><svg class="svg-inline--fa fa-video me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 112v288c0 26.51-21.49 48-48 48h-288c-26.51 0-48-21.49-48-48v-288c0-26.51 21.49-48 48-48h288C362.5 64 384 85.49 384 112zM576 127.5v256.9c0 25.5-29.17 40.39-50.39 25.79L416 334.7V177.3l109.6-75.56C546.9 87.13 576 102.1 576 127.5z"></path></svg><!-- <span class="fas fa-video me-2"></span> Font Awesome fontawesome.com -->Agregar link de conferencia</a></div>
                </div>
                <div class="mb-3"><label class="fs-0" for="eventDescription">Descripción</label><textarea class="form-control" rows="3" name="description" id="eventDescription"></textarea>
                </div>
                <div class="mb-3"><label class="fs-0" for="eventLabel">Materias</label><select class="form-select" id="eventLabel" name="label">
                        <option value="" selected="selected" disabled="">Elegir . . .</option>
                        <option value="primary">Desarrollo Humano</option>
                        <option value="danger">Matemáticas para Ingeniería I</option>
                        <option value="success">Física Para Ingeniería I</option>
                        <option value="warning">Programación Orientada a Objetos</option>
                    </select></div>
            </div>

            <div class="card-footer d-flex justify-content-end align-items-center bg-light"><a class="me-3 text-600" href="../app/events/create-an-event.html">More options</a><button class="btn btn-primary px-4" type="submit">Save</button></div>
        </form>
      </div>
    </div>
  </div>
</div>



            




@endsection