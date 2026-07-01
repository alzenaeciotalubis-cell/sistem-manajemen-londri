@extends('layouts.app') {{-- Ganti dengan nama layout utama kamu jika berbeda --}}

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="max-w-xl mx-auto bg-white p-4 rounded shadow-sm">
        <h2 class="fw-bold mb-4 text-dark">Edit Data Pelanggan</h2>

        <form action="{{ route('pelanggan.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Pelanggan</label>
                <input type="text" name="nama" value="{{ old('nama', $data->nama) }}" class="form-control @error('nama') is-invalid @enderror" required>
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">No. Telepon</label>
                <input type="text" name="telepon" value="{{ old('telepon', $data->telepon) }}" class="form-control @error('telepon') is-invalid @enderror" required>
                @error('telepon') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email', $data->email == '-' ? '' : $data->email) }}" class="form-control @error('email') is-invalid @enderror">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                    <option value="Laki-laki" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Alamat</label>
                <textarea name="alamat" rows="3" class="form-control">{{ old('alamat', $data->alamat == '-' ? '' : $data->alamat) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-select @error('status') is-invalid @enderror">
                    <option value="Aktif" {{ old('status', $data->status) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Nonaktif" {{ old('status', $data->status) == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
                @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary px-4">Batal</a>
                <button type="submit" class="btn btn-warning px-4 text-dark fw-semibold">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
