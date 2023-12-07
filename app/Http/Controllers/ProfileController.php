<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;





class ProfileController extends Controller
{
    //
    public function perfilUser(){
        return view('contenido.userp');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
{
    try {
        $user = Auth::user();

        if ($user instanceof User) {
            $user->usuario = $request->input('usuario');
            $user->email = $request->input('email');
            
            $user->save();
        }
        return view('contenido.userp');

    } catch (\Exception $e) {}

    }
}

