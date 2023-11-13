<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalonKetosController;
use App\Http\Controllers\PilihKetosController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(AuthController::class)->group(function () {
    Route::get('admin', 'login')->name('login');
    Route::post('do_login', 'do_login')->name('do_login');

    Route::get('/', 'loginsiswa')->name('loginsiswa');
    Route::post('do_loginsiswa', 'do_loginsiswa')->name('do_loginsiswa');
    Route::post('logout', 'logout')->name('logout');
    Route::post('logout-siswa', 'logout_siswa')->name('logout_siswa');
});


Route::middleware(['admin'])->group(function(){
    Route::resource('pilketos', CalonKetosController::class);
    Route::resource('riwayat', RiwayatController::class);
    Route::resource('siswa', SiswaController::class);
});


Route::resource('pilihketos', PilihKetosController::class)->middleware('siswa');

