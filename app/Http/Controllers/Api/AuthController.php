<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
       $credentials = $request->validated();
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Provided email address or password is incorrect'], 422);
        }

        /** @var User $user */
        $user  = Auth::user();
        $token = $user->createToken('main')->plainTextToken;

        return response()->json($token);
    }

    public function logout(Request $request)
    {
        // Indicamos que este es una instancia de un user
        /** @var User $user  */
        $user = $request->user();
        $user->currentAccessToken()->delete();
        return response('', 204);
    }
}
