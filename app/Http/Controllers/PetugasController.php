<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Menampilkan daftar data petugas.
     */
    public function index()
    {
        $petugas = Petugas::latest()->get();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Menampilkan form tambah petugas baru.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Menyimpan data petugas baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:petugas', // Sesuaikan nama tabel jika bentuk plural (misal: petugases)
            'telepon' => 'required|string|max:15',
            'posisi' => 'required|string',
            'password' => 'required|min:5'
        ]);

        Petugas::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'telepon' => $request->telepon,
            'posisi' => $request->posisi,
            'password' => Hash::make($request->password), // Mengenkripsi password
        ]);

        return redirect()
            ->route('petugas.index')
            ->with('sukses', 'Data petugas berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit petugas berdasarkan ID.
     */
    public function edit(int $id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Memperbarui data petugas di database.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:petugas,username,' . $id,
            'telepon' => 'required|string|max:15',
            'posisi' => 'required|string',
        ]);

        $petugas = Petugas::findOrFail($id);

        $dataUpdate = [
            'nama' => $request->nama,
            'username' => $request->username,
            'telepon' => $request->telepon,
            'posisi' => $request->posisi,
        ];

        // Jika password diisi, perbarui passwordnya. Jika kosong, biarkan tetap.
        if ($request->filled('password')) {
            $request->validate(['password' => 'min:5']);
            $dataUpdate['password'] = Hash::make($request->password);
        }

        $petugas->update($dataUpdate);

        return redirect()
            ->route('petugas.index')
            ->with('sukses', 'Data petugas berhasil diperbarui!');
    }

    /**
     * Menghapus data petugas dari database.
     */
    public function destroy(int $id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        return redirect()
            ->route('petugas.index')
            ->with('sukses', 'Data petugas berhasil dihapus!');
    }
}
