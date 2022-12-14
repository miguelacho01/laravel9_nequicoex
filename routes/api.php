<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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