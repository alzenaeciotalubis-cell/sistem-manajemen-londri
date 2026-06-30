@extends('layouts.app')

@section('title', 'Tambah Pelanggan')

@section('page-title', 'Tambah Pelanggan')

@section('content')

<div class="box">

    <h2>➕ Tambah Pelanggan</h2>

    <form action="{{ route('pelanggan.store') }}" method="POST">

        @csrf

        <div style="margin-bottom:15px;">

            <label>Nama Pelanggan</label><br>

            <input type="text" name="nama" class="form-control" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;" required>

        </div>

        <div style="margin-bottom:15px;">

            <label>No HP</label><br>

            <input type="text" name="no_hp" class="form-control" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;" required>

        </div>

        <div style="margin-bottom:20px;">

            <label>Alamat</label><br>

            <textarea name="alamat" rows="4" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;" required></textarea>

        </div>

        <button type="submit" class="btn">

            Simpan

        </button>

        <a href="{{ route('pelanggan.index') }}" class="btn">

            Kembali

        </a>

    </form>

</div>

@endsection
