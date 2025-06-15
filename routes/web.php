<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ResepsController;
use App\Http\Controllers\RoleControl;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AutentikasiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('home')->name('home');
// });

Route::get('/home', [AutentikasiController::class, 'home'])->name('home');

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

//autentikasi
Route::get('/login', [AutentikasiController::class, 'index'])->name('login');
Route::post('/login', [AutentikasiController::class, 'login'])->name('kirimdata');
Route::get('/logout', [AutentikasiController::class, 'logout']);
//regis
Route::get('/register', [AutentikasiController::class, 'tampil_regis']);
Route::post('/register1', [AutentikasiController::class, 'regis'])->name('kirim_data');

//logins
Route::get('/logins', [RoleControl::class, 'logins']);

// //users
// Route::get('/lihatuser', [UserController::class, 'lihatUser']);
// Route::match(['get', 'post'], '/tambahuser', [UserController::class, 'tambahUser']);
// Route::match(['get', 'post'], '/edituser/{id}', [UserController::class, 'editUser']);
// Route::get('/hapususer/{id}', [UserController::class, 'hapusUser']);





