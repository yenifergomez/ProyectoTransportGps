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


   
    public function showAssignRoleForm()
{
    $users = User::all();
    $roles = Role::all();
    return view('asignar-rol', compact('users', 'roles'));
}


    public function assignRole(Request $request)
    {
        $userId = $request->input('user_id');
        $roleName = $request->input('role');

        $user = User::findOrFail($userId);
        $role = Role::where('name', $roleName)->first();

        if ($user && $role) {
            $user->assignRole($role);
            return redirect()->back()->with('success', 'Rol asignado correctamente');
        }

        return redirect()->back()->with('error', 'Usuario o rol no encontrado');
    }
    
        
        
}
