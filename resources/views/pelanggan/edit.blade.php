@extends('layouts.app')

@section('title', 'Edit Pelanggan')

@section('page-title', 'Edit Pelanggan')

@section('content')

<div class="box">

    <h2>✏️ Edit Data Pelanggan</h2>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div style="margin-bottom:15px;">

            <label>Nama Pelanggan</label><br>

            <input type="text"

                   name="nama"

                   value="{{ $pelanggan->nama }}"

                   style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;"

                   required>

        </div>

        <div style="margin-bottom:15px;">

            <label>No HP</label><br>

            <input type="text"

                   name="no_hp"

                   value="{{ $pelanggan->no_hp }}"

                   style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;"

                   required>

        </div>

        <div style="margin-bottom:20px;">

            <label>Alamat</label><br>

            <textarea name="alamat"

                      rows="4"

                      style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;"

                      required>{{ $pelanggan->alamat }}</textarea>

        </div>

        <button type="submit" class="btn">

            Update

        </button>

        <a href="{{ route('pelanggan.index') }}" class="btn">

            Kembali

        </a>

    </form>

</div>

@endsection
