<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.perfil', ['users' => $users]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all(); // Obtener todos los roles
        return view('users.edit', ['user' => $user, 'roles' => $roles]);

    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->usuario = $request->input('usuario');
        $user->save();

        $selectedRoles = $request->input('roles'); // Obtener los roles seleccionados desde el formulario

        if ($selectedRoles) {
            $user->syncRoles($selectedRoles); // Asignar roles al usuario
        }

        return redirect()->route('admin.perfil')->with('success', 'Usuario actualizado exitosamente');    

    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return Redirect::route('admin.perfil')->with('success', 'Usuario eliminado exitosamente');
        }
        return Redirect::route('admin.perfil')->with('error', 'No se pudo eliminar el usuario');
    }

    public function showUsers()
{
    
}


public function assignRole(User $user) {

    $users = User::all();
    $roles = Role::all(); // Obtener todos los roles
    return view('admin.perfil', ['users' => $users, 'roles' => $roles]);

}


}
