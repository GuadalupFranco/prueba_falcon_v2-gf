<?php

namespace App\Http\Controllers\Administrador\RolesPermisos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller{

    public function index(){
        $roles = Role::all();
        $permisos = Permission::all();
        return view('Modulos.Administrador.RolesPermisos.index', compact('roles', 'permisos'));
    }

    public function create(){
        $permisos = Permission::all();
        return view('Modulos.Administrador.RolesPermisos.Roles.create', compact('permisos'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required'
        ]);

        //dd($request->all());

        $role = Role::create([
            'name' => $request->name
        ]); // Se crea el rol

        $role->permissions()->sync($request->permissions); // Se le asignan los permisos al rol

        return redirect()->route('administrador-roles.index')->with('status', 'Rol creado con éxito');
    }

    public function fetchExample(Request $request){

        $pIdRol = $request->get('pidrol');

        $dataRol = Role::find($pIdRol);


        return $dataRol->toJson();
    }

    public function show($id){
        //
    }

    public function edit($id){
        $role = Role::find($id);
        $permisos = Permission::all();
        return view('Modulos.Administrador.RolesPermisos.Roles.edit', compact('role', 'permisos'));
    }

    public function update(Request $request, $id){
        $role = Role::find($id);

        $request->validate([
            'name' => 'required'
        ]);

        $role->update([
            'name' => $request->name
        ]); // Se modifica la información del rol

        $role->permissions()->sync($request->permissions); // Se le asignan los permisos al rol

        $roles = Role::all();
        $permisos = Permission::all();

        return redirect()->route('administrador-roles.index')->with('status', 'Rol modificado con éxito');
    }

    public function destroy($pIdRol){
        
        $role = Role::find($pIdRol);

        $role->delete();

        return redirect()->route('administrador-roles.index')->with('status', 'Rol eliminado con éxito');
    }
}
