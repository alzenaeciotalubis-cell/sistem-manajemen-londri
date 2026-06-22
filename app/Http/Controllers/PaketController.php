<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::latest()->get();

        return view('paket.index', compact('pakets'));
    }


    public function create()
    {
        return view('paket.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string',
            'harga' => 'required|numeric|min:0'
        ]);

        Paket::create($request->all());

        return redirect()
            ->route('paket.index')
            ->with('sukses', 'Paket berhasil disimpan');
    }


    public function edit(int $id)
    {
        $paket = Paket::findOrFail($id);

        return view('paket.edit', compact('paket'));
    }


    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_paket' => 'required|string',
            'harga' => 'required|numeric|min:0'
        ]);

        Paket::findOrFail($id)
            ->update($request->all());

        return redirect()
            ->route('paket.index')
            ->with('sukses', 'Paket berhasil diperbarui');
    }


    public function destroy(int $id)
    {
        Paket::findOrFail($id)->delete();

        return redirect()
            ->route('paket.index')
            ->with('sukses', 'Paket berhasil dihapus');
    }
}