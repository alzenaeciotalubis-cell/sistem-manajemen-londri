@extends('layouts.app')

@section('title','Dashboard Admin')
@section('page-title','Dashboard Admin')

@section('content')

<style>

.dashboard-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.dashboard-header h2{
    font-size:32px;
    color:#222;
}

.dashboard-header p{
    color:#777;
    margin-top:5px;
}

.btn-primary{
    background:#15803d;
    color:white;
    padding:12px 22px;
    border-radius:12px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.btn-primary:hover{
    background:#11632f;
}

.stats{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:30px;
}

.stat-card{
    background:#fff;
    border-radius:18px;
    padding:22px;
    box-shadow:0 10px 20px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.stat-left h5{
    color:#777;
    font-size:15px;
    margin-bottom:10px;
}

.stat-left h2{
    font-size:35px;
    color:#111;
    margin-bottom:8px;
}

.stat-left span{
    color:#18a34a;
    font-size:14px;
}

.stat-icon{
    width:70px;
    height:70px;
    border-radius:18px;
    display:flex;
    justify-content:center;
    align-items:center;
    color:#fff;
    font-size:28px;
}

.green{
    background:#16a34a;
}

.blue{
    background:#3b82f6;
}

.orange{
    background:#f59e0b;
}

.purple{
    background:#8b5cf6;
}

.content-card{
    background:#fff;
    border-radius:18px;
    padding:25px;
    box-shadow:0 10px 20px rgba(0,0,0,.08);
    margin-bottom:25px;
}

.content-card h3{
    margin-bottom:20px;
}

@media(max-width:1000px){

.stats{

grid-template-columns:repeat(2,1fr);

}

}

@media(max-width:700px){

.stats{

grid-template-columns:1fr;

}

.dashboard-header{

flex-direction:column;
align-items:flex-start;
gap:15px;

}

}

</style>

<div class="dashboard-header">

<div>

<h2>Dashboard Admin</h2>

<p>Selamat datang di Sistem Informasi Laundry.</p>

</div>

<a href="{{ route('transaksi.create') }}" class="btn-primary">

<i class="fas fa-plus"></i>

Transaksi Baru

</a>

</div>

<div class="stats">

<div class="stat-card">

<div class="stat-left">

<h5>Total Pelanggan</h5>

<h2>{{ \App\Models\Pelanggan::count() }}</h2>

<span>Data pelanggan</span>

</div>

<div class="stat-icon green">

<i class="fas fa-users"></i>

</div>

</div>

<div class="stat-card">

<div class="stat-left">

<h5>Total Paket</h5>

<h2>{{ \App\Models\Paket::count() }}</h2>

<span>Paket Laundry</span>

</div>

<div class="stat-icon blue">

<i class="fas fa-box"></i>

</div>

</div>

<div class="stat-card">

<div class="stat-left">

<h5>Total Transaksi</h5>

<h2>{{ \App\Models\Transaksi::count() }}</h2>

<span>Semua transaksi</span>

</div>

<div class="stat-icon orange">

<i class="fas fa-receipt"></i>

</div>

</div>

<div class="stat-card">

<div class="stat-left">

<h5>Total Petugas</h5>

<h2>{{ \App\Models\Petugas::count() }}</h2>

<span>Petugas aktif</span>

</div>

<div class="stat-icon purple">

<i class="fas fa-user-tie"></i>

</div>

</div>

</div>

<div class="content-card">

<div style="display:flex;justify-content:space-between;align-items:center;">

<h3>Transaksi Terbaru</h3>

<a href="{{ route('transaksi.index') }}" class="btn-primary">

Lihat Semua

</a>

</div>

@php
$transaksi = \App\Models\Transaksi::latest()->take(5)->get();
@endphp
<table style="width:100%;border-collapse:collapse;margin-top:20px;">

    <thead>

        <tr style="background:#15803d;color:#fff;">

            <th style="padding:15px;">No</th>
            <th>Pelanggan</th>
            <th>Status</th>
            <th>Total</th>
            <th>Tanggal</th>
            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

        @forelse($transaksi as $item)

        <tr style="border-bottom:1px solid #eee;">

            <td style="padding:15px;">
                {{ $loop->iteration }}
            </td>

            <td>
                {{ $item->nama_pelanggan ?? '-' }}
            </td>

            <td>

                @if(($item->status ?? '')=='Selesai')

                    <span class="status status-success">
                        Selesai
                    </span>

                @elseif(($item->status ?? '')=='Diproses')

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

            <td>

                {{ optional($item->created_at)->format('d M Y') }}

            </td>

            <td>

                <a href="#" style="color:#15803d;text-decoration:none;">
                    <i class="fas fa-eye"></i>
                </a>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="6" style="text-align:center;padding:35px;color:#888;">

                Belum ada transaksi.

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:25px;margin-top:25px;">

    <div class="content-card">

        <h3>Ringkasan Sistem</h3>

        <div class="stats" style="grid-template-columns:repeat(2,1fr);margin-top:15px;">

            <div class="stat-card">

                <div>

                    <h5>Pendapatan</h5>

                    <h2>Rp 0</h2>

                    <span>Total Pendapatan</span>

                </div>

                <div class="stat-icon green">

                    <i class="fas fa-money-bill-wave"></i>

                </div>

            </div>

            <div class="stat-card">

                <div>

                    <h5>Kinerja</h5>

                    <h2>100%</h2>

                    <span>Sistem Berjalan</span>

                </div>

                <div class="stat-icon blue">

                    <i class="fas fa-chart-line"></i>

                </div>

            </div>

        </div>

    </div>
        <div class="content-card">

        <h3>Aktivitas Hari Ini</h3>

        <table style="width:100%;border-collapse:collapse;">

            <thead>

                <tr style="background:#15803d;color:#fff;">

                    <th style="padding:12px;">Waktu</th>
                    <th>Aktivitas</th>
                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                    <td style="padding:12px;">08:00</td>
                    <td>Admin Login</td>
                    <td><span class="status status-success">Berhasil</span></td>
                </tr>

                <tr>
                    <td style="padding:12px;">09:15</td>
                    <td>Tambah Pelanggan</td>
                    <td><span class="status status-success">Berhasil</span></td>
                </tr>

                <tr>
                    <td style="padding:12px;">10:30</td>
                    <td>Tambah Transaksi</td>
                    <td><span class="status status-warning">Diproses</span></td>
                </tr>

                <tr>
                    <td style="padding:12px;">11:45</td>
                    <td>Cetak Laporan</td>
                    <td><span class="status status-success">Selesai</span></td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

<div class="content-card">

    <h3 style="margin-bottom:20px;">

        Informasi Laundry

    </h3>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;">

        <div style="background:#f0fdf4;padding:20px;border-radius:15px;border-left:5px solid #22c55e;">

            <h4 style="color:#15803d;">
                <i class="fas fa-circle-info"></i>
                Informasi
            </h4>

            <p style="margin-top:10px;color:#555;">
                Selamat datang di Sistem Informasi Laundry.
            </p>

        </div>

        <div style="background:#eff6ff;padding:20px;border-radius:15px;border-left:5px solid #3b82f6;">

            <h4 style="color:#2563eb;">
                <i class="fas fa-users"></i>
                Pelanggan
            </h4>

            <p style="margin-top:10px;color:#555;">
                Kelola pelanggan, paket, transaksi, dan pembayaran dengan mudah.
            </p>

        </div>

        <div style="background:#fff7ed;padding:20px;border-radius:15px;border-left:5px solid #f59e0b;">

            <h4 style="color:#d97706;">
                <i class="fas fa-chart-line"></i>
                Laporan
            </h4>

            <p style="margin-top:10px;color:#555;">
                Pastikan seluruh data selalu diperbarui agar laporan tetap akurat.
            </p>

        </div>

    </div>

</div>

@endsection
