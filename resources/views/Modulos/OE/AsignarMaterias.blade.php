@extends('welcome')

@section('content')


{{-- Unificar header --}}


<h2>Cursos de Inducción | Asignar Materias</h2>

<x-table-card data='data-list={"valueNames":["programa","estatus"]}'>
  <x-slot name="tableOptions">
    <x-table-card-options :filtrar="true"></x-table-card-options>
  </x-slot>
  <x-slot name="tableContent">
    <thead class="text-black bg-200">
      <tr>
        <th class="align-middle white-space-nowrap">
          <div class="form-check mb-0">
            <input
              class="form-check-input"
              type="checkbox"
              {{-- Revisar Bulk-selects --}}
              {{-- data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}' --}}
            />
          </div>
        </th>
        <th class="align-middle sort" data-sort="programa">Programa Educativo</th>
        <th
          class="align-middle white-space-nowrap pe-3 sort" data-sort="estatus"
        >
          Estado
        </th>
      </tr>
    </thead>
    <tbody id="bulk-select-body" class="list">
      <tr>
        <td class="align-middle white-space-nowrap">
          <div class="form-check mb-0">
            <input
              class="form-check-input"
              type="checkbox"
              id="checkbox-1"
              data-bulk-select-row="data-bulk-select-row"
              checked="false"
            />
          </div>
        </td>
        <td class="align-middle programa">
          {{ $nombre }}
        </td>
        <td
          class="align-middle white-space-nowrap text-end pe-3 estatus"
        >
          <x-badge color="{{ ($status == 'Completado') ? 'secondary' : 'primary' }}" text="{{ $status }}" icon="{{ ($status == 'Completado') ? 'check' : 'spinner' }}"></x-badge>
        </td>
      </tr>
      <tr>
        <td class="align-middle white-space-nowrap">
          <div class="form-check mb-0">
            <input
              class="form-check-input"
              type="checkbox"
              id="checkbox-1"
              data-bulk-select-row="data-bulk-select-row"
              checked="false"
            />
          </div>
        </td>
        <td class="align-middle programa">
          Ingeniería en Redes y Telecomunicaciones
        </td>
        <td
          class="align-middle white-space-nowrap text-end pe-3 estatus"
        >
          <span
            class="badge fw-medium text-decoration-none me-2 badge-soft-primary rounded-pill"
            >Pendiente<i
              class="fa-solid fa-spinner ms-1"
            ></i>
          </span>
        </td>
      </tr>
    </tbody>
  </x-slot>
</x-table-card>


<!-- Duda sobre estilo del boton -->
<button
  type=""
  class="btn btn-falcon-success float-end mt-3"
  data-bs-toggle="modal"
  data-bs-target="#asignarMaterias"
>
  Asignar Materias
</button>


<x-modal-card title="Asignar Materias" :action="true" id="asignarMaterias">
  <x-slot name="content">
    <x-table-card>
      <x-slot name="tableOptions">
        <x-table-card-options :filtrar="true" :agregar="true"></x-table-card-options>
      </x-slot>
      <x-slot name="tableContent">
        <thead class="text-black bg-200">
          <tr>
            <th
              class="align-middle white-space-nowrap" 
            >
              <div class="form-check mb-0">
                <input
                  class="form-check-input"
                  type="checkbox"
                  data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}'
                />
              </div>
            </th>
            <th class="align-middle sort" data-sort="materia">
              Materia
            </th>
          </tr>
        </thead>
        <tbody id="bulk-select-body">
          <tr>
            <td
              class="align-middle white-space-nowrap"
            >
              <div class="form-check mb-0">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="checkbox-1"
                  data-bulk-select-row="data-bulk-select-row"
                  checked="false"
                />
              </div>
            </td>
            <td class="align-middle materia">
              Matemáticas
            </td>
          </tr>
      </x-slot>
    </x-table-card>
  </x-slot>
</x-modal-card>

@endsection