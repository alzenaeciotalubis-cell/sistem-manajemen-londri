@extends('layouts.app')

@section('title','Tambah Transaksi')

@section('page-title','Tambah Transaksi')

@section('content')

<div class="box">

    <h2>🧺 Tambah Transaksi Laundry</h2>

    <form action="{{ route('transaksi.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label>👤 Nama Pelanggan</label>

            <select name="pelanggan_id" class="form-control" required>

                <option value="">-- Pilih Pelanggan --</option>

                @foreach($pelanggan as $p)

                    <option value="{{ $p->id }}">{{ $p->nama }}</option>

                @endforeach

            </select>

        </div>

        <div class="form-group">

            <label>🧺 Jenis Paket Laundry</label>

            <select name="paket_id" id="paket_id" class="form-control" required>

                <option value="">-- Pilih Paket --</option>

                @foreach($paket as $p)

                    <option value="{{ $p->id }}"

                            data-harga="{{ $p->harga }}">

                        {{ $p->nama_paket }}

                        - Rp {{ number_format($p->harga,0,',','.') }}/Kg

                    </option>

                @endforeach

            </select>

        </div>

        <div class="form-group">

            <label>⚖ Berat Cucian (Kg)</label>

            <input type="number"

                   id="berat_kg"

                   name="berat_kg"

                   class="form-control"

                   step="0.1"

                   min="0.1"

                   placeholder="Contoh : 3.5"

                   required>

        </div>

        <div class="form-group">

            <label>💰 Total Harga</label>

            <input type="text"

                   id="total_harga"

                   class="form-control"

                   value="Rp 0"

                   readonly>

        </div>

        <div class="form-group">

            <label>Status Laundry</label>

            <input type="text"

                   class="form-control"

                   value="Proses"

                   readonly>

        </div>

        <button type="submit" class="btn btn-success">

            💾 Simpan Transaksi

        </button>

        <a href="{{ route('transaksi.index') }}"

           class="btn btn-secondary">

            ↩ Kembali

        </a>

    </form>

</div>

<script>

const paket=document.getElementById('paket_id');

const berat=document.getElementById('berat_kg');

const total=document.getElementById('total_harga');

function hitungTotal(){

    let harga=0;

    if(paket.selectedIndex>0){

        harga=parseFloat(

            paket.options[paket.selectedIndex].dataset.harga

        );

    }

    let kg=parseFloat(berat.value)||0;

    let hasil=harga*kg;

    total.value="Rp "+hasil.toLocaleString('id-ID');

}

paket.addEventListener('change',hitungTotal);

berat.addEventListener('keyup',hitungTotal);

berat.addEventListener('change',hitungTotal);

</script>

@endsection
