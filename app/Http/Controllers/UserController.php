<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function create(Request $request)
    {
        try {
            $validator = $request->validate([
                'name' => 'required',
                'email' =>'required|email',
                'password' =>'required|min:6',


            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }

        $user = User::create([
            'name' => $request->send,
            'email' => $request->email,
            'password' => $request->password
            
        ]);

        return response()->json($user,201);



    }

    public function index()
    {
        return User::get();
    }

    public function update($id, Request $request)
    {
        User::where('id', $id)
            ->update(['name' => $request->name
           , 'email' => $request->email
          , 'password' => $request->password]);


        return 'Usuario actualizado con exito';
    }

    public function show($id)
    {
        return User::find($id);

    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return 'Usuario eliminado con exito ';
    }














}
