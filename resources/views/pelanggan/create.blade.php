@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="max-w-xl mx-auto bg-white p-4 rounded shadow-sm">
        <h2 class="fw-bold mb-4 text-dark">Tambah Pelanggan Baru</h2>

        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf

            <!-- Input Nama -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Pelanggan</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama pelanggan" required>
            </div>

            <!-- Input Telepon -->
            <div class="mb-3">
                <label class="form-label fw-semibold">No. Telepon</label>
                <input type="text" name="telepon" class="form-control" placeholder="Contoh: 08123456789" required>
            </div>

            <!-- Input Jenis Kelamin -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" required>
                    <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <!-- Input Alamat -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Alamat</label>
                <textarea name="alamat" rows="3" class="form-control" placeholder="Masukkan alamat lengkap"></textarea>
            </div>

            <!-- Input Status -->
            <div class="mb-4">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-select">
                    <option value="Aktif" selected>Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                </select>
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary px-4">Batal</a>
                <button type="submit" class="btn btn-success px-4 fw-semibold">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
