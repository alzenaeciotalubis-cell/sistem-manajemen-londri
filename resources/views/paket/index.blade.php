@extends('layouts.app')

@section('title','Paket Laundry')

@section('page-title','Paket Laundry')

@section('content')

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;">

    <div>

        <h2>Manajemen Paket Laundry</h2>

        <small style="color:gray;">

            Kelola semua paket laundry.

        </small>

    </div>

    <a href="{{ route('paket.create') }}" class="btn">

        <i class="fa fa-plus"></i> Tambah Paket

    </a>

</div>

<div class="cards">

    <div class="card">

        <h3>Total Paket</h3>

        <h1>{{ $pakets->count() }}</h1>

        <p>Semua paket</p>

    </div>

    <div class="card">

        <h3>Paket Aktif</h3>

        <h1>{{ $pakets->count() }}</h1>

        <p>Tersedia</p>

    </div>

    <div class="card">

        <h3>Harga Termurah</h3>

        <h1>Rp {{ number_format($pakets->min('harga') ?? 0,0,',','.') }}</h1>

    </div>

    <div class="card">

        <h3>Harga Tertinggi</h3>

        <h1>Rp {{ number_format($pakets->max('harga') ?? 0,0,',','.') }}</h1>

    </div>

</div>

<div class="table-box">

<table>

<thead>

<tr>

<th>No</th>

<th>Nama Paket</th>

<th>Harga</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

@forelse($pakets as $paket)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $paket->nama_paket }}</td>

<td>

Rp {{ number_format($paket->harga,0,',','.') }}

</td>

<td>

<a href="{{ route('paket.edit',$paket->id) }}" class="btn">

Edit

</a>

<form action="{{ route('paket.destroy',$paket->id) }}"

      method="POST"

      style="display:inline;">

@csrf

@method('DELETE')

<button class="btn"

onclick="return confirm('Hapus paket ini?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="4" style="text-align:center">

Belum ada data paket.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

@endsection
