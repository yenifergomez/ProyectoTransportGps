<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

  /**
   * Register by user
   *
   * @param Request $request
   */
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'usuario'         => 'required|string|max:255',
      'email'           => 'required|string|email|unique:users',
      'password'        => 'required|string|min:8',
      'passwordConfirm' => 'required|min:8|same:password'
    ]);


    if ($validator->fails()) {
      return response()->json(['errors' => $validator->errors()], 422);
    }


    $user =  User::create([
      'usuario'         => $request->usuario,
      'email'           => $request->email,
      'password'        => Hash::make($request->password),
    ]);

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer',]);
  }

  public function login(Request $request)
  {
    if (Auth::attempt($request->only('email', 'password'))) {
      return response()
        ->json(['message' => 'Unauthorized'], 401);
    }

    $user = User::where('email', $request['email'])->firstOrFail();

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()
      ->json([
        'message'      => 'Hi! ' . $user->name,
        'access_token' => $token,
        'token_type'   => 'Bearer',
        'user'         => $user,
      ]);
  }

}
