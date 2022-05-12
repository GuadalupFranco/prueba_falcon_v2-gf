<?php

namespace App\Http\Controllers\AlumnoProspecto\Encuestas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // oreguntas
        // Title, type, opciones(en caso de select-> tuplas, valor-titulo)
        $preguntas = [
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
            ['Pregunta 1', 'text', 'OtroCampò'],
            ['Pregunta 2', 'select', [
                ['opcion1','Opcion1'],
                ['opcion2', 'Opcion2']
            ]],
        ];
        return view('Modulos.AlumnoProspecto.Encuestas.index',[
            'preguntas' => $preguntas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
