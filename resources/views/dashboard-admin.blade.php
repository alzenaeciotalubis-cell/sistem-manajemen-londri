@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('page-title', 'Dashboard Admin')

@section('content')

<div class="cards">

    <div class="card">

        <h1>12</h1>

        <p>Pesanan Aktif</p>

    </div>

    <div class="card">

        <h1>45</h1>

        <p>Pelanggan Terdaftar</p>

    </div>

    <div class="card">

        <h1>Rp 1.250k</h1>

        <p>Pendapatan Hari Ini</p>

    </div>

</div>

<div class="box">

    <h2>📦 Transaksi Terbaru</h2>

    <table>

        <thead>

            <tr>

                <th>ID</th>

                <th>Pelanggan</th>

                <th>Layanan</th>

                <th>Berat</th>

                <th>Total Harga</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>#TRX098</td>

                <td>Andi Wijaya</td>

                <td>Cuci Kering + Setrika</td>

                <td>4.5 Kg</td>

                <td>Rp36.000</td>

                <td>Proses</td>

            </tr>

            <tr>

                <td>#TRX097</td>

                <td>Siti Rahma</td>

                <td>Bed Cover Large</td>

                <td>1 Pcs</td>

                <td>Rp45.000</td>

                <td>Selesai</td>

            </tr>

        </tbody>

    </table>

</div>

@endsection
