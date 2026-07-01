@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

<h1 class="page-title">

    Dashboard

</h1>

<p class="subtitle">

    Selamat datang di Sistem Manajemen Laundry.

</p>

<div class="cards">

    <div class="card">

        <div class="card-icon green">

            <i class="fa-solid fa-users"></i>

        </div>

        <small>Total Pelanggan</small>

        <h2>10</h2>

        <p style="color:#16a34a">

            +12% dari bulan lalu

        </p>

    </div>

    <div class="card">

        <div class="card-icon blue">

            <i class="fa-solid fa-box"></i>

        </div>

        <small>Total Paket</small>

        <h2>5</h2>

        <p style="color:#3b82f6">

            Paket tersedia

        </p>

    </div>

    <div class="card">

        <div class="card-icon orange">

            <i class="fa-solid fa-money-bill-wave"></i>

        </div>

        <small>Total Transaksi</small>

        <h2>25</h2>

        <p style="color:#f59e0b">

            Bulan ini

        </p>

    </div>

    <div class="card">

        <div class="card-icon purple">

            <i class="fa-solid fa-wallet"></i>

        </div>

        <small>Total Pendapatan</small>

        <h2>Rp5.000.000</h2>

        <p style="color:#9333ea">

            Pendapatan bulan ini

        </p>

    </div>

</div>

<div class="table-box">

    <h2 style="margin-bottom:20px;">

        Aktivitas Terbaru

    </h2>

    <table>

        <thead>

        <tr>

            <th>No</th>

            <th>Nama</th>

            <th>Paket</th>

            <th>Status</th>

            <th>Tanggal</th>

        </tr>

        </thead>

        <tbody>

        <tr>

            <td>1</td>

            <td>Lina Marlina</td>

            <td>Cuci Kering</td>

            <td>

                <span class="badge badge-success">

                    Selesai

                </span>

            </td>

            <td>30 Juni 2026</td>

        </tr>

        <tr>

            <td>2</td>

            <td>Hendra Gunawan</td>

            <td>Cuci Setrika</td>

            <td>

                <span class="badge badge-success">

                    Diproses

                </span>

            </td>

            <td>29 Juni 2026</td>

        </tr>

        </tbody>

    </table>

</div>

@endsection
