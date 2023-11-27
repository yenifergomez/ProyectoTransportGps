<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});


//COMENTARIOS API

Route::prefix('comments')->group(function () {
    Route::get('/', [CommentApi::class, 'index']);
    Route::post('/', [CommentApi::class, 'store']);
    Route::get('/{comment}', [CommentApi::class, 'show']);
    Route::put('/{comment}', [CommentApi::class, 'update']);
    Route::delete('/{comment}', [CommentApi::class, 'destroy']);
});

//ELIMINAR CUENTA API
Route::middleware('auth:api')->delete('/delete-account', 'UserController@deleteAccount');
