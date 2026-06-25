<!DOCTYPE html>
<html>
<head>
    <title>Laporan Laundry</title>
<style>
    body{
        font-family: Arial, sans-serif;
        background:#fff5f8;
        margin:0;
        padding:30px;
    }
    .container{
        max-width:900px;
        margin:auto;
        background:white;
        padding:30px;
        border-radius:15px;
        box-shadow:0 3px 15px rgba(255,105,180,0.2);
    }
    h1{
        text-align:center;
        color:#ff4fa3;
    }
    table{
        width:100%;
        border-collapse:collapse;
        margin-top:30px;
    }
    table, th, td{
        border:1px solid #ffc0cb;
    }
    th{
        background:#ff69b4;
        color:white;
        padding:12px;
    }
    td{
        padding:10px;
        text-align:center;
        background:#fff0f5;
    }
    .btn{
        display:inline-block;
        margin-top:20px;
        background:#ff69b4;
        color:white;
        text-decoration:none;
        padding:12px 20px;
        border-radius:8px;
    }
</style>
</head>
<body>
<div class="container">
<h1>Laporan Laundry</h1>
<table>
    <tr>
        <th>Nama Pelanggan</th>
        <th>Layanan</th>
        <th>Berat</th>
        <th>Total</th>
        <th>Status</th>
    </tr>
    <tr>
        <td>{{ session('nama') }}</td>
        <td>{{ session('layanan') }}</td>
        <td>{{ session('berat') }} Kg</td>
        <td>{{ session('total') }}</td>
        <td>{{ session('status') }}</td>
    </tr>
</table>
<a href="/transaksi" class="btn">
    Kembali ke Transaksi
</a>
</div>
</body>
</html>
