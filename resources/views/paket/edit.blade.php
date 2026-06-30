@extends('layouts.app')

@section('title', 'Edit Paket')

@section('page-title', 'Edit Paket Laundry')

@section('content')

<div class="box">

    <h2>✏️ Edit Paket Laundry</h2>

    <form action="{{ route('paket.update', $paket->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div style="margin-bottom:15px;">

            <label>Jenis Paket</label><br>

            <input type="text"

                   name="jenis"

                   value="{{ $paket->jenis }}"

                   style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;"

                   required>

        </div>

        <div style="margin-bottom:15px;">

            <label>Nama Paket</label><br>

            <input type="text"

                   name="nama_paket"

                   value="{{ $paket->nama_paket }}"

                   style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;"

                   required>

        </div>

        <div style="margin-bottom:20px;">

            <label>Harga</label><br>

            <input type="number"

                   name="harga"

                   value="{{ $paket->harga }}"

                   style="width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;"

                   required>

        </div>

        <button type="submit" class="btn">

            Update

        </button>

        <a href="{{ route('paket.index') }}" class="btn">

            Kembali

        </a>

    </form>

</div>

@endsection
