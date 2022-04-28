<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="apartado-roles">
    <x-table-card :pagination="true" data='data-list={"pagination":true,"page":5} id="tablaRoles "'>
        <x-slot name="tableOptions">
            <div class="col-12 ms-auto">
                <a class="btn btn-falcon-info btn-sm m-auto float-end text-uppercase" href="{{ route('administrador-roles.create') }}">
                    <span class="fas fa-file fs-1 me-2"></span>
                    Nuevo rol
                </a>
            </div>
        </x-slot>
        <x-slot name="tableContent">
            <thead class="bg-200 text-900">
                <tr>
                    <th class="sort" data-sort="id">ID</th>
                    <th class="sort" data-sort="name">Rol</th>
                    <th width="300px">Permisos</th>
                    <th data-sort="age" width="125px">Procesos</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($roles as $rol)
                <tr>
                    <td class="id">{{ $rol->id }}</td>
                    <td class="name">{{ $rol->name }}</td>
                    <td>
                        <p>
                            <a class="btn btn-falcon-info btn-sm mt-2 fs-md--1 fs-sm--2" data-bs-toggle="collapse" href="#collapseExample{{$rol->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">Mostrar</a>
                        </p>
                        <div class="collapse" id="collapseExample{{$rol->id}}">
                            <div class="rounded">
                                <ul>
                                    
                                    @if(count($rol -> permissions))
                                        @foreach($rol -> permissions as $permiso)
                                            <li class="font-md-0 font-sm--2">{{ $permiso->description }}</li>
                                        @endforeach
                                    @else
                                        <p class="text-danger">El rol no tiene permisos asignados</p>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td class="name">
                        {{--<button onclick="onClick({{ $rol->id }})" class="btn btn-falcon-warning btn-sm float-center" type="button" data-bs-toggle="modal" data-bs-target="#administrador-roles-editar">--}}
                        <a href="{{ route('administrador-roles.edit', $rol) }}" class="btn btn-falcon-danger btn-sm float-center">
                            <span class="far fa-edit text-warning"></span>
                        </a>
                        <a class="btn btn-falcon-danger btn-sm float-center" onclick="eliminar({{ $rol -> id }})">
                            <span class="far fa-trash-alt text-danger"></span>
                        </a>
                        <form action="{{ route('administrador-roles.destroy', $rol) }}" class="btn btn-falcon-danger btn-sm float-center m-auto d-none" method="POST" id="form-eliminar-{{ $rol -> id }}">
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