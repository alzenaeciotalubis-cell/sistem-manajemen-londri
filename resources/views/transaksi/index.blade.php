@extends('layouts.app')

@section('title', 'Data Transaksi')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Transaksi</h3>

        <a href="{{ route('transaksi.create') }}" class="btn btn-success">
            + Tambah Transaksi
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-success">
                    <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Paket</th>
                        <th>Berat (Kg)</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($transaksi as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->pelanggan->nama }}</td>

                        <td>{{ $item->paket->nama_paket }}</td>

                        <td>{{ $item->berat_kg }}</td>

                        <td>
                            Rp {{ number_format($item->total_harga,0,',','.') }}
                        </td>

                        <td>

                            <a href="{{ route('transaksi.show',$item->id) }}"
                               class="btn btn-info btn-sm">
                                Detail
                            </a>

                            <a href="{{ route('transaksi.edit',$item->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('transaksi.destroy',$item->id) }}"
                                  method="POST"
                                  style="display:inline-block">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="text-center">
                            Belum ada data transaksi.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
