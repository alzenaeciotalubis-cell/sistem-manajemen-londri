@extends('layouts.app')

@section('title','Data Transaksi')

@section('page-title','Data Transaksi Laundry')

@section('content')

<div class="box">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

        <h2>🧾 Daftar Transaksi Laundry</h2>

        <a href="{{ route('transaksi.create') }}" class="btn btn-success">

            + Tambah Transaksi

        </a>

    </div>

    @if(session('sukses'))

        <div class="alert alert-success">

            {{ session('sukses') }}

        </div>

    @endif

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Tanggal</th>

                <th>Nama Pelanggan</th>

                <th>Paket</th>

                <th>Berat</th>

                <th>Total Harga</th>

                <th>Status</th>

                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($transaksi as $no => $t)

        <tr>

            <td>{{ $no+1 }}</td>

            <td>{{ $t->created_at->format('d/m/Y H:i') }}</td>

            <td>{{ $t->pelanggan->nama ?? '-' }}</td>

            <td>{{ $t->paket->nama_paket ?? '-' }}</td>

            <td>{{ $t->berat_kg }} Kg</td>

            <td>Rp {{ number_format($t->total_harga,0,',','.') }}</td>

            <td>

                @if($t->status=='proses')

                    <span class="status proses">Proses</span>

                @elseif($t->status=='selesai')

                    <span class="status selesai">Selesai</span>

                @else

                    <span class="status menunggu">Diambil</span>

                @endif

            </td>

            <td>

                <a href="{{ route('transaksi.edit',$t->id) }}" class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="{{ route('transaksi.destroy',$t->id) }}" method="POST" style="display:inline">

                    @csrf

                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"

                    onclick="return confirm('Yakin ingin menghapus?')">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="8" style="text-align:center;">

                Belum ada data transaksi.

            </td>

        </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection
