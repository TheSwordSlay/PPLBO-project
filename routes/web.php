<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AbsensiController;

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

Route::get('/', [MataKuliahController::class, 'index']);
Route::get('/absen', [MataKuliahController::class, 'absen'])->middleware('isLoggedIn');
Route::get('/jadwal', [MataKuliahController::class, 'index'])->name('jadwal');
Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::post('absensi', [AbsensiController::class, 'absen'])->name('absensi');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/logout', [CustomAuthController::class, 'logout']);
Route::get('/daftar-hadir', [AbsensiController::class, 'getAbsen'])->middleware('isAdmin');
Route::get('/edit-matkul', [MataKuliahController::class, 'daftarMatkul'])->middleware('isAdmin');