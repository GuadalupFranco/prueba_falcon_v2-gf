@extends('welcome')

@section('content')
<h2>Cursos de Inducción</h2>


{{-- Quitar tabs --}}

@php
    $navs = [[
      "active" => true,
      "link" => "/",
      "name" => "wuenas tardes"
], [
      "link" => "/prueba",
      "name" => "olo"
]]
@endphp

<x-tabs :navs="$navs"></x-tabs>

<x-table-card order='data-list={"valueNames":["grupo","aula","horario","alumnado"]}' :align="true">
    <x-slot name="tableOptions">
        <x-table-card-options :filtrar="true" :exportar="true"></x-table-card-options>
    </x-slot>
    <x-slot name="tableContent">
      <thead class="text-black bg-200">
        <tr>
          <th class="align-middle white-space-nowrap">
            <div class="form-check mb-0">
              <input
                class="form-check-input"
                type="checkbox"
                data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}'
              />
            </div>
          </th>
          <th
            class="align-middle sort"
            data-sort="grupo"
          >
            Grupo
          </th>
          <th
            class="align-middle sort"
            data-sort="aula"
          >
            Aula
          </th>
          <th class="align-middle">Horario</th>
          <th
            class="align-middle white-space-nowrap pe-3"
          >
            Alumnado
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
          <td class="align-middle grupo">S191</td>
          <td class="align-middle aula">C102</td>
          <td class="align-middle">
            <button class="btn btn-falcon-info" data-bs-toggle="modal"
            data-bs-target="#mostrarHorario">
              Ver horario
            </button>
          </td>
          <td
            class="align-middle white-space-nowrap text-end pe-3"
          >
            <button
              class="btn btn-falcon-warning"
              data-bs-toggle="modal"
              data-bs-target="#mostrarLista"
            >
              Mostrar Lista
            </button>
          </td>
        </tr>
      </tbody>
    </x-slot>
</x-table-card>

<x-modal-card title="Lista de Alumnos" id="mostrarLista">
  <x-slot name="content">
    <x-table-card>
      <x-slot name="tableContent">
        <thead class="text-black bg-200">
          <tr>
            <th
              class="align-middle sort"
              data-sort="nombre"
            >
              Nombre Alumno
            </th>
            <th
              class="align-middle sort"
              data-sort="escuela"
            >
              Procedencia
            </th>
            <th
              class="align-middle sort"
              data-sort="correo"
            >
              Correo Electrónico
            </th>
            <th
              class="align-middle sort"
              data-sort="telefono"
            >
              Teléfono
            </th>
          </tr>
        </thead>
        <tbody id="bulk-select-body">
          <tr>
            <td class="align-middle nombre">
              Andrés Javier Camacho
              Ledessssssssssssssma
            </td>
            <td class="align-middle escuela">
              Cbtis 1248
            </td>
            <td class="align-middle correo">
              soyjavi@hotmail.com
            </td>
            <td class="align-middle telefono">
              3426542365
            </td>
          </tr>
        </tbody>
      </x-slot>
    </x-table-card>
  </x-slot>
</x-modal-card>

<x-modal-card title="Horario" id="mostrarHorario">
  <x-slot name="content">
    <div data-calendar=''></div>
  </x-slot>
</x-modal-card>

@endsection

@section('extra-scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script src="/vendors/fullcalendar/main.min.js"></script>
@endsection

@section('extra-styles')
    <link href="/vendors/fullcalendar/main.min.css" rel="stylesheet" />
@endsection