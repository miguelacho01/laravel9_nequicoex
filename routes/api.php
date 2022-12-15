<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcountController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Crear las rutas para nequiCoex
Route::group(['prefix'=>'user'],function(){
    Route::post('',[UserController::class,'create']);
    Route::get('',[UserController::class,'index']);
    Route::get('{id}',[UserController::class,'show']);
    Route::put('{id}',[UserController::class,'update']);
    Route::delete('{id}',[UserController::class,'delete']);
});

Route::group(['prefix' => 'acounts'], function () {
    Route::post('', [AcountController::class, 'create']);
    Route::get('', [AcountController::class, 'index']);
    Route::get('{id}', [AcountController::class, 'show']);
    Route::put('{id}', [AcountController::class, 'update']);
    Route::delete('{id}', [AcountController::class, 'delete']);    
});

Route::group(['prefix' => 'transactions'], function () {
    Route::post('', [TransactionController::class, 'create']);
    Route::get('', [TransactionController::class, 'index']);
    Route::get('{id}', [TransactionController::class, 'show']);
    Route::put('{id}', [TransactionController::class, 'update']);
    Route::delete('{id}', [TransactionController::class, 'delete']);    
});
Route::group(['prefix'=>'deposits'],function(){
    Route::post('',[DepositController::class,'create']);
    Route::get('',[DepositController::class,'index']);
    Route::get('{id}',[DepositController::class,'show']);
    Route::put('{id}',[DepositController::class,'update']);
    Route::delete('{id}',[DepositController::class,'delete']);
});
