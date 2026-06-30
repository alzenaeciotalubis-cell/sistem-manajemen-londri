<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title','Sistem Laundry')</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{

    margin:0;

    padding:0;

    box-sizing:border-box;

    font-family:'Segoe UI',sans-serif;

}

body{

    display:flex;

    background:#f8f5f7;

    color:#444;

}

.sidebar{

    width:270px;

    height:100vh;

    position:fixed;

    left:0;

    top:0;

    overflow-y:auto;

    background:linear-gradient(180deg,#ff4d94,#ff7eb3);

    color:#fff;

    padding:25px;

    box-shadow:5px 0 20px rgba(0,0,0,.1);

}

.logo{

    text-align:center;

    margin-bottom:30px;

    border-bottom:1px solid rgba(255,255,255,.2);

    padding-bottom:20px;

}

.logo h2{

    font-size:28px;

    margin-bottom:5px;

}

.logo p{

    font-size:14px;

    opacity:.8;

}

.menu a{

    display:flex;

    align-items:center;

    gap:12px;

    text-decoration:none;

    color:white;

    padding:14px 18px;

    margin-bottom:10px;

    border-radius:12px;

    transition:.3s;

}

.menu a:hover{

    background:rgba(255,255,255,.2);

    transform:translateX(6px);

}

.menu i{

    width:22px;

    text-align:center;

}

.main{

    margin-left:270px;

    width:calc(100% - 270px);

    padding:35px;

}

.header{

    background:white;

    padding:25px 30px;

    border-radius:18px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    box-shadow:0 8px 25px rgba(0,0,0,.08);

    margin-bottom:30px;

}

.header h2{

    color:#ff4d94;

}

.profile{

    background:linear-gradient(45deg,#ff4d94,#ff80bf);

    color:white;

    padding:15px 22px;

    border-radius:15px;

    text-align:right;

}

.content{

    animation:fade .4s ease;

}

@keyframes fade{

from{

opacity:0;

transform:translateY(15px);

}

to{

opacity:1;

transform:translateY(0);

}

}

.cards{

display:grid;

grid-template-columns:repeat(auto-fit,minmax(220px,1fr));

gap:20px;

margin-bottom:30px;

}

.card{

background:white;

border-radius:18px;

padding:25px;

box-shadow:0 8px 25px rgba(0,0,0,.06);

border-top:5px solid #ff4d94;

transition:.3s;

}

.card:hover{

transform:translateY(-6px);

}

.card h1{

font-size:35px;

color:#ff4d94;

margin-bottom:10px;

}

.card p{

color:#666;

font-weight:600;

}

.box{

background:white;

padding:30px;

border-radius:18px;

box-shadow:0 8px 25px rgba(0,0,0,.06);

margin-bottom:30px;

}

.box h2{

margin-bottom:25px;

color:#ff4d94;

}

.form-group{

margin-bottom:20px;

}

.form-group label{

display:block;

font-weight:bold;

margin-bottom:8px;

}

.form-control{

width:100%;

padding:12px 15px;

border:1px solid #ddd;

border-radius:10px;

font-size:15px;

outline:none;

transition:.3s;

}

.form-control:focus{

border-color:#ff4d94;

box-shadow:0 0 8px rgba(255,77,148,.2);

}

.btn{

padding:12px 24px;

border:none;

border-radius:10px;

cursor:pointer;

font-size:15px;

font-weight:bold;

text-decoration:none;

display:inline-block;

transition:.3s;

}

.btn-success{

background:#22c55e;

color:white;

}

.btn-success:hover{

background:#16a34a;

}

.btn-secondary{

background:#6b7280;

color:white;

}

.btn-secondary:hover{

background:#4b5563;

}

table{

width:100%;

border-collapse:collapse;

}

table th{

background:#ff4d94;

color:white;

padding:14px;

}

table td{

padding:14px;

border-bottom:1px solid #eee;

}

table tr:hover{

background:#fff3f8;

}

.status{

padding:6px 12px;

border-radius:20px;

font-size:12px;

font-weight:bold;

}

.status.proses{

background:#ffe0ef;

color:#d63384;

}

.status.selesai{

background:#d1fae5;

color:#047857;

}

.status.menunggu{

background:#fef3c7;

color:#b45309;

}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">

<h2><i class="fas fa-soap"></i> Londri Bubbles Q</h2>

<p>Admin Workspace</p>

</div>

<div class="menu">

<a href="{{ url('admin') }}">

<i class="fas fa-house"></i>

<span>Dashboard</span>

</a>

<a href="{{ url('pelanggan') }}">

<i class="fas fa-users"></i>

<span>Data Pelanggan</span>

</a>

<a href="{{ url('paket') }}">

<i class="fas fa-box-open"></i>

<span>Data Layanan</span>

</a>
<a href="{{ url('transaksi') }}">

    <i class="fas fa-receipt"></i>

    <span>Data Transaksi</span>

</a>

<a href="{{ url('pembayaran') }}">

    <i class="fas fa-credit-card"></i>

    <span>Data Pembayaran</span>

</a>

<a href="{{ url('petugas') }}">

    <i class="fas fa-user-tie"></i>

    <span>Data Petugas</span>

</a>

<a href="{{ url('laporan') }}">

    <i class="fas fa-chart-column"></i>

    <span>Laporan Keuangan</span>

</a>

<a href="{{ url('logout') }}"

   style="margin-top:30px;background:rgba(0,0,0,.15);">

    <i class="fas fa-right-from-bracket"></i>

    <span>Logout</span>

</a>

</div>

</div>

<div class="main">

    <div class="header">

        <div>

            <h2>@yield('page-title','Dashboard')</h2>

            <p style="margin-top:6px;color:#777;">

                Selamat datang di Sistem Manajemen Laundry

            </p>

        </div>

        <div class="profile">

            <strong>

                <i class="fas fa-user-circle"></i>

                Super Admin

            </strong>

            <br>

            <small>ID : #001-Bubbles</small>

        </div>

    </div>

    <div class="content">

        @yield('content')

    </div>

</div>
</body>

</html>
