<?php

namespace App\Http\Controllers;

use App\Models\Acount;
use Illuminate\Http\Request;

class AcountController extends Controller
{

    // try {
    //     $validator = $request->validate([
    //         'NumberAcount' => 'required',
    //         'balance' =>'required'

    //     ]);

    // } catch (\Exception $e) {
    //     return response()->json([
    //         'message' => $e->getMessage()
    //     ], 400);
    // }

    // $acount = Acount::create([
    //     'NumberAcount' => $request->NumberAcount,
    //     'balance' => $request->balance,


    // ]);

    // return response()->json($acount,201);


    public function index()
    {
        return Acount::get();
    }

    public function update($id, Request $request)
    {
        Acount::where('id', $id)
            ->update([
                'NumberAcount' => $request->NumberAcount, 'balance' => $request->balance
            ]);


        return 'cuenta actualizada con exito';
    }

    public function show($id)
    {
        return Acount::find($id);
    }

    public function destroy($id)
    {
        Acount::where('id', $id)->delete();
        return 'cuenta eliminada con exito ';
    }
}

