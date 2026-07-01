<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaksi;

use App\Models\Pelanggan;

use App\Models\Paket;

class TransaksiController extends Controller

{

    public function index()

    {

        $transaksi = Transaksi::with(['pelanggan', 'paket'])->latest()->get();

        return view('transaksi.index', compact('transaksi'));

    }

    public function create()

    {

        $pelanggan = Pelanggan::all();

        $paket = Paket::all();

        return view('transaksi.create', compact('pelanggan', 'paket'));

    }

    public function store(Request $request)

    {

        $request->validate([

            'pelanggan_id' => 'required',

            'paket_id' => 'required',

            'berat_kg' => 'required|numeric|min:1',

        ]);

        $paket = Paket::findOrFail($request->paket_id);

        $total_harga = $paket->harga * $request->berat_kg;

        Transaksi::create([

            'pelanggan_id' => $request->pelanggan_id,

            'paket_id' => $request->paket_id,

            'berat_kg' => $request->berat_kg,

            'total_harga' => $total_harga,

        ]);

        return redirect()->route('transaksi.index')

            ->with('success', 'Transaksi berhasil ditambahkan');

    }

    public function show($id)

    {

        $transaksi = Transaksi::findOrFail($id);

        return view('transaksi.show', compact('transaksi'));

    }

    public function edit($id)

    {

        $transaksi = Transaksi::findOrFail($id);

        $pelanggan = Pelanggan::all();

        $paket = Paket::all();

        return view('transaksi.edit', compact('transaksi', 'pelanggan', 'paket'));

    }

    public function update(Request $request, $id)

    {

        $request->validate([

            'pelanggan_id' => 'required',

            'paket_id' => 'required',

            'berat_kg' => 'required|numeric|min:1',

        ]);

        $paket = Paket::findOrFail($request->paket_id);

        $total_harga = $paket->harga * $request->berat_kg;

        $transaksi = Transaksi::findOrFail($id);

        $transaksi->update([

            'pelanggan_id' => $request->pelanggan_id,

            'paket_id' => $request->paket_id,

            'berat_kg' => $request->berat_kg,

            'total_harga' => $total_harga,

        ]);

        return redirect()->route('transaksi.index')

            ->with('success', 'Transaksi berhasil diperbarui');

    }

    public function destroy($id)

    {

        Transaksi::findOrFail($id)->delete();

        return redirect()->route('transaksi.index')

            ->with('success', 'Transaksi berhasil dihapus');

    }

}
