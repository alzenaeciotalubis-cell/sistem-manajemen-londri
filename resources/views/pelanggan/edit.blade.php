@extends('layouts.app')

@section('title','Edit Pelanggan')

@section('page-title','Edit Pelanggan')

@section('content')

<div class="table-box">

    <h2 style="margin-bottom:25px;">Edit Data Pelanggan</h2>

    <form action="{{ route('pelanggan.update',$pelanggan->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div style="margin-bottom:20px;">

            <label>Nama Pelanggan</label>

            <input type="text"

                   name="nama"

                   class="form-control"

                   value="{{ $pelanggan->nama }}"

                   required>

        </div>

        <div style="margin-bottom:20px;">

            <label>No Telepon</label>

            <input type="text"

                   name="telepon"

                   class="form-control"

                   value="{{ $pelanggan->telepon }}"

                   required>

        </div>

        <div style="margin-bottom:20px;">

            <label>Alamat</label>

            <textarea name="alamat"

                      class="form-control"

                      rows="4"

                      required>{{ $pelanggan->alamat }}</textarea>

        </div>

        <button class="btn">

            <i class="fa fa-save"></i> Update

        </button>

        <a href="{{ route('pelanggan.index') }}" class="btn" style="background:#6c757d;">

            Kembali

        </a>

    </form>

</div>

@endsection
