<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;


// Halaman Utama / Dashboard
Route::get('/', function () {
    return view('dashboard');
});


// Data Master
Route::resource('pelanggan', PelangganController::class);

Route::resource('paket', PaketController::class);


// Transaksi
Route::resource('transaksi', TransaksiController::class);