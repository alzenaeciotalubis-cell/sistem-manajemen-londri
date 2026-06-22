<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Paket;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Daftar Semua Transaksi
    public function index()
    {
        $transaksi = Transaksi::with(['pelanggan', 'paket'])
            ->latest()
            ->get();

        return view('transaksi.index', compact('transaksi'));
    }


    // Halaman Tambah
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $paket = Paket::all();

        return view('transaksi.create', compact('pelanggan', 'paket'));
    }


    // Simpan Data
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'paket_id' => 'required',
            'berat_kg' => 'required|numeric|min:0.1'
        ]);


        $paket = Paket::findOrFail($request->paket_id);

        $total = $paket->harga * $request->berat_kg;


        Transaksi::create([
            'pelanggan_id' => $request->pelanggan_id,
            'paket_id' => $request->paket_id,
            'berat_kg' => $request->berat_kg,
            'total_harga' => $total,
            'status' => 'proses'
        ]);


        return redirect()
            ->route('transaksi.index')
            ->with('sukses', 'Transaksi berhasil disimpan');
    }


    // Halaman Edit
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $pelanggan = Pelanggan::all();
        $paket = Paket::all();


        return view('transaksi.edit', compact(
            'transaksi',
            'pelanggan',
            'paket'
        ));
    }


    // Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'paket_id' => 'required',
            'berat_kg' => 'required|numeric|min:0.1',
            'status' => 'required'
        ]);


        $paket = Paket::findOrFail($request->paket_id);

        $total = $paket->harga * $request->berat_kg;


        $transaksi = Transaksi::findOrFail($id);


        $transaksi->update([
            'pelanggan_id' => $request->pelanggan_id,
            'paket_id' => $request->paket_id,
            'berat_kg' => $request->berat_kg,
            'total_harga' => $total,
            'status' => $request->status
        ]);


        return redirect()
            ->route('transaksi.index')
            ->with('sukses', 'Transaksi berhasil diperbarui');
    }


    // Hapus Data
    public function destroy($id)
    {
        Transaksi::findOrFail($id)->delete();


        return redirect()
            ->route('transaksi.index')
            ->with('sukses', 'Transaksi berhasil dihapus');
    }
}