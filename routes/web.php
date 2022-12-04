<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('auth.login');
});

Auth::routes();

Route::post('/login', [LoginController::class,'login'])->name('login');
Route::get('/index/admin/dosen', [IndexController::class,'homeAdmin']);
Route::get('/index/admin/mahasiswa', [IndexController::class,'adminMhs']);
Route::get('/index/admin/cek', [IndexController::class,'cekPresensi']);
Route::get('/index/editPresensi/{id}', [IndexController::class,'editPresensi']);
Route::post('/index/updatePresensi', [IndexController::class,'updatePresensi']);

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
Route::post('/mahasiswa/Presensi', [MahasiswaController::class,'absen']);
Route::get('/mahasiswa/dashboardsukses', [MahasiswaController::class,'dashboard']);

//Fitur Dosen
Route::get('/presensi', [DosenController::class,'home']);
Route::get('/presensi/bukaabsen/{id}', [DosenController::class,'bukaabsen']);
Route::post('/presensi/Absensi', [DosenController::class,'store']);
Route::get('/presensi/Lihat', [DosenController::class,'view']);



//mahasiswa
Route::middleware(['auth', 'useraccess:mahasiswa'])->group(function () {
  
    Route::get('/mahasiswa', [MahasiswaController::class, 'home'])->name('homeMhs');
});
//admin
Route::middleware(['auth', 'useraccess:admin'])->group(function () {
  
    Route::get('/index/admin', [IndexController::class, 'homeAdmin'])->name('homeAdmin');
});
  
//dosen
Route::middleware(['auth', 'useraccess:dosen'])->group(function () {
  
    Route::get('/presensi', [DosenController::class, 'home'])->name('homeDosen');
});

//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');