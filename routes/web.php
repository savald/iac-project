<?php

use App\Http\Controllers\CBSController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\InisiasiARVController;
use App\Http\Controllers\KonfirmasiCBSController;
use App\Http\Controllers\PartnerNotifikasiController;
use App\Http\Controllers\PemetaanController;
use App\Http\Controllers\PenjangkauanController;
use App\Http\Controllers\ReinisiasiARVController;
use App\Http\Controllers\RetensiARVController;
use App\Http\Controllers\RujukanTesController;
use App\Http\Controllers\TemuanKasusController;
use App\Http\Controllers\ViralLoadController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index']);

Route::prefix('form-fsw')->group(function () {
  Route::get('/data-pribadi', [DataPribadiController::class, 'index']);
  Route::get('/pemetaan', [PemetaanController::class, 'index']);
  Route::get('/penjangkauan', [PenjangkauanController::class, 'index']);
  Route::get('/rujukan-tes', [RujukanTesController::class, 'index']);
  Route::get('/cbs', [CBSController::class, 'index']);
  Route::get('/konfirmasi-cbs', [KonfirmasiCBSController::class, 'index']);
  Route::get('/temuan-kasus', [TemuanKasusController::class, 'index']);
  Route::get('/inisiasi-arv', [InisiasiARVController::class, 'index']);
  Route::get('/retensi-arv', [RetensiARVController::class, 'index']);
  Route::get('/reinisiasi-arv', [ReinisiasiARVController::class, 'index']);
  Route::get('/partner-notifikasi', [PartnerNotifikasiController::class, 'index']);
  Route::get('/viral-load', [ViralLoadController::class, 'index']);
});

Route::prefix('save')->group(function () {
  Route::post('/data-pribadi', [DataPribadiController::class, 'saveDataPribadi'])->name('data-pribadi');
});

Route::post('/get-kabupaten', [DaerahController::class, 'getKabupaten'])->name('get-kabupaten');
Route::post('/get-kecamatan', [DaerahController::class, 'getKecamatan'])->name('get-kecamatan');
Route::post('/get-kelurahan', [DaerahController::class, 'getKelurahan'])->name('get-kelurahan');
