@extends('layouts.app')

@section('title','Data Pembayaran')

@section('page-title','Data Pembayaran')

@section('content')

<div class="box">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

        <h2>💳 Riwayat Transaksi & Pembayaran</h2>

    </div>

    <table>

        <thead>

            <tr>

                <th>No. Invoice</th>

                <th>Tanggal Bayar</th>

                <th>Total Bayar</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>#INV-001</td>

                <td>22 Juni 2026</td>

                <td><strong>Rp 36.000</strong></td>

            </tr>

        </tbody>

    </table>

</div>

@endsection
