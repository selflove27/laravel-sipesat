<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;


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

Route::get('/surat-masuk', function () {
    return view('dashboard.SuratMasuk');
});

Route::get('/surat-keluar', function () {
    return view('dashboard.SuratKeluar');
});

Route::get('/disposisi', function () {
    return view('dashboard.DataDisposisi');
});

Route::get('/data-pengguna', [DashboardController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);