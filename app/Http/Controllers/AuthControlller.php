<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControlller extends Controller
{
    public function login(Request $request)
    {
        return $credentials = $request->only(['email', 'password']);
        


        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $token;
    }
}
