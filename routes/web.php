<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/laporan', function () {

    return view('laporan');

});
