<?php

use App\Http\Controllers\CBSController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\InisiasiARVController;
use App\Http\Controllers\KonfirmasiCBSController;
use App\Http\Controllers\MonitoringPSPController;
use App\Http\Controllers\PartnerNotifikasiController;
use App\Http\Controllers\PemetaanController;
use App\Http\Controllers\PenjangkauanController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\ReinisiasiARVController;
use App\Http\Controllers\RetensiARVController;
use App\Http\Controllers\RujukanTesController;
use App\Http\Controllers\TemuanKasusController;
use App\Http\Controllers\ViralLoadController;
use App\Http\Middleware\EnsureGoToForm;
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
  Route::get('/data-pribadi', [DataPribadiController::class, 'index'])->name('data-pribadi');
  Route::get('/pemetaan', [PemetaanController::class, 'index'])->name('pemetaan');
  Route::get('/penjangkauan', [PenjangkauanController::class, 'index'])->name('penjangkauan')->middleware(EnsureGoToForm::class);
  Route::get('/rujukan-tes', [RujukanTesController::class, 'index'])->name('rujukan-tes');
  Route::get('/cbs', [CBSController::class, 'index'])->name('cbs');
  Route::get('/konfirmasi-cbs', [KonfirmasiCBSController::class, 'index'])->name('konfirmasi-cbs');
  Route::get('/temuan-kasus', [TemuanKasusController::class, 'index'])->name('temuan-kasus');
  Route::get('/inisiasi-arv', [InisiasiARVController::class, 'index'])->name('inisiasi-arv');
  Route::get('/retensi-arv', [RetensiARVController::class, 'index'])->name('retensi-arv');
  Route::get('/reinisiasi-arv', [ReinisiasiARVController::class, 'index'])->name('reinisiasi-arv');
  Route::get('/partner-notifikasi', [PartnerNotifikasiController::class, 'index'])->name('partner-notifikasi');
  Route::get('/viral-load', [ViralLoadController::class, 'index'])->name('viral-load');
  Route::get('/monitoring-psp', [MonitoringPSPController::class, 'index'])->name('monitoring-psp');
});

Route::prefix('save')->group(function () {
  Route::post('/data-pribadi', [DataPribadiController::class, 'saveDataPribadi'])->name('save.pribadi');
  Route::post('/penjangkauan', [PenjangkauanController::class, 'savePenjangkauan'])->name('save.penjangkauan');
  Route::post('/pemetaan', [PemetaanController::class, 'savePemetaan'])->name('save.pemetaan');
});

Route::post('/get-kabupaten', [DaerahController::class, 'getKabupaten'])->name('get-kabupaten');
Route::post('/get-kecamatan', [DaerahController::class, 'getKecamatan'])->name('get-kecamatan');
Route::post('/get-kelurahan', [DaerahController::class, 'getKelurahan'])->name('get-kelurahan');
