@extends('layouts.app')

@section('title','Dashboard Admin')

@section('page-title','Dashboard')

@section('content')

<div class="dashboard-header">

    <div>

        <h1>Dashboard Admin</h1>

        <p>Selamat datang di Sistem Informasi Laundry.</p>

    </div>

    <div>

        <a href="{{ route('transaksi.create') }}" class="btn">

            <i class="fas fa-plus"></i> Transaksi Baru

        </a>

    </div>

</div>

<div class="dashboard-cards">

    <div class="card">

        <div class="icon green">

            <i class="fas fa-users"></i>

        </div>

        <div>

            <span>Total Pelanggan</span>

            <h2>{{ \App\Models\Pelanggan::count() }}</h2>

            <small>Data pelanggan terdaftar</small>

        </div>

    </div>

    <div class="card">

        <div class="icon blue">

            <i class="fas fa-box"></i>

        </div>

        <div>

            <span>Total Paket</span>

            <h2>{{ \App\Models\Paket::count() }}</h2>

            <small>Paket laundry</small>

        </div>

    </div>

    <div class="card">

        <div class="icon orange">

            <i class="fas fa-receipt"></i>

        </div>

        <div>

            <span>Total Transaksi</span>

            <h2>{{ \App\Models\Transaksi::count() }}</h2>

            <small>Semua transaksi</small>

        </div>

    </div>

    <div class="card">

        <div class="icon purple">

            <i class="fas fa-user-tie"></i>

        </div>

        <div>

            <span>Total Petugas</span>

            <h2>{{ \App\Models\Petugas::count() }}</h2>

            <small>Petugas aktif</small>

        </div>

    </div>

</div>

<div class="table-box">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

        <h3>Transaksi Terbaru</h3>

        <a href="{{ route('transaksi.index') }}" class="btn">

            Lihat Semua

        </a>

    </div>

    @php

        $transaksi = \App\Models\Transaksi::latest()->take(5)->get();

    @endphp

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Pelanggan</th>

                <th>Status</th>

                <th>Total</th>

            </tr>

        </thead>

        <tbody>
            @forelse($transaksi as $item)

<tr>

    <td>{{ $loop->iteration }}</td>

    <td>{{ $item->nama_pelanggan ?? '-' }}</td>

    <td>

        @if(($item->status ?? '') == 'Selesai')

            <span class="status status-success">

                Selesai

            </span>

        @elseif(($item->status ?? '') == 'Diproses')

            <span class="status status-warning">

                Diproses

            </span>

        @else

            <span class="status status-danger">

                Menunggu

            </span>

        @endif

    </td>

    <td>

        Rp {{ number_format($item->total_bayar ?? 0,0,',','.') }}

    </td>

</tr>

@empty

<tr>

    <td colspan="4" style="text-align:center;padding:30px;">

        Belum ada transaksi.

    </td>

</tr>

@endforelse

</tbody>

</table>

</div>

<div style="height:25px;"></div>

<div class="table-box">

    <h3 style="margin-bottom:20px;">

        Ringkasan Sistem

    </h3>

    <div class="dashboard-cards">

        <div class="card">

            <div class="icon green">

                <i class="fas fa-money-bill-wave"></i>

            </div>

            <div>

                <span>Pendapatan</span>

                <h2>Rp 0</h2>

                <small>Total pendapatan</small>

            </div>

        </div>

        <div class="card">

            <div class="icon blue">

                <i class="fas fa-chart-line"></i>

            </div>

            <div>

                <span>Kinerja</span>

                <h2>100%</h2>

                <small>Sistem berjalan baik</small>

            </div>

        </div>

    </div>

</div>
<div style="height:25px;"></div>

<div class="table-box">

    <h3 style="margin-bottom:20px;">

        Aktivitas Hari Ini

    </h3>

    <table>

        <thead>

            <tr>

                <th>Waktu</th>

                <th>Aktivitas</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>08:00</td>

                <td>Admin Login</td>

                <td><span class="status status-success">Berhasil</span></td>

            </tr>

            <tr>

                <td>09:15</td>

                <td>Tambah Pelanggan</td>

                <td><span class="status status-success">Berhasil</span></td>

            </tr>

            <tr>

                <td>10:30</td>

                <td>Tambah Transaksi</td>

                <td><span class="status status-warning">Diproses</span></td>

            </tr>

            <tr>

                <td>11:45</td>

                <td>Cetak Laporan</td>

                <td><span class="status status-success">Selesai</span></td>

            </tr>

        </tbody>

    </table>

</div>

<div style="height:25px;"></div>

<div class="table-box">

    <h3 style="margin-bottom:20px;">

        Informasi Laundry

    </h3>

    <p>📌 Selamat datang di Sistem Informasi Laundry.</p>

    <p>📌 Kelola pelanggan, paket, transaksi, dan laporan dengan mudah.</p>

    <p>📌 Pastikan data selalu diperbarui agar laporan tetap akurat.</p>

</div>
@endsection
