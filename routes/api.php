<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SaleController;

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

Route::controller(AuthController::class)->group(function() {
    Route::post('/auth/login', 'login');
    Route::middleware('auth:api')->post('/auth/logout', 'logout');
});


// Rutas protegida
Route::middleware('auth:api')->group(function() {
    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });

    Route::controller(SaleController::class)->group(function() {
        Route::post('sales/new-sale', 'newSale');
        Route::get('sales/all-sales', 'allSales');
        Route::get('sales/money-sales', 'moneySales');
    });
});
