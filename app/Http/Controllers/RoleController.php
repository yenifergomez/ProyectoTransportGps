<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role; 
use App\Models\User; 


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all(); 
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|unique:roles|max:255',
    ]);

    // Crear un nuevo rol con los datos validados
    $role = Role::create($validatedData);

    // Redireccionar a la vista de la lista de roles
    return redirect()->route('roles.index')->with('success', 'Rol creado exitosamente');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id); // Encontrar el rol por ID
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|unique:roles|max:255',
    ]);

    // Encontrar el rol por ID
    $role = Role::findOrFail($id);

    $role->update($validatedData);

    return redirect()->route('roles.index')->with('success', 'Rol actualizado exitosamente');
}

public function destroy($id)
{
    $role = Role::findOrFail($id);
    $role->delete();
    return redirect()->route('roles.index')->with('success', 'Rol eliminado exitosamente');
}

public function showForm($userId)
    {
        $user = User::find($userId);
        $roles = Role::all(); // Obtener todos los roles

        return view('users.assign_role', ['userId' => $userId, 'user' => $user, 'roles' => $roles]);
    }


    public function assignRole(Request $request, $userId)
    {
        // Encontrar el usuario
        $user = User::find($userId);

        // Verificar si el usuario existe
        if (!$user) {
            return redirect()->back()->with('error', 'Usuario no encontrado');
        }

        // Obtener el ID del rol seleccionado desde el formulario
        $roleId = $request->input('role_id');

        // Encontrar el rol por su ID
        $role = Role::find($roleId);

        // Verificar si el rol existe
        if (!$role) {
            return redirect()->back()->with('error', 'Rol no encontrado');
        }

        // Asociar el rol con el usuario
        $user->roles()->attach($role);

        return redirect()->route('user.show', $userId)->with('success', 'Rol asignado exitosamente');
    }


}
