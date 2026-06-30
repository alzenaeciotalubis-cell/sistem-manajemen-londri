@extends('layouts.app')

@section('title','Data Pelanggan')

@section('page-title','Data Pelanggan')

@section('content')

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;">

    <div>

        <h2>Manajemen Pelanggan</h2>

        <small style="color:gray;">

            Kelola seluruh data pelanggan laundry

        </small>

    </div>

    <a href="{{ route('pelanggan.create') }}" class="btn">

        <i class="fa fa-plus"></i> Tambah Pelanggan

    </a>

</div>

<div class="cards">

    <div class="card">

        <h3>Total Pelanggan</h3>

        <h1>{{ $data->count() }}</h1>

        <p>Semua pelanggan</p>

    </div>

    <div class="card">

        <h3>Pelanggan Aktif</h3>

        <h1>{{ $data->count() }}</h1>

        <p>Aktif</p>

    </div>

    <div class="card">

        <h3>Pelanggan Baru</h3>

        <h1>{{ $data->take(5)->count() }}</h1>

        <p>Terbaru</p>

    </div>

    <div class="card">

        <h3>Total Data</h3>

        <h1>{{ $data->count() }}</h1>

        <p>Database</p>

    </div>

</div>

<div class="table-box">

<table>

<thead>

<tr>

<th>No</th>

<th>Nama</th>

<th>No HP</th>

<th>Alamat</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

@forelse($data as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->nama }}</td>

<td>{{ $item->telepon }}</td>

<td>{{ $item->alamat }}</td>

<td>

<a href="{{ route('pelanggan.show',$item->id) }}" class="btn">

Detail

</a>

<a href="{{ route('pelanggan.edit',$item->id) }}" class="btn">

Edit

</a>

<form action="{{ route('pelanggan.destroy',$item->id) }}" method="POST" style="display:inline;">

@csrf

@method('DELETE')

<button class="btn" onclick="return confirm('Hapus pelanggan ini?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="5" style="text-align:center">

Belum ada data pelanggan

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

@endsection
