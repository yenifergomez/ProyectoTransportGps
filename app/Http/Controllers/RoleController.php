<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role; 
use App\Models\User; 


class RoleController extends Controller
{
    public function rolle(){
        return view('admin.roles');
    }

    public function assignRolesView()
    {
        $users = User::all();
        $roles = Role::all();

        return view('admin.roles', compact('users', 'roles'));
    }

    public function assignRoles(Request $request)
    {
        $userId = $request->input('user');
        $roleId = $request->input('role');

        $user = User::find($userId);
        $role = Role::find($roleId);

        $user->roles()->attach($role);

        return redirect()->route('assign.roles')->with('success', 'Rol asignado correctamente');
    }
}
