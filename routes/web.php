<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ResepsController;
use App\Http\Controllers\RoleControl;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AutentikasiController;
use Illuminate\Support\Facades\Route;


//home
Route::get('/home', function () { return view('homeumum'); })->name('home');

//daftars
Route::get('/lihatdaftar', [DaftarController::class, 'lihatDaftar']);
Route::match(['get', 'post'], '/tambahdaftar', [DaftarController::class, 'tambahDaftar']);
Route::get('/hapusdaftar/{id}', [DaftarController::class, 'hapusDaftar'])->name('hapusdaftar');
Route::match(['get', 'post'], '/editdaftar/{id}', [DaftarController::class, 'editDaftar'])->name('editdaftar');

//dokter
Route::get('/lihatdokter', [DokterController::class, 'lihatDokter']);
Route::match(['get', 'post'], '/tambahdokter', [DokterController::class, 'tambahDokter'])->name('tambahdokter');
Route::get('/hapusdokter/{id}', [DokterController::class, 'hapusDokter'])->name('hapusdokter');
Route::match(['get', 'post'], '/editdokter/{id}', [DokterController::class, 'editDokter'])->name('editdokter');

//pasien
Route::get('/lihatpasien', [PasienController::class, 'lihatPasien']);
Route::match(['get', 'post'], '/tambahpasien', [PasienController::class, 'tambahPasien']);
Route::get('/hapuspasien/{id}', [PasienController::class, 'hapusPasien']);
Route::match(['get', 'post'], '/editpasien/{id}', [PasienController::class, 'editPasien']);

//reseps
Route::get('/lihatresep', [ResepsController::class, 'lihatResep']);
Route::match(['get', 'post'], '/tambahresep', [ResepsController::class, 'tambahResep']);
Route::match(['get', 'post'], '/editresep/{id}', [ResepsController::class, 'editResep']);
Route::get('/hapusresep/{id}', [ResepsController::class, 'hapusResep']);

//logout
Route::get('/logout', [AutentikasiController::class, 'logout']);

//logins
Route::get('/logins', [RoleControl::class, 'logins']);
Route::put('/update-role/{id}', [RoleControl::class, 'updateRole'])->name('update.role');
Route::put('/reset-password/{id}', [RoleControl::class, 'resetPassword'])->name('reset.password');

//user
Route::get('/hapususer/{id}', [UserController::class, 'hapusUser'])->name('hapususer');

//regis
Route::get('/login', [AutentikasiController::class, 'tampil_login'])->name('login');
Route::post('/login', [AutentikasiController::class, 'login'])->name('kirimdata');
//regis
Route::get('/register', [AutentikasiController::class, 'tampil_regis'])->name('register');
Route::post('/register1', [AutentikasiController::class, 'regis'])->name('register1');


// Redirect untuk role (buat sementara)
Route::get('/admin', function () { return view('home'); });
Route::get('/dokter', function () { return view('dokters.home'); });
Route::get('/pasien', function () { return view('pasiens.home'); });
