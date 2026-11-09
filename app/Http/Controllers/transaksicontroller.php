<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    // DAFTAR TRANSAKSI
    public function index()
    {
        $transaksi = Transaksi::with(['pelanggan', 'paket'])
            ->latest()
            ->get();

        return view('transaksi.index', compact('transaksi'));
    }

    // FORM TAMBAH TRANSAKSI
    public function create()
    {
        $paket = Paket::all();

        return view('transaksi.create', compact('paket'));
    }

    // SIMPAN TRANSAKSI
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'alamat' => 'nullable|string',
            'paket_id' => 'required|exists:pakets,id',
            'berat_kg' => 'required|numeric|min:0.1',
        ]);

        DB::transaction(function () use ($data) {
            $pelanggan = Pelanggan::firstOrCreate(
                ['telepon' => $data['telepon']],
                [
                    'nama' => $data['nama'],
                    'alamat' => $data['alamat'] ?? null,
                ]
            );

            $paket = Paket::findOrFail($data['paket_id']);

            Transaksi::create([
                'pelanggan_id' => $pelanggan->id,
                'paket_id' => $paket->id,
                'berat_kg' => $data['berat_kg'],
                'total_harga' => $paket->harga * $data['berat_kg'],
                'status' => 'proses',
            ]);
        });

        return redirect()
            ->route('transaksi.index')
            ->with('sukses', 'Transaksi berhasil disimpan!');
    }

    // FORM EDIT
    public function edit($id)
    {
        $transaksi = Transaksi::with('pelanggan')->findOrFail($id);
        $paket = Paket::all();

        return view('transaksi.edit', compact(
            'transaksi',
            'paket'
        ));
    }

    // UPDATE TRANSAKSI
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'alamat' => 'nullable|string',
            'paket_id' => 'required|exists:pakets,id',
            'berat_kg' => 'required|numeric|min:0.1',
            'status' => 'required|in:proses,selesai,diambil',
        ]);

        DB::transaction(function () use ($data, $id) {
            $transaksi = Transaksi::findOrFail($id);

            $pelanggan = Pelanggan::updateOrCreate(
                ['id' => $transaksi->pelanggan_id],
                [
                    'nama' => $data['nama'],
                    'telepon' => $data['telepon'],
                    'alamat' => $data['alamat'] ?? null,
                ]
            );

            $paket = Paket::findOrFail($data['paket_id']);

            $transaksi->update([
                'pelanggan_id' => $pelanggan->id,
                'paket_id' => $paket->id,
                'berat_kg' => $data['berat_kg'],
                'total_harga' => $paket->harga * $data['berat_kg'],
                'status' => $data['status'],
            ]);
        });

        return redirect()
            ->route('transaksi.index')
            ->with('sukses', 'Transaksi berhasil diperbarui!');
    }

    // HAPUS TRANSAKSI
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()
            ->route('transaksi.index')
            ->with('sukses', 'Transaksi berhasil dihapus!');
    }
}
