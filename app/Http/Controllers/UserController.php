<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



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
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('usuario');
        // Actualizar otros campos si es necesario
        $user->save();
        return redirect()->route('admin.perfil')->with('success', 'Usuario actualizado exitosamente');
    }
}
