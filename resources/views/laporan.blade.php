@extends('layouts.app')

@section('title','Laporan')

@section('page-title','Laporan Laundry')

@section('content')

<div class="box">

    <h2 style="margin-bottom:20px;">📊 Laporan Laundry</h2>

    <table>

        <thead>

            <tr>

                <th>Nama Pelanggan</th>

                <th>Layanan</th>

                <th>Berat</th>

                <th>Total</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>{{ session('nama') }}</td>

                <td>{{ session('layanan') }}</td>

                <td>{{ session('berat') }} Kg</td>

                <td>{{ session('total') }}</td>

                <td>{{ session('status') }}</td>

            </tr>

        </tbody>

    </table>

    <br>

    <a href="{{ route('transaksi.index') }}" class="btn">

        ← Kembali ke Transaksi

    </a>

</div>

@endsection
