@extends('layouts.app')

@section('title','Dashboard Petugas')

@section('page-title','Dashboard Petugas')

@section('content')

<div class="cards">

    <div class="card">

        <h1>8</h1>

        <p>Pesanan Hari Ini</p>

    </div>

    <div class="card">

        <h1>3</h1>

        <p>Sedang Diproses</p>

    </div>

    <div class="card">

        <h1>15</h1>

        <p>Sudah Selesai</p>

    </div>

</div>

<div class="box">

    <h2>📦 Daftar Cucian Terbaru</h2>

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Pelanggan</th>

                <th>Layanan</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>1</td>

                <td>Andi Wijaya</td>

                <td>Cuci Kering</td>

                <td><span class="status proses">Proses</span></td>

            </tr>

            <tr>

                <td>2</td>

                <td>Siti Rahma</td>

                <td>Setrika</td>

                <td><span class="status selesai">Selesai</span></td>

            </tr>

        </tbody>

    </table>

</div>

@endsection
