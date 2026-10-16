<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\ResepObatController;

Route::get('/', function () {
    return view('healthtech');
});

Route::resource('pasien', PasienController::class);
Route::resource('dokter', DokterController::class);
Route::resource('konsultasi', KonsultasiController::class);
Route::resource('resep-obat', ResepObatController::class);