<?php

namespace App\Http\Controllers\Administrador\RolesPermisos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller{

    public function index(){
        // return view('Modulos.Administrador.RolesPermisos.Permisos.index', ['roles' => 'hola']);
    }

    public function create(){
        return view('Modulos.Administrador.RolesPermisos.Permisos.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:8'
        ]);

        $permiso = new Permission();
        
        $permiso -> name = $request -> get('name');
        $permiso -> description = $request -> get('description');

        $permiso -> save();

        return redirect() -> route('administrador-roles.index')->with('status', 'Permiso creado con éxito');
    }

    public function show($id){
        //
    }

    public function edit(Permission $administrador_permiso){
        $permiso = $administrador_permiso;
        return view('Modulos.Administrador.RolesPermisos.Permisos.edit', compact('permiso'));
    }

    public function update(Request $request, Permission $administrador_permiso){
        $request -> validate([
            'name' => 'required',
            'description' => 'required|min:8'
        ]);
        
        $permiso = $administrador_permiso;

        $permiso -> name = $request -> get('name');
        $permiso -> description = $request -> get('description');
        
        return redirect()->route('administrador-roles.index')->with('status', 'Permiso modificado con éxito');

    }

    public function destroy(Permission $administrador_permiso){
        $administrador_permiso -> delete();
        return redirect()->route('administrador-roles.index')->with('status', 'Permiso eliminado con éxito');
    }
}
