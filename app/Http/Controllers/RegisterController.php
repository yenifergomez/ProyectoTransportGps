<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view('login.index');
    }

   public function register(RegisterRequest $request){
    $user = User::create($request->validated());
    return redirect('/login')->with('success', 'Account created successfully');
}

 public function registro (Request $request){
    $request-> validate([
        'usuario'=> 'required|unique:users,usuario',
            'email'=> 'required|unique:users,email',
            'password'=> 'required|min:8',


    ]);

    $user = new User();
    $user-> usuario=$request->usuario; 
    $user-> email=$request->email; 
    $user-> password=$request->password; 
    $user-> save(); 
    return rasponse()->json(["mensaje"="usuario registrado correctamente"],201);
 }
}


