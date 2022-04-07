<?php

namespace App\Http\Controllers\ServiciosEscolares\Agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaController extends Controller{

    public function index(){
        return view('Modulos.ServiciosEscolares.Agenda.index');
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
