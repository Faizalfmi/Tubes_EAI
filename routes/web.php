<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\PemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Cabang CRUD
Route::get('/cabang',[CabangController::class,'index']);
Route::post('/cabang',[CabangController::class,'store']);
Route::put('/cabang/{id}',[CabangController::class,'edit']);
Route::get('/cabang/del/{id}', [CabangController::class,'delete'])->name('cabangDelete');

// Pemesanan
Route::get('/pemesanan',[PemesananController::class,'index']);

//Kurir
Route::get('/kurir',[KurirController::class,'index']);
