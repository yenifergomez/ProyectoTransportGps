<?php

use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\IniciController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ForoController;
use App\Http\Controllers\MperfilController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PerfilUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio.iniciar');
});

Route::get('/register', function(){
    return view('login.index');
});

//RUTAS DE REGISTRO

Route::get('/login', function(){
    return view('login.index');
});

//RUTAS AUTENTICACION



//RUTAS DE LOGIN
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home',[HomeController::class, 'index']);


Route::post('/register', [RegisterController::class, 'register']);

//RUTAS CONTENIDO
Route::get('/contenido', [ContenidoController::class, 'indexContenido']);

Route::get('/iniciar', [InicioController::class, 'iniciarContenido']);

Route::get('/perfil', [ProfileController::class, 'perfilUser']);


//RUTAS LOGOUT
Route::get('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@logout')
    ->name('logout.get');

//RUTAS MOSTRAR, EDITAR, ELIMINAR Users...ADMINISTRACION

 Route::get('/admin', [UserController::class, 'index'])->name('admin.perfil'); 

 Route::get('/perfil/{user}/edit', [UserController::class, 'edit'])->name('admin.perfil.edit'); 

 Route::put('/perfil/{user}', [UserController::class, 'update'])->name('admin.perfil.update'); 

 Route::delete('/admin/perfil/{user}', [UserController::class, 'destroy'])->name('admin.perfil.delete');

 
//RUTAS ASIGNAR ROLES
 Route::get('/users', [UserController::class, 'index']);

 Route::post('/assign-role/{user}', 'UserController@assignRole')->name('assign.role');

 Route::post('/users/assign-role/{user}', [UserController::class, 'assignRole'])->name('assign.role');

 Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.perfil.delete');

 Route::post('/assign-role/{id}', 'UserController@asignarRol')->name('assign.role');

 Route::get('/users', [UserController::class, 'index'])->name('admin.perfil');


 //RUTAS PERFIL DE USUARIO

 Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

 Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

 Route::post('/perfil', 'App\Http\Controllers\updateProfile@updateProfile')->name('perfil.update');


 //FORO 

 Route::get('/foro', [CommentController::class, 'foroWeb']);

 Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

 Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');