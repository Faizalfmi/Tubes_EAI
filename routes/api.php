<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cabang',[ApiController::class,'indexCabang']);
Route::post('/cabang',[ApiController::class,'storeCabang']);
Route::get('/cabang/{id}',[ApiController::class,'showCabang']);
Route::put('/cabang/{id}/edit',[ApiController::class,'editCabang']);
Route::delete('/cabang/{id}/delete',[ApiController::class,'deleteCabang']);
