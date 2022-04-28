<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="apartado-roles">
    <x-table-card :pagination="true" data='data-list={"pagination":true,"page":5} id="tablaRoles "'>
        <x-slot name="tableOptions">
            <div class="col-12 ms-auto">
                <a class="btn btn-falcon-info btn-sm m-auto float-end text-uppercase" href="{{ route('administrador-permisos.create') }}">
                    <span class="fas fa-file fs-1 me-2"></span>
                    Nuevo permiso
                </a>
            </div>
        </x-slot>
        <x-slot name="tableContent">
            <thead class="bg-200 text-900">
                <tr>
                    <th class="sort" data-sort="id">ID</th>
                    <th class="sort" data-sort="name">Permiso</th>
                    <th width="300px">Descripción</th>
                    <th data-sort="age" width="125px">Procesos</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($permisos as $permiso)
                <tr>
                    <td class="id">{{ $permiso->id }}</td>
                    <td class="name">{{ $permiso->name }}</td>
                    <td>
                        <p>{{ $permiso -> description }}</p>
                    </td>
                    <td class="name">
                        {{--<button onclick="onClick({{ $rol->id }})" class="btn btn-falcon-warning btn-sm float-center" type="button" data-bs-toggle="modal" data-bs-target="#administrador-roles-editar">--}}
                        <a href="{{ route('administrador-permisos.edit', $permiso) }}" class="btn btn-falcon-danger btn-sm float-center">
                            <span class="far fa-edit text-warning"></span>
                        </a>
                        <a class="btn btn-falcon-danger btn-sm float-center" onclick="eliminar({{ $permiso -> id }})">
                            <span class="far fa-trash-alt text-danger"></span>
                        </a>
                        <form action="{{ route('administrador-permisos.destroy', $permiso) }}" class="btn btn-falcon-danger btn-sm float-center m-auto d-none" method="POST" id="form-eliminar-{{ $permiso -> id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </x-slot>
    </x-table-card>    
</div>

@section('extra-scripts')    
    @include('Modulos.Administrador.RolesPermisos.Roles.js.index')
@endsection