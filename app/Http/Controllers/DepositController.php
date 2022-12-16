<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DepositController extends Controller
{
    public function create(Request $request)
    {
        try {
            $validator = $request->validate([
                'deposits' => 'required',
                'acount_id' =>'required'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
        $deposits = Deposit::create([
            'deposits' => $request->deposits,
            'acount_id' => $request->acount_id
            
        ]);
        $usuario=$request->acount_id;
        //return 'Su deposito fue realizado con exito';

        // return
        //  where:: ;


        // $user = User::create([
        //     'deposits' => $request->deposits

        // ]);

        // return response()->json($deposits,201);





    }

    public function index()
    {       
        return Deposit::get();       
    }
    public function update($id, Request $request)
    {
        Deposit::where('id', $id)
            ->update(['deposits' => $request->deposits]);



        return 'Deposito actualizado con exito';
    }

    public function show($id)
    {
        return Deposit::find($id);
    }

    public function destroy($id)
    {
        Deposit::where('id', $id)->delete();
        return 'Deposito eliminado con exito ';
    }
}
