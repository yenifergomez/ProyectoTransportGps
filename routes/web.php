<?php

use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

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
    return view('login.index');
});

Route::get('/register', function(){
    return view('login.index');
});

//RUTAS DE REGISTRO
Route::post('/register', [RegisterController::class, 'register']);

//RUTAS DE LOGIN
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'show']);

Route::get('/home',[HomeController::class, 'index']);

//RUTAS CONTENIDO
Route::get('/contenido', [ContenidoController::class, 'indexContenido']);