<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengeluaranController;
// TAMBAHAN: Menghubungkan ke LaporanController yang baru dibuat
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('login');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/admin', function () {
    return view('dashboard-admin');
})->name('dashboard');

Route::get('/dashboard-petugas', function () {
    return view('dashboard-petugas');
});

/*
|--------------------------------------------------------------------------
| Master Data
|--------------------------------------------------------------------------
*/
Route::resource('pelanggan', PelangganController::class);
Route::resource('paket', PaketController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('pengeluaran', PengeluaranController::class);

/*
|--------------------------------------------------------------------------
| Laporan
|--------------------------------------------------------------------------
*/
// PERBAIKAN: Sekarang rute ini memanggil fungsi index() di LaporanController
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

/*
|--------------------------------------------------------------------------
| Detail Transaksi
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/
Route::get('/logout', function () {
    return redirect('/');
})->name('logout');
