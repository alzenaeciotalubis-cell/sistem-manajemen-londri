@extends('layouts.app')

@section('title','Tambah Transaksi')
@section('page-title','Tambah Transaksi')

@section('content')

<div class="box">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;">

        <div>
            <h2 style="margin-bottom:5px;">
                <i class="fa-solid fa-plus-circle"></i>
                Tambah Transaksi Laundry
            </h2>

            <p style="color:#777;">
                Silakan isi data transaksi di bawah ini.
            </p>
        </div>

        <a href="{{ route('transaksi.index') }}" class="btn">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali
        </a>

    </div>

    <form action="{{ route('transaksi.store') }}" method="POST">

        @csrf

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

            <div>

                <label><b>Nama Pelanggan</b></label>

                <select name="pelanggan_id" class="form-control" required>

                    <option value="">-- Pilih Pelanggan --</option>

                    @foreach($pelanggan as $pl)

                        <option value="{{ $pl->id }}">
                            {{ $pl->nama }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div>

                <label><b>Paket Laundry</b></label>

                <select id="paket" class="form-control" name="paket_id" required>

                    <option value="">-- Pilih Paket --</option>

                    @foreach($paket as $p)

                        <option
                            value="{{ $p->id }}"
                            data-harga="{{ $p->harga }}">

                            {{ $p->nama_paket }}
                            - Rp {{ number_format($p->harga,0,',','.') }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div>

                <label><b>Berat Cucian (Kg)</b></label>

                <input
                    type="number"
                    name="berat_kg"
                    id="berat"
                    class="form-control"
                    step="0.1"
                    min="1"
                    required>

            </div>

            <div>

                <label><b>Total Harga</b></label>

                <input
                    type="text"
                    id="total"
                    class="form-control"
                    value="Rp 0"
                    readonly>

            </div>

            <div>

                <label><b>Status</b></label>

                <input
                    type="text"
                    class="form-control"
                    value="Proses"
                    readonly>

            </div>

        </div>

        <div style="margin-top:30px;">

            <button class="btn" type="submit">

                <i class="fa-solid fa-floppy-disk"></i>

                Simpan Transaksi

            </button>

        </div>

    </form>

</div>

<script>

const paket=document.getElementById('paket');
const berat=document.getElementById('berat');
const total=document.getElementById('total');

function hitung(){

    let harga=0;

    if(paket.selectedIndex>0){

        harga=parseFloat(
            paket.options[paket.selectedIndex].dataset.harga
        );

    }

    let kg=parseFloat(berat.value)||0;

    total.value='Rp '+(harga*kg).toLocaleString('id-ID');

}

paket.addEventListener('change',hitung);

berat.addEventListener('input',hitung);

</script>

@endsection
