<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ResepsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
});


  //pasien 
Route::get('/pasiens', [PasienController::class,'LihatPasien']);


//dokter
Route::get('/dokters', [DokterController::class,'LihatDokter']);


//resep
Route::get('/reseps', [ResepsController::class,'LihatResep']);

//user
Route::get('/users', [UserController::class,'LihatUser']);

//daftars
Route::get('/daftars', [DaftarController::class,'LihatDaftar']);
