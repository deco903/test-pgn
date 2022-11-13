<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend
Route::get('/',[UserController::class,'index']);
Route::get('/inputPemudik',[UserController::class,'inputPemudik'])->name('inputPemudik');
Route::post('/storePemudik',[UserController::class,'storePemudik'])->name('storePemudik');
Route::get('/cekverifikasi',[UserController::class,'cekveriFikasi'])->name('cekverifikasi');
Route::get('/cetakTiket/{id}',[UserController::class,'cetakTiket'])->name('cetakTiket');

Route::get('/dashboard',[DashController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/store',[DashController::class,'store'])->name('store')->middleware('auth');
Route::get('/editTransportasi/{id}',[DashController::class,'editTransportasi'])->name('editTransportasi')->middleware('auth');
Route::post('/updateTransportasi/{id}',[DashController::class,'updateTransportasi'])->name('updateTransportasi')->middleware('auth');
Route::get('/hapusTransportasi/{id}',[DashController::class,'hapusTransportasi'])->name('hapusTransportasi')->middleware('auth');
Route::get('/listPemudik',[DashController::class,'listPemudik'])->name('listPemudik')->middleware('auth');
Route::get('/daftarJumlah',[DashController::class,'daftarJumlah'])->name('daftarJumlah')->middleware('auth');
Route::get('/verivikasi/status/{id}',[DashController::class,'editVerifikasi'])->name('editVerifikasi')->middleware('auth');
Route::put('/verivikasi/update/{id}',[DashController::class,'updateVerifikasi'])->name('updateVerifikasi')->middleware('auth');


//Backend
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginproses',[AuthController::class,'loginproses'])->name('loginproses');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registerproses',[AuthController::class,'registerproses'])->name('registerproses');
 
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


