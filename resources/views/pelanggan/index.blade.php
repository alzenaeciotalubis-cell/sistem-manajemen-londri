@extends('layouts.app') {{-- Ganti 'layouts.app' dengan nama file layout utama/sidebar kamu jika berbeda --}}

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1 text-dark">Manajemen Pelanggan</h2>
            <p class="text-muted mb-0">Kelola data pelanggan laundry</p>
        </div>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-success px-4 py-2 fw-semibold shadow-sm">
            + Tambah Pelanggan
        </a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white">
                <span class="text-muted small fw-bold">Total Pelanggan</span>
                <h3 class="fw-bold text-dark mt-1 mb-0">{{ $pelanggans->count() }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white">
                <span class="text-muted small fw-bold">Pelanggan Aktif</span>
                <h3 class="fw-bold text-success mt-1 mb-0">{{ $pelanggans->where('status', 'Aktif')->count() }}</h3>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 px-3">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-3" width="5%">No</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th class="text-center" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pelanggans as $key => $item)
                            <tr>
                                <td class="ps-3">{{ $key + 1 }}</td>
                                <td class="fw-semibold text-dark">{{ $item->nama }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <span class="badge {{ $item->status == 'Aktif' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }} px-2 py-1">
                                        {{ $item->status }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-sm btn-outline-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus pelanggan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                                <i class="bi bi-trash text-white"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-5">Belum ada data pelanggan di database.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
