<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller

{

    // Menampilkan halaman Data Pembayaran

    public function index()

    {

        $data_pembayaran = [];

        return view('pembayaran.index', compact('data_pembayaran'));

    }

    // Menyimpan data pembayaran

    public function store(Request $request)

    {

        return redirect()->route('pembayaran.index')

            ->with('sukses', 'Data pembayaran berhasil disimpan.');

    }

    // Menghapus data pembayaran

    public function destroy($id)

    {

        return redirect()->route('pembayaran.index')

            ->with('sukses', 'Data pembayaran berhasil dihapus.');

    }

}
