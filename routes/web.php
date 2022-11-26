<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', [HomeController::class,'index']);
Route::get('/index/admin/dosen', [IndexController::class,'homeAdmin']);
Route::get('/index/admin/mahasiswa', [IndexController::class,'adminMhs']);

//CRUD DOSEN
Route::get('/index/tambahDosen', [IndexController::class,'tambahDosen']);
Route::get('/index/hapus/{id}', [IndexController::class,'hapusDosen']);
//CRUD MAHASISWA
Route::get('/index/tambahMahasiswa', [IndexController::class,'tambahMhs']);
Route::get('/index/hapusMhs/{id}', [IndexController::class,'hapusMhs']);
Route::get('/index/editMhs/{id}', [IndexController::class,'editMhs']);
Route::post('/index/updateMhs', [IndexController::class,'updateMhs']);

//Fitur Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class,'home']);

//Fitur Dosen
Route::get('/presensi', [DosenController::class,'home']);
Route::get('/presensi/bukaabsen/{id}', [DosenController::class,'bukaabsen']);
Route::post('/presensi/Absensi', [DosenController::class,'store']);

//mahasiswa
Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () {
  
    Route::get('/mahasiswa/home', [HomeController::class, 'homeMhs'])->name('home.Mhs');
});
  
//admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'homeAdmin'])->name('home.Admin');
});
  
//dosen
Route::middleware(['auth', 'user-access:dosen'])->group(function () {
  
    Route::get('/dosen/home', [HomeController::class, 'homeDosen'])->name('home.Dosen');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');