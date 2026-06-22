<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::latest()->get();

        return view('pelanggan.index', compact('pelanggan'));
    }


    public function create()
    {
        return view('pelanggan.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'telepon' => 'required|string',
            'alamat' => 'required|string'
        ]);

        Pelanggan::create($request->all());

        return redirect()
            ->route('pelanggan.index')
            ->with('sukses', 'Data berhasil disimpan');
    }


    public function edit(int $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return view('pelanggan.edit', compact('pelanggan'));
    }


    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'telepon' => 'required|string',
            'alamat' => 'required|string'
        ]);

        Pelanggan::findOrFail($id)
            ->update($request->all());

        return redirect()
            ->route('pelanggan.index')
            ->with('sukses', 'Data berhasil diperbarui');
    }


    public function destroy(int $id)
    {
        Pelanggan::findOrFail($id)->delete();

        return redirect()
            ->route('pelanggan.index')
            ->with('sukses', 'Data berhasil dihapus');
    }
}