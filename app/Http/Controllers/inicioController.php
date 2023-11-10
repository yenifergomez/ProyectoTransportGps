<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class InicioController extends Controller
{
    //


    public function iniciarContenido(){
        return view('inicio.Iniciar');
    }
}
