<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaKebutuhanKhususController;
use App\Http\Controllers\SiswaRiwayatKeaktifanController;
use App\Http\Controllers\SiswaDetailController;
use App\Http\Controllers\SiswaBeasiswaController;
use App\Http\Controllers\SiswaPrestasiController;
use App\Http\Controllers\SiswaPendidikanLainController;
use App\Http\Controllers\SiswaInformasiOrangtuaController;
use App\Http\Controllers\SiswaAlamatOrangtuaController;

Route::apiResource('siswa_alamat_orangtua', SiswaAlamatOrangtuaController::class);

Route::apiResource('siswa_informasi_orangtua', SiswaInformasiOrangtuaController::class);

Route::apiResource('siswa_pendidikan_lain', SiswaPendidikanLainController::class);

Route::apiResource('siswa_prestasi', SiswaPrestasiController::class);

Route::apiResource('siswa_beasiswa', SiswaBeasiswaController::class);

Route::apiResource('siswa_detail', SiswaDetailController::class);

Route::apiResource('siswa_riwayat_keaktifan', SiswaRiwayatKeaktifanController::class);

Route::apiResource('siswa_kebutuhan_khusus', SiswaKebutuhanKhususController::class);

Route::apiResource('siswa', SiswaController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
