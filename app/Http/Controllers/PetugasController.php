<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas; // <-- 1. WAJIB PANGGIL MODEL PETUGAS DI SINI!

class PetugasController extends Controller
{
    public function index()
    {
        // 2. AMBIL DATA ASLI DARI DATABASE (Jangan pakai array kosong [])
        $data_petugas = Petugas::all();

        return view('petugas.index', compact('data_petugas'));
    }

    public function store(Request $request)
    {
        // 3. VALIDASI INPUTAN FORM
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username'     => 'required|string|max:100',
            'no_hp'        => 'required|string|max:20',
            'role'         => 'required|in:admin,kasir',
        ]);

        // 4. PROSES SIMPAN KE DATABASE
        Petugas::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username'     => $request->username,
            'no_hp'        => $request->no_hp,
            'role'         => $request->role,
        ]);

        return redirect()->route('petugas.index')
            ->with('sukses', 'Data petugas berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        // 5. PROSES HAPUS DARI DATABASE
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        return redirect()->route('petugas.index')
            ->with('sukses', 'Data petugas berhasil dihapus.');
    }
}
