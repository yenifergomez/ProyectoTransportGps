<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    //
    public function show(){
        return view('logueo.Login');
    }
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
           return redirect()->to('/login')->withErrors('Error');
           //return redirect('Error');
        }
       
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user);
        return $this->authenticated($request, $user);

        }
        public function authenticated(Request $request, $user){
            return redirect('/contenido');
    }
    
}
