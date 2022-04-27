<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="apartado-roles">
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="pagination-with-numbering">Usuarios</h5>
                </div>
            </div>
            <div class="col-12 ms-auto">
                <a class="btn btn-falcon-info btn-sm m-auto float-end text-uppercase" href="{{ route('administrador-usuarios.create') }}">
                    <span class="fas fa-file fs-1 me-2"></span>
                    Nuevo usuario
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
                                    <th class="sort" data-sort="name">Nombre</th>
                                    <th data-sort="age" width="125px">Procesos</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($users as $user)
                                <tr>
                                    <td class="id">{{ $user->id }}</td>
                                    <td class="name">{{ $user->name }}</td>
                                    <td class="name">
                                        <a href="{{ route('administrador-roles.edit', $user->id) }}" class="btn btn-falcon-danger btn-sm float-center">
                                            <span class="far fa-edit text-warning"></span>
                                        </a>
                                        <a class="btn btn-falcon-danger btn-sm float-center" onclick="eliminarUsuario()">
                                            <span class="far fa-trash-alt text-danger"></span>
                                        </a>
                                        <form action="{{ route('administrador-usuarios.destroy', $user->id) }}" class="btn btn-falcon-danger btn-sm float-center m-auto d-none" method="POST" id="form-eliminarUsuario">
                                            <input type="text" name="idUser" value="{{ $user->id }}">
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
@include('Modulos.Administrador.Usuarios.UsuariosGenerales.js.index')