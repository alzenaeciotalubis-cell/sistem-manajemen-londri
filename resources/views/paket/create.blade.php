@extends('layouts.app')

@section('title', 'Tambah Paket')

@section('page-title', 'Tambah Paket Laundry')

@section('content')

<div class="box">

    <h2>🧺 Tambah Paket Laundry</h2>

    <form action="{{ route('paket.store') }}" method="POST">

        @csrf

        <div style="margin-bottom:15px;">

            <label>Jenis Paket</label><br>

            <input type="text" name="jenis" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;" required>

        </div>

        <div style="margin-bottom:15px;">

            <label>Nama Paket</label><br>

            <input type="text" name="nama_paket" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;" required>

        </div>

        <div style="margin-bottom:20px;">

            <label>Harga</label><br>

            <input type="number" name="harga" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;" required>

        </div>

        <button type="submit" class="btn">Simpan</button>

        <a href="{{ route('paket.index') }}" class="btn">Kembali</a>

    </form>

</div>

@endsection
