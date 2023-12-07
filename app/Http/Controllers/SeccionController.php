<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionController extends Controller
{
    public function index()
    {
        // Verificar si el usuario tiene el rol necesario
        if (!auth()->user()->hasRole('admin')) {
            // Redirigir a una página de acceso no autorizado o mostrar un error
            return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta sección.');
        }

        // Lógica para la sección
        return view('admin.perfil'); // Retorna la vista de la sección
    }
}
