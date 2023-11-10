<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register (Request $request){
        return response()->json([
            "message" => "METODO REGISTER"
        ]);

    }

    public function login (Request $request){

    }

    

}
