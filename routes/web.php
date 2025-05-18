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



  //pasien 
Route::get('/lihatpasien', [PasienController::class,'LihatPasien']);


//dokter
Route::get('/lihatdokter', [DokterController::class,'LihatDokter']);


//resep
Route::get('/lihatresep', [ResepsController::class,'LihatResep']);

//user
Route::get('/lihatuser', [UserController::class,'LihatUser']);

//daftars
Route::get('/lihatdaftar', [DaftarController::class,'LihatDaftar']);