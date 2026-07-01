@extends('layouts.app')

@section('title','Data Layanan')

@section('page-title','Data Layanan')

@section('content')

<style>

.page-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:30px;

}

.page-header h2{

    font-size:32px;

    color:#222;

}

.page-header p{

    color:#777;

    margin-top:6px;

}

.btn-primary{

    background:#16a34a;

    color:#fff;

    text-decoration:none;

    padding:12px 22px;

    border-radius:12px;

    font-weight:bold;

    transition:.3s;

    display:inline-block;

}

.btn-primary:hover{

    background:#15803d;

    transform:translateY(-2px);

}

.cards{

    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:20px;

    margin-bottom:30px;

}

.card{

    background:#fff;

    border-radius:18px;

    padding:25px;

    box-shadow:0 10px 20px rgba(0,0,0,.08);

    border-left:6px solid #16a34a;

    transition:.3s;

}

.card:hover{

    transform:translateY(-5px);

}

.card h4{

    color:#666;

    margin-bottom:10px;

    font-size:15px;

}

.card h2{

    font-size:34px;

    color:#15803d;

    margin-bottom:8px;

}

.card span{

    color:#888;

    font-size:14px;

}

.table-box{

    background:#fff;

    border-radius:18px;

    padding:25px;

    box-shadow:0 10px 20px rgba(0,0,0,.08);

    overflow-x:auto;

}

table{

    width:100%;

    border-collapse:collapse;

}

table th{

    background:#15803d;

    color:white;

    padding:15px;

    text-align:left;

}

table td{

    padding:15px;

    border-bottom:1px solid #eee;

}

table tbody tr:hover{

    background:#f0fdf4;

}

.btn-edit{

    background:#2563eb;

    color:#fff;

    text-decoration:none;

    padding:8px 15px;

    border-radius:8px;

    margin-right:5px;

}

.btn-delete{

    background:#dc2626;

    color:#fff;

    border:none;

    padding:8px 15px;

    border-radius:8px;

    cursor:pointer;

}

.btn-edit:hover{

    background:#1d4ed8;

}

.btn-delete:hover{

    background:#b91c1c;

}

.empty{

    text-align:center;

    color:#888;

    padding:35px;

}

@media(max-width:1000px){

.cards{

grid-template-columns:repeat(2,1fr);

}

}

@media(max-width:700px){

.cards{

grid-template-columns:1fr;

}

.page-header{

flex-direction:column;

align-items:flex-start;

gap:15px;

}

}

</style>

<div class="page-header">

<div>

<h2>📦 Manajemen Data Layanan</h2>

<p>Kelola seluruh paket layanan laundry dengan mudah.</p>

</div>

<a href="{{ route('paket.create') }}" class="btn-primary">

<i class="fas fa-plus"></i>

Tambah Paket

</a>

</div>

<div class="cards">

<div class="card">

<h4>Total Paket</h4>

<h2>{{ $pakets->count() }}</h2>

<span>Semua paket tersedia</span>

</div>

<div class="card">

<h4>Paket Aktif</h4>

<h2>{{ $pakets->count() }}</h2>

<span>Paket yang dapat digunakan</span>

</div>

<div class="card">

<h4>Harga Termurah</h4>

<h2>Rp {{ number_format($pakets->min('harga') ?? 0,0,',','.') }}</h2>

<span>Harga paling rendah</span>

</div>

<div class="card">

<h4>Harga Tertinggi</h4>

<h2>Rp {{ number_format($pakets->max('harga') ?? 0,0,',','.') }}</h2>

<span>Harga paling tinggi</span>

</div>

</div>
<div class="table-box">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

        <h3 style="color:#222;">

            <i class="fas fa-list"></i>

            Daftar Paket Laundry

        </h3>

        <span style="color:#666;">

            Total Data : <b>{{ $pakets->count() }}</b>

        </span>

    </div>

    <table>

        <thead>

            <tr>

                <th width="60">No</th>

                <th>Nama Paket</th>

                <th width="180">Harga</th>

                <th width="220">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($pakets as $paket)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>

                    <strong>{{ $paket->nama_paket }}</strong>

                </td>

                <td>

                    <span style="font-weight:bold;color:#16a34a;">

                        Rp {{ number_format($paket->harga,0,',','.') }}

                    </span>

                </td>

                <td>

                    <a href="{{ route('paket.edit',$paket->id) }}" class="btn-edit">

                        <i class="fas fa-edit"></i>

                        Edit

                    </a>

                    <form action="{{ route('paket.destroy',$paket->id) }}"

                          method="POST"

                          style="display:inline;">

                        @csrf

                        @method('DELETE')

                        <button type="submit"

                                class="btn-delete"

                                onclick="return confirm('Yakin ingin menghapus paket ini?')">

                            <i class="fas fa-trash"></i>

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="4" class="empty">

                    <i class="fas fa-box-open"

                       style="font-size:50px;color:#bbb;margin-bottom:15px;display:block;"></i>

                    <h3 style="margin-bottom:10px;color:#555;">

                        Belum Ada Paket Laundry

                    </h3>

                    <p style="color:#888;">

                        Silakan klik tombol <b>Tambah Paket</b> untuk menambahkan data.

                    </p>

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection
