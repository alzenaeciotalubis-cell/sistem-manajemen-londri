<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Menampilkan semua data pelanggan.
     */
    public function index()
    {
        $pelanggans = Pelanggan::latest()->get();
        return view('pelanggan.index', compact('pelanggans'));
    }

    /**
     * Menampilkan form untuk menambah pelanggan baru.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Menyimpan data pelanggan baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required|string|max:255',
            'telepon'       => 'required|string',
            'jenis_kelamin' => 'required|string',
        ]);

        // Menggunakan metode instansiasi objek langsung (Sangat Aman dari Eror CallStatic)
        $pelanggan = new Pelanggan();
        $pelanggan->nama          = $request->nama;
        $pelanggan->telepon       = $request->telepon;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat        = $request->alamat ?? '-';
        $pelanggan->status        = $request->status ?? 'Aktif';
        $pelanggan->save();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    /**
     * Mengalihkan fungsi detail karena tombol sudah dihapus.
     */
    public function show($id)
    {
        return redirect()->route('pelanggan.index');
    }

    /**
     * Menampilkan form edit pelanggan.
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', ['data' => $pelanggan]);
    }

    /**
     * Memperbarui data pelanggan di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'          => 'required|string|max:255',
            'telepon'       => 'required|string',
            'jenis_kelamin' => 'required|string',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama          = $request->nama;
        $pelanggan->telepon       = $request->telepon;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat        = $request->alamat ?? '-';
        $pelanggan->status        = $request->status ?? 'Aktif';
        $pelanggan->save();

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    /**
     * Menghapus data pelanggan dari database.
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus!');
    }
}
