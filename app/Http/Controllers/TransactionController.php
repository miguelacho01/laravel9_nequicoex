<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        

        
    public function create(Request $request)
    {
        try {
            $validator = $request->validate([
                'send' => 'required'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }

        $transaction = Transaction::create([
            'send' => $request->send,
            'acountEnviar_id' =>$request->acountEnviar_id,
            'acountRecibir_id' =>$request->acountRecibir_id
            
        ]);

        return response()->json($transaction,201);



    }

    public function index()
    {
        return Transaction::get();
    }

    public function update($id, Request $request)
    {
        Transaction::where('id', $id)
            ->update(['send' => $request->send]);

        return 'transaccion realizada con exito';
    }

    public function show($id)
    {
        return Transaction::find($id);

    }

    public function destroy($id)
    {
        Transaction::where('id', $id)->delete();
        return 'Transaccion eliminada con exito ';
    }



















    }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\transaction  $transaction
//      * @return \Illuminate\Http\Response
//      */
//     public function show(transaction $transaction)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\transaction  $transaction
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, transaction $transaction)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\transaction  $transaction
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(transaction $transaction)
//     {
//         //
//     }
// }
