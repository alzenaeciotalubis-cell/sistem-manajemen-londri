<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PetugasController;     // <-- Sudah ditambahkan biar tidak eror
use App\Http\Controllers\PembayaranController;  // <-- Sudah ditambahkan biar tidak eror

// 1. Halaman Awal saat pertama dibuka (Login)
Route::get('/', function () {
    return view('login');
});

// 2. Halaman Dashboard Utama (Admin & Petugas)
Route::get('/admin', function () {
    return view('dashboard-admin');
});

Route::get('/dashboard-petugas', function () {
    return view('dashboard-petugas');
});

Route::get('/logout', function () {
    return redirect('/');
});

// 3. JALUR CRUD OTOMATIS
Route::resource('pelanggan', PelangganController::class);
Route::resource('paket', PaketController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('pembayaran', PembayaranController::class);

// 4. Halaman Tambahan
Route::get('/laporan', function () {
    return view('laporan');
});
