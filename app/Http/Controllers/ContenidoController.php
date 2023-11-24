<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ContenidoController extends Controller
{
    //

    public function indexContenido(){
        return view('contenido.principal');
    }


  
}
