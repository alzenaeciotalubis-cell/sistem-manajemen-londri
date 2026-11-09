
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PembayaranController;

// HALAMAN LOGIN
Route::view('/', 'login')->name('login');

// DASHBOARD ADMIN
Route::view('/admin', 'dashboard-admin')->name('admin.dashboard');

// DASHBOARD PETUGAS
Route::view('/dashboard-petugas', 'dashboard-petugas')
    ->name('petugas.dashboard');

// DATA PELANGGAN
Route::resource('pelanggan', PelangganController::class);

// DATA PAKET LAUNDRY
Route::resource('paket', PaketController::class);

// DATA TRANSAKSI
Route::resource('transaksi', TransaksiController::class);

// DATA PETUGAS
Route::resource('petugas', PetugasController::class);

// DATA PEMBAYARAN
Route::resource('pembayaran', PembayaranController::class);

// HALAMAN LAPORAN
Route::view('/laporan', 'laporan')->name('laporan');

// LOGOUT
Route::get('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');
