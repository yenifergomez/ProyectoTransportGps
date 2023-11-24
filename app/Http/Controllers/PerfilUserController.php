<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuario;

class PerfilUserController extends Controller
{
    //

    public function perfilUser(){
        return view('contenido.userp');
    }

    public function mostrarPerfil($id) {
        $usuario = User::find($id); // Aquí buscas el usuario por su ID
    
        return view('perfil', compact('usuario'));
    }
    
    

    public function actualizarPerfil(Request $request, $id)
    {
        $usuario = User::findOrFail($id); 
        $usuario->usuario = $request->input('usuario');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password')); 

        $usuario->save(); 

        return redirect()->route('perfil.mostrar')->with('success', 'Perfil actualizado correctamente');
    }


    public function showProfile() {
        $usuario = User::find(1); 
    
        return view('profile.show', compact('usuario'));
    }

    public function editProfile() {
        $usuario = User::find(1); 
    
        return view('profile.edit', compact('usuario'));
    }


    public function showUserProfile($userId)
    {
        $usuario = User::find($userId); 
    
        if (!$usuario) {
            // Manejar el caso en que el usuario no sea encontrado
            abort(404); // Por ejemplo, lanzar un error 404 (usuario no encontrado)
        }
    
        return view('contenido.userp', compact('usuario'));
    }


}
