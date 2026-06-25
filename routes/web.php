<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;

Route::get('/', function () {

    return view('login');

});

Route::get('/admin', function () {

    return view('dashboard-admin');

});

Route::get('/petugas', function () {

    return view('dashboard-petugas');

});

Route::get('/logout', function () {

    return redirect('/');

});

Route::get('/transaksi', function () {

    return view('transaksi');

});

Route::post('/transaksi', function (Request $request) {

    session([

        'nama' => $request->nama,

        'layanan' => $request->layanan,

        'berat' => $request->berat,

        'total' => $request->total,

        'status' => $request->status,

    ]);

    return redirect('/laporan');

});

Route::get('/laporan', function () {

    return view('laporan');

});
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
