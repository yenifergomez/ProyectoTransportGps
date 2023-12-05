<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Role;
use App\Models\Image;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    use HasRoles;


    protected $fillable = [
        'usuario',
        'email',
        'password',
        'profile_image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function mostrarPerfil($id) {
        $usuario = User::find($id);
        return view('perfil', compact('usuario'));
    }

}
