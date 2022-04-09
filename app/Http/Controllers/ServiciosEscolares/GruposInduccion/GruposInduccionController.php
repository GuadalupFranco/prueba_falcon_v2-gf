<?php

namespace App\Http\Controllers\ServiciosEscolares\GruposInduccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GruposInduccionController extends Controller{

    public function index(){
        return view('Modulos.ServiciosEscolares.GruposInduccion.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('Modulos.ServiciosEscolares.GruposInduccion.show');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
