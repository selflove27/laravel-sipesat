<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratMasukController;

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

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/surat-keluar', function () {
    return view('dashboard.SuratKeluar');
});

Route::get('/disposisi', function () {
    return view('dashboard.DataDisposisi');
});

Route::get('/data-pengguna', [DashboardController::class, 'index']);
Route::post('/create-data-pengguna', [PenggunaController::class, 'create']);
Route::post('/pengguna/update/{id}', [PenggunaController::class, 'edit']);
Route::delete('/pengguna/delete/{id}', [PenggunaController::class, 'delete']);

Route::get('/surat-masuk', [SuratMasukController::class, 'index']);
Route::post('/create-surat-masuk', [SuratMasukController::class, 'create']);

Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
