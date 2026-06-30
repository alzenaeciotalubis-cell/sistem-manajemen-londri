@extends('layouts.app')

@section('title','Tambah Pelanggan')

@section('page-title','Tambah Pelanggan')

@section('content')

<div class="table-box">

    <div style="margin-bottom:25px;">

        <h2>Tambah Data Pelanggan</h2>

        <small style="color:gray;">

            Silakan isi data pelanggan dengan lengkap.

        </small>

    </div>

    <form action="{{ route('pelanggan.store') }}" method="POST">

        @csrf

        <div style="margin-bottom:20px;">

            <label>Nama Pelanggan</label>

            <input

                type="text"

                name="nama"

                class="form-control"

                placeholder="Masukkan nama pelanggan"

                required>

        </div>

        <div style="margin-bottom:20px;">

            <label>No HP</label>

            <input

                type="text"

                name="telepon"

                class="form-control"

                placeholder="08xxxxxxxxxx"

                required>

        </div>

        <div style="margin-bottom:20px;">

            <label>Alamat</label>

            <textarea

                name="alamat"

                rows="4"

                class="form-control"

                placeholder="Masukkan alamat pelanggan"

                required></textarea>

        </div>

        <div>

            <button class="btn">

                <i class="fa fa-save"></i>

                Simpan

            </button>

            <a href="{{ route('pelanggan.index') }}" class="btn" style="background:#6c757d;">

                Kembali

            </a>

        </div>

    </form>

</div>

@endsection
