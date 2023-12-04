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
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PerfilUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\updateProfile;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ForoadminController;
use App\Http\Controllers\RoleController;




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

Route::get('/contraseña', [PasswordController::class, 'password'])->name('contraseña');


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
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::post('/assign-role/{user}', [UserController::class, 'assignRole'])->name('assign.role');

Route::post('/users/assign-role/{user}', [UserController::class, 'assignRole'])->name('assign.role');

Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.perfil.delete');

Route::post('/assign-role/{id}', 'UserController@asignarRol')->name('assign.role');
Route::get('/contraseña', [PasswordController::class, 'password'])->name('contraseña');
Route::get('/users', [UserController::class, 'index'])->name('delete.account');




//RUTAS COMENTARIOS ADMINISTRACION EDITAR + ELIMINAR
Route::get('/Foro-Administracion', function () {
    return view('admin.adforo');
});
Route::get('/admin/adforo', [ForoadminController::class, 'index'])->name('admin.adforo');

Route::get('/admin/editar_comentario/{id}', [ForoadminController::class, 'editComment'])->name('admin.editComment');

Route::put('/admin/actualizar_comentario/{id}', [ForoadminController::class, 'updateComment'])->name('admin.updateComment');

Route::delete('/admin/eliminar_comentario/{id}', [ForoadminController::class, 'deleteComment'])->name('admin.deleteComment');

Route::get('/admin/adforo', [ForoadminController::class, 'index'])->name('admin.adforo');

Route::get('/admin/perfil/search', [UserController ::class, 'search'])->name('admin.perfil.search');


//RUTAS ROLES

 Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

 Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');

 Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');

 Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');

 Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');

 Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

 Route::get('/users/{userId}', [RoleController::class, 'show'])->name('user.show');

 Route::post('/users/{userId}/assignRole', [RoleController::class, 'assignRole'])->name('user.assignRole');
 Route::get('/users/{userId}/assignRoleForm', [UserController::class, 'showForm'])->name('user.assignRoleForm');
Route::post('/users/{userId}/assignRole', [UserController::class, 'assignRole'])->name('user.assignRole');



 Route::get('/reportes', 'ReportController@mostrarReportes')->name('ruta_para_mostrar_reportes');
 
 Route::delete('/reportes/{id}', 'ReportController@eliminarReporte')->name('ruta_para_eliminar_reporte');
 
 //RUTAS PERFIL DE USUARIO

 Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

 Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

 Route::post('/perfil', 'App\Http\Controllers\updateProfile@updateProfile')->name('perfil.update');

 Route::delete('/eliminar-cuenta', [updateProfile::class, 'deleteAccount'])->name('delete.account');


 //FORO 

 Route::get('/foro', [CommentController::class, 'foroWeb']);

 Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

 Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');



 
