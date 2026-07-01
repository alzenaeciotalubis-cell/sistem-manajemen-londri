<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pembayaran;

use App\Models\Transaksi;

class PembayaranController extends Controller

{

    public function index()

    {

        $data = Pembayaran::all();

        return view('pembayaran.index', compact('data'));

    }

    public function create()

    {

        $transaksis = Transaksi::all();

        return view('pembayaran.create', compact('transaksis'));

    }

    public function store(Request $request)

    {

        $request->validate([

            'transaksi_id' => 'required',

            'metode' => 'required',

            'jumlah' => 'required|numeric',

            'status' => 'required',

        ]);

        Pembayaran::create([

            'transaksi_id' => $request->transaksi_id,

            'metode' => $request->metode,

            'jumlah' => $request->jumlah,

            'status' => $request->status,

        ]);

        return redirect()->route('pembayaran.index')

            ->with('success', 'Data pembayaran berhasil ditambahkan.');

    }

    public function show($id)

    {

        $data = Pembayaran::findOrFail($id);

        return view('pembayaran.show', compact('data'));

    }

    public function edit($id)

    {

        $data = Pembayaran::findOrFail($id);

        $transaksis = Transaksi::all();

        return view('pembayaran.edit', compact('data', 'transaksis'));

    }

    public function update(Request $request, $id)

    {

        $request->validate([

            'transaksi_id' => 'required',

            'metode' => 'required',

            'jumlah' => 'required|numeric',

            'status' => 'required',

        ]);

        $data = Pembayaran::findOrFail($id);

        $data->update([

            'transaksi_id' => $request->transaksi_id,

            'metode' => $request->metode,

            'jumlah' => $request->jumlah,

            'status' => $request->status,

        ]);

        return redirect()->route('pembayaran.index')

            ->with('success', 'Data pembayaran berhasil diperbarui.');

    }

    public function destroy($id)

    {

        Pembayaran::findOrFail($id)->delete();

        return redirect()->route('pembayaran.index')

            ->with('success', 'Data pembayaran berhasil dihapus.');

    }

}
