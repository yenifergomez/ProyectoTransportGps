<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Spatie\Permission\Models\Role;

 return new class extends Migration
 {
    /**
     * Run the migrations.
     */
     public function up(): void
     {
         $role1 = Role::create(['name' => 'Administrador']);
         $role2 = Role::create(['name' => 'Usuario']);
         $user = User::find('1');
         $user -> assignRole($role1);
        

         Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();
        });
        
    }

    public function down()
    {
    }
 };
 
