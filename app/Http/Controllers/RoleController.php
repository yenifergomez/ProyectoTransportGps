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
    
        return view('admin.roles', [
            'users' => $users,
            'roles' => $roles,
        ]);
    }
    

    public function showRoleAssignmentForm()
    {
        $users = User::all();
        $roles = Role::all();

        return view('admin.role_assignment', [
            'users' => $users,
            'roles' => $roles,
        ]);
    }
}
