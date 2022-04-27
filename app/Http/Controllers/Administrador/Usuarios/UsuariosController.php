<?php

namespace App\Http\Controllers\Administrador\Usuarios;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsuariosController extends Controller{

    public function __construct(){
        /*$this->middleware('can:usuario.index')->only('index');
        $this->middleware('can:usuario.create')->only('create', 'store');
        $this->middleware('can:usuario.edit')->only('edit', 'update');
        $this->middleware('can:usuario.destroy')->only('destroy');*/
    }

    public function index(){
        $users = User::all();
        return view('Modulos.Administrador.Usuarios.index', compact('users'));
    }

    public function create(){
        $roles = Role::orderBy('name')->get();
        return view('Modulos.Administrador.Usuarios.UsuariosGenerales.create', compact('roles'));
    }

    public function store(Request $request){

        //dd($request->all());

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Password, 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        

        //$user->roles()->sync($request->roles);

        return redirect()->route('administrador-usuarios.index')->with('status', 'Usuario almacenado con éxito');
    }

    public function show(User $user){
        //
    }

    public function edit($pId){
        /*$user = User::find($pId);
        $roles = Role::orderBy('name')->get();
        return view('usuario.editUsuario', compact('user', 'roles'));*/
    }

    public function update(Request $request, $pId){

        /*$user = User::find($pId);
        $user->roles()->sync($request->roles);
        //$user->update($request->all());

        return redirect()->route('usuario.edit', $pId)->with('status', 'Actualizado con éxito');*/
    }

    public function destroy(Request $request, $pIdUsuario){

        dd($request->idUser);

        $user = User::find($pIdUsuario);

        dd($user);

        //$user->delete();

        return redirect()->route('administrador-usuarios.index')->with('status', 'Usuario eliminado con éxito');
    }
}