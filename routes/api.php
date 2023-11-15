<?php

use App\Http\Controllers\Api\PengaduanController;
use App\Http\Controllers\Api\PenggunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('pengguna', PenggunaController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::post('login', [PenggunaController::class, 'login']);
Route::get('pengaduanByIdUser/{id}', [PengaduanController::class, 'getTransaksiByIdUser']);
