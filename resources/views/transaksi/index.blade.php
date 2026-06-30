@extends('layouts.app')

@section('title','Data Transaksi')

@section('page-title','Data Transaksi')

@section('content')

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;">

    <div>

        <h2>Manajemen Transaksi</h2>

        <small style="color:gray;">

            Kelola semua transaksi laundry.

        </small>

    </div>

    <a href="{{ route('transaksi.create') }}" class="btn">

        <i class="fa fa-plus"></i> Tambah Transaksi

    </a>

</div>

<div class="cards">

    <div class="card">

        <h3>Total Transaksi</h3>

        <h1>{{ $transaksis->count() }}</h1>

        <p>Semua transaksi</p>

    </div>

    <div class="card">

        <h3>Selesai</h3>

        <h1>{{ $transaksis->where('status','Selesai')->count() }}</h1>

        <p>Transaksi selesai</p>

    </div>

    <div class="card">

        <h3>Diproses</h3>

        <h1>{{ $transaksis->where('status','Diproses')->count() }}</h1>

        <p>Sedang diproses</p>

    </div>

    <div class="card">

        <h3>Total Pendapatan</h3>

        <h1>

            Rp {{ number_format($transaksis->sum('total_bayar'),0,',','.') }}

        </h1>

    </div>

</div>

<div class="table-box">

<table>

<thead>

<tr>

    <th>No</th>

    <th>Pelanggan</th>

    <th>Paket</th>

    <th>Status</th>

    <th>Total</th>

    <th>Aksi</th>

</tr>

</thead>

<tbody>

@forelse($transaksis as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->pelanggan }}</td>

<td>{{ $item->paket }}</td>

<td>

    <span class="status">

        {{ $item->status }}

    </span>

</td>

<td>

    Rp {{ number_format($item->total_bayar,0,',','.') }}

</td>

<td>

<a href="{{ route('transaksi.edit',$item->id) }}" class="btn">

Edit

</a>

<form action="{{ route('transaksi.destroy',$item->id) }}"

method="POST"

style="display:inline;">

@csrf

@method('DELETE')

<button class="btn"

onclick="return confirm('Yakin ingin menghapus?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="6" style="text-align:center;">

Belum ada transaksi.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

@endsection
