@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12">
            @foreach ($documentos as $item)
                @if ($loop->odd) <div class="row"> @endif
                <div class="container col-lg-6 col-md-12 my-3">
                    @include('Modulos.AlumnoProspecto.CargaDocumentos._card',
                    ['data' => $item, 'index' => $loop->index])
                </div>
                @if ($loop->even) </div> @endif
            @endforeach
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body px-2">
                    <h5 class="card-title text-center px-4">Requerimientos de los Documentos</h5>
                    <hr>
                    <ul class="list-group ">
                    @foreach ($documentos as $item)
                        <li class="list-group-item my-2">
                            <h6 class="card-title">Requerimientos de {{ $item[0] }}</h6>
                            <hr>
                            <p class="card-text">{{ $item[3] }}</p>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
