<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MperfilController extends Controller
{
    //

    public function perfilEdit(){
        return view('contenido.perfil');
    }
}
