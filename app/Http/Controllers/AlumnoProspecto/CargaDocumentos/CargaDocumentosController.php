<?php

namespace App\Http\Controllers\AlumnoProspecto\CargaDocumentos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CargaDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = [
            'cert' => [
                'Certificado de Preparatoria',
                'Pendiente',
                'secondary',
                'Esta por motivos de la agenda puede ser una constancia firmada por tu institucion de procedencia que indique en que fecha terminarias tus estudios',
            ],
            'acta' => [
                'Acta Nacimiento',
                'Por Aprobar',
                'warning',
                'Este Documento debe ser la version oficial descargada de gov.gov->acta de nacimiento',
            ],
            'curp' => [
                'CURP',
                'Pendiente',
                'secondary',
                'Este documento debe ser la version digital obtenida en el sitio de Curp.org.gov',
            ],
            'iden' => [
                'Identificacion',
                'Rechazada',
                'danger',
                'Esta debe ser fotocopia de tu Identificacion Oficial con imagen',
            ],
        ];
        return view('Modulos.AlumnoProspecto.CargaDocumentos.index',[
            'documentos' => $documentos,
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
