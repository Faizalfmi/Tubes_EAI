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

//Pemesanan
Route::get('/pemesanan',[ApiController::class,'indexPemesanan']);
Route::post('/pemesanan',[ApiController::class,'storePemesanan']);
Route::get('/pemesanan/{id}',[ApiController::class,'showPemesanan']);
Route::put('/pemesanan/{id}/edit',[ApiController::class,'editPemesanan']);
Route::delete('/pemesanan/{id}/delete',[ApiController::class,'deletePemesanan']);

//Cabang
Route::get('/cabang',[ApiController::class,'indexCabang']);
Route::post('/cabang',[ApiController::class,'storeCabang']);
Route::get('/cabang/{id}',[ApiController::class,'showCabang']);
Route::put('/cabang/{id}/edit',[ApiController::class,'editCabang']);
Route::delete('/cabang/{id}/delete',[ApiController::class,'deleteCabang']);

//Kurir
Route::get('/kurir',[ApiController::class,'indexKurir']);
Route::post('/kurir',[ApiController::class,'storeKurir']);
Route::get('/kurir/{id}',[ApiController::class,'showKurir']);
Route::put('/kurir/{id}/edit',[ApiController::class,'editKurir']);
Route::delete('/kurir/{id}/delete',[ApiController::class,'deleteKurir']);

//Status
Route::get('/status',[ApiController::class,'indexStatus']);
Route::post('/status',[ApiController::class,'storeStatus']);
Route::get('/status/{id}',[ApiController::class,'showStatus']);
Route::put('/status/{id}/edit',[ApiController::class,'editStatus']);
Route::delete('/status/{id}/delete',[ApiController::class,'deleteStatus']);

//Layanan
Route::get('/layanan',[ApiController::class,'indexLayanan']);
Route::post('/layanan',[ApiController::class,'storeLayanan']);
Route::get('/layanan/{id}',[ApiController::class,'showLayanan']);
Route::put('/layanan/{id}/edit',[ApiController::class,'editLayanan']);
Route::delete('/layanan/{id}/delete',[ApiController::class,'deleteLayanan']);