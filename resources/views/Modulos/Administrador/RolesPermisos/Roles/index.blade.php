<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="apartado-roles">
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="pagination-with-numbering">Roles</h5>
                </div>
            </div>
            <div class="col-12 ms-auto">
                <a class="btn btn-falcon-info btn-sm m-auto float-end text-uppercase" href="{{ route('administrador-roles.create') }}">
                    <span class="fas fa-file fs-1 me-2"></span>
                    Nuevo rol
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-c33e079e-6e1a-483b-8755-69c47bcdf1e1"
                id="dom-c33e079e-6e1a-483b-8755-69c47bcdf1e1">
                <div id="tableExample2"
                    data-list="{&quot;valueNames&quot;:[&quot;id&quot;,&quot;name&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                    <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped fs--1 mb-0">
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
                                @php($contadorRoles = 0)
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
                                                    @foreach($permisos as $permiso)
                                                        @if($rol->hasPermissionTo($permiso->id))
                                                            @php($contadorRoles++)
                                                            <li class="font-md-0 font-sm--2">{{ $permiso->description }}</li>
                                                        @endif
                                                    @endforeach
                                                    @if($contadorRoles==0)
                                                        <p class="text-danger">El rol no tiene permisos asignados</p>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="name">
                                        {{--<button onclick="onClick({{ $rol->id }})" class="btn btn-falcon-warning btn-sm float-center" type="button" data-bs-toggle="modal" data-bs-target="#administrador-roles-editar">--}}
                                        <a href="{{ route('administrador-roles.edit', $rol -> id) }}" class="btn btn-falcon-danger btn-sm float-center">
                                            <span class="far fa-edit text-warning"></span>
                                        </a>
                                        <a class="btn btn-falcon-danger btn-sm float-center" onclick="eliminarRol({{ $rol -> id }})">
                                            <span class="far fa-trash-alt text-danger"></span>
                                        </a>
                                        <form action="{{ route('administrador-roles.destroy', $rol) }}" class="btn btn-falcon-danger btn-sm float-center m-auto d-none" method="POST" id="form-eliminarRol-{{ $rol -> id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous"
                            data-list-pagination="prev" disabled="">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="pagination mb-0">
                            <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button>
                            </li>
                            <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                            <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                        </ul>
                        <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                            data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('extra-scripts')    
    @include('Modulos.Administrador.RolesPermisos.Roles.js.index')
@endsection