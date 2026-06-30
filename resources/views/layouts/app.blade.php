<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','LaundryKu')</title>

    <link rel="stylesheet"

    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

    *{

        margin:0;

        padding:0;

        box-sizing:border-box;

        font-family:'Segoe UI',sans-serif;

    }

    body{

        background:#f5f7fb;

        display:flex;

    }

    .sidebar{

        width:260px;

        height:100vh;

        position:fixed;

        left:0;

        top:0;

        background:linear-gradient(180deg,#0b5d2a,#15803d);

        color:white;

        padding:25px 18px;

    }

    .logo{

        display:flex;

        align-items:center;

        gap:10px;

        font-size:30px;

        font-weight:bold;

        margin-bottom:35px;

    }

    .logo span{

        font-size:18px;

    }

    .menu-title{

        font-size:11px;

        opacity:.7;

        letter-spacing:2px;

        margin:25px 0 10px;

    }

    .sidebar a{

        display:flex;

        align-items:center;

        gap:12px;

        color:white;

        text-decoration:none;

        padding:14px 16px;

        border-radius:14px;

        margin-bottom:8px;

        transition:.3s;

    }

    .sidebar a:hover,

    .sidebar a.active{

        background:rgba(255,255,255,.15);

    }

    .main{

        margin-left:260px;

        width:calc(100% - 260px);

        padding:30px;
        .topbar{

        background:#fff;

        border-radius:20px;

        padding:18px 25px;

        display:flex;

        justify-content:space-between;

        align-items:center;

        box-shadow:0 8px 25px rgba(0,0,0,.08);

        margin-bottom:25px;

    }

    .page-title h1{

        font-size:34px;

        color:#222;

    }

    .page-title p{

        color:#777;

        margin-top:5px;

    }

    .right{

        display:flex;

        align-items:center;

        gap:20px;

    }

    .notif{

        position:relative;

        font-size:20px;

        cursor:pointer;

    }

    .notif span{

        position:absolute;

        top:-7px;

        right:-7px;

        width:18px;

        height:18px;

        background:#22c55e;

        color:#fff;

        border-radius:50%;

        font-size:11px;

        display:flex;

        justify-content:center;

        align-items:center;

    }

    .profile{

        display:flex;

        align-items:center;

        gap:12px;

    }

    .avatar{

        width:48px;

        height:48px;

        border-radius:50%;

        background:#22c55e;

        color:#fff;

        display:flex;

        justify-content:center;

        align-items:center;

        font-weight:bold;

        font-size:18px;

    }

    .cards{

        display:grid;

        grid-template-columns:repeat(4,1fr);

        gap:20px;

        margin-bottom:25px;

    }

    .card{

        background:#fff;

        border-radius:18px;

        padding:22px;

        box-shadow:0 8px 20px rgba(0,0,0,.08);

    }

    .card h3{

        color:#666;

        font-size:16px;

        margin-bottom:10px;

    }

    .card h1{

        font-size:36px;

        color:#111;

        margin-bottom:10px;

    }

    .card p{

        color:#22c55e;

        font-size:14px;

    }
    box{

        background:#fff;

        border-radius:18px;

        padding:25px;

        box-shadow:0 8px 20px rgba(0,0,0,.08);

    }

    .btn{

        background:#0f7a38;

        color:#fff;

        padding:12px 18px;

        border-radius:10px;

        text-decoration:none;

        display:inline-block;

    }

    table{

        width:100%;

        border-collapse:collapse;

        margin-top:20px;

    }

    th,td{

        padding:15px;

        border-bottom:1px solid #eee;

        text-align:left;

    }

    th{

        background:#f7f7f7;

    }

    .status{

        background:#dcfce7;

        color:#15803d;

        padding:6px 12px;

        border-radius:20px;

        font-size:13px;

    }

    .status-warning{

        background:#fef3c7;

        color:#b45309;

    }

    @media(max-width:1000px){

        .cards{

            grid-template-columns:repeat(2,1fr);

        }

        .sidebar{

            width:90px;

        }

        .main{

            margin-left:90px;

            width:calc(100% - 90px);

        }

        .sidebar span{

            display:none;

        }

    }

    </style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <i class="fa-solid fa-soap"></i>

        <span>LaundryKu</span>

    </div>

    <div class="menu-title">MENU</div>

    <a href="{{ route('dashboard') }}"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>

    <a href="{{ route('pelanggan.index') }}"><i class="fa-solid fa-users"></i><span>Pelanggan</span></a>

    <a href="{{ route('paket.index') }}"><i class="fa-solid fa-box"></i><span>Paket Laundry</span></a>

    <a href="{{ route('transaksi.index') }}"><i class="fa-solid fa-receipt"></i><span>Transaksi</span></a>

    <a href="{{ route('pengeluaran.index') }}"><i class="fa-solid fa-wallet"></i><span>Pengeluaran</span></a>

    <a href="{{ route('laporan') }}"><i class="fa-solid fa-chart-line"></i><span>Laporan</span></a>

    <a href="#"><i class="fa-solid fa-user"></i><span>Profil</span></a>

</div>

<div class="main">

    <div class="topbar">

        <div class="page-title">

            <h1>@yield('page-title')</h1>

            <p>Sistem Informasi Laundry</p>

        </div>

        <div class="right">

            <div class="notif">

                <i class="fa-solid fa-bell"></i>

                <span>3</span>

            </div>

            <div class="profile">

                <div class="avatar">A</div>

                <div>

                    <b>Admin</b><br>

                    <small>Super Admin</small>

                </div>

            </div>

        </div>

    </div>

    @yield('content')

</div>

</body>

</html>
