@extends('layouts.app')

@section('title','Pengeluaran')

@section('page-title','Pengeluaran')

@section('content')

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;">

    <div>

        <h2>Manajemen Pengeluaran</h2>

        <p style="color:#777;">

            Kelola semua data pengeluaran laundry.

        </p>

    </div>

    <a href="{{ route('pengeluaran.create') }}" class="btn">

        <i class="fas fa-plus"></i>

        Tambah Pengeluaran

    </a>

</div>

<div class="cards">

    <div class="card">

        <h3>Total Pengeluaran</h3>

        <h1>Rp 0</h1>

        <p>Bulan ini</p>

    </div>

    <div class="card">

        <h3>Operasional</h3>

        <h1>Rp 0</h1>

        <p>Biaya operasional</p>

    </div>

    <div class="card">

        <h3>Pembelian</h3>

        <h1>Rp 0</h1>

        <p>Pembelian barang</p>

    </div>

    <div class="card">

        <h3>Lainnya</h3>

        <h1>Rp 0</h1>

        <p>Pengeluaran lain</p>

    </div>

</div>

<div class="table-box">

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Tanggal</th>

                <th>Keterangan</th>

                <th>Nominal</th>

                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td colspan="5" style="text-align:center;padding:40px;">

                    Belum ada data pengeluaran.

                </td>

            </tr>

        </tbody>

    </table>

</div>

@endsection
