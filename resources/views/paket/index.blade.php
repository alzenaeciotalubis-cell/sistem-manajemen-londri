@extends('layouts.app')

@section('title', 'Data Paket')

@section('page-title', 'Data Paket Laundry')

@section('content')

<div class="box">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

        <h2>🧺 Data Paket Laundry</h2>

        <a href="{{ route('paket.create') }}" class="btn">

            + Tambah Paket

        </a>

    </div>

    @if(session('success'))

        <div style="background:#d1fae5;color:#065f46;padding:12px;border-radius:8px;margin-bottom:15px;">

            {{ session('success') }}

        </div>

    @endif

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Jenis</th>

                <th>Nama Paket</th>

                <th>Harga</th>

                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($pakets as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->jenis }}</td>

            <td>{{ $item->nama_paket }}</td>

            <td>Rp {{ number_format($item->harga) }}</td>

            <td>

                <a href="{{ route('paket.edit',$item->id) }}" class="btn">

                    Edit

                </a>

                <form action="{{ route('paket.destroy',$item->id) }}" method="POST" style="display:inline;">

                    @csrf

                    @method('DELETE')

                    <button class="btn" onclick="return confirm('Hapus data?')">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="5" style="text-align:center;">

                Data paket belum tersedia.

            </td>

        </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection
