@extends('layouts.app')

@section('title','Edit Transaksi')

@section('page-title','Edit Transaksi Laundry')

@section('content')

<div class="box">

    <h2>✏️ Edit Data Transaksi</h2>

    <form action="{{ route('transaksi.update',$transaksi->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div style="margin-bottom:20px;">

            <label>Nama Pelanggan</label>

            <select name="pelanggan_id" class="form-control" required>

                @foreach($pelanggan as $p)

                    <option value="{{ $p->id }}"

                        {{ $transaksi->pelanggan_id == $p->id ? 'selected' : '' }}>

                        {{ $p->nama }}

                    </option>

                @endforeach

            </select>

        </div>

        <div style="margin-bottom:20px;">

            <label>Jenis Paket Laundry</label>

            <select name="paket_id" class="form-control" required>

                @foreach($paket as $p)

                    <option value="{{ $p->id }}"

                        {{ $transaksi->paket_id == $p->id ? 'selected' : '' }}>

                        {{ $p->nama_paket }} - Rp {{ number_format($p->harga,0,',','.') }}/Kg

                    </option>

                @endforeach

            </select>

        </div>

        <div style="margin-bottom:20px;">

            <label>Berat Cucian (Kg)</label>

            <input type="number"

                   name="berat_kg"

                   value="{{ $transaksi->berat_kg }}"

                   step="0.1"

                   min="0.1"

                   class="form-control"

                   required>

        </div>

        <div style="margin-bottom:20px;">

            <label>Status Pengerjaan</label>

            <select name="status" class="form-control" required>

                <option value="proses"

                    {{ $transaksi->status=='proses' ? 'selected' : '' }}>

                    🔄 Sedang Diproses

                </option>

                <option value="selesai"

                    {{ $transaksi->status=='selesai' ? 'selected' : '' }}>

                    ✅ Selesai Dicuci

                </option>

                <option value="diambil"

                    {{ $transaksi->status=='diambil' ? 'selected' : '' }}>

                    📤 Sudah Diambil

                </option>

            </select>

        </div>

        <button type="submit" class="btn">

            💾 Simpan Perubahan

        </button>

        <a href="{{ route('transaksi.index') }}" class="btn">

            Kembali

        </a>

    </form>

</div>

@endsection
