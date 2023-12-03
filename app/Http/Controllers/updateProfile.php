<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class updateProfile extends Controller
{
    //
    public function profile(){
        return view('contenido.userp');
    }



    public function updateProfile(Request $request)
    {
        try {
            $user = Auth::user();
    
            if ($request->hasFile('profile_image')) {
                $image = $request->file('profile_image');
                
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/profile_images'), $imageName);
                
                $user->profile_image = 'uploads/profile_images/' . $imageName;
            }
    
            $user->save();
    
            return redirect('/')->back()->with('success', 'Perfil actualizado correctamente');
        } catch (\Exception $e) {
            return redirect('/perfil')->with('error', 'Error al actualizar el perfil: ' . $e->getMessage());
        }
    }
    

    public function deleteAccount(Request $request)
    {
        try {
            $user = Auth::user();


            DB::beginTransaction();

            $user->delete();

            Auth::logout();

            DB::commit();

            return redirect('/')->with('success', 'Cuenta eliminada correctamente');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('/perfil')->with('error', 'Error al eliminar la cuenta: ' . $e->getMessage());
        }
    }






}

        
    











    

