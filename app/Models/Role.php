<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'name', // Asegúrate de incluir los campos que correspondan a tu tabla de roles
        'description',
    ];

    // Relaciones con otros modelos, por ejemplo, relación con usuarios
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
