<?php

namespace App\Http\Controllers\ServiciosEscolares\ControlFichas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlFichasController extends Controller{
    
    public function index(){
        return view('Modulos.ServiciosEscolares.ControlFichas.index');
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
        //
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
