<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController  extends Controller
{
    // ... Otros métodos del controlador

    /**
     * Destruye la sesión autenticada del usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout(); // Cierra la sesión del usuario
        return redirect('/iniciar'); // Redirige a la página principal u otra ruta deseada después de cerrar sesión
    }
    
}