<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return redirect('/login');
});


Route::post('/cekLogin', [AuthController::class, 'checkLogin']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::resource('/pengaduan', PengaduanController::class);
Route::resource('/user', UserController::class);
Route::resource('/admin', AdminController::class);
