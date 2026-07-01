<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','LaundryKu')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,Helvetica,sans-serif;
        }

        body{
            background:#f5f7fb;
        }

        .sidebar{
            width:260px;
            background:#15803d;
            color:#fff;
            position:fixed;
            top:0;
            left:0;
            bottom:0;
            padding:25px;
            overflow-y:auto;
        }

        .logo{
            font-size:28px;
            font-weight:bold;
            text-align:center;
            margin-bottom:30px;
        }

        .menu a{
            display:flex;
            align-items:center;
            gap:12px;
            color:white;
            text-decoration:none;
            padding:13px 15px;
            border-radius:8px;
            margin-bottom:8px;
            transition:.3s;
        }

        .menu a:hover{
            background:rgba(255,255,255,.2);
        }

        .main{
            margin-left:260px;
            min-height:100vh;
        }

        .header{
            background:white;
            padding:20px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .content{
            padding:30px;
        }

        @media(max-width:768px){

            .sidebar{
                position:relative;
                width:100%;
                height:auto;
            }

            .main{
                margin-left:0;
            }

        }
    </style>
</head>

<body>

<div class="sidebar">

    <div class="logo">
        LaundryKu
    </div>

    <div class="menu">

        <a href="{{ route('dashboard') }}">
            <i class="fas fa-home"></i>
            Dashboard
        </a>

        <a href="{{ route('pelanggan.index') }}">
            <i class="fas fa-users"></i>
            Data Pelanggan
        </a>

        <a href="{{ route('paket.index') }}">
            <i class="fas fa-box"></i>
            Data Layanan
        </a>

        <a href="{{ route('transaksi.index') }}">
            <i class="fas fa-receipt"></i>
            Data Transaksi
        </a>

        <a href="{{ route('pembayaran.index') }}">
            <i class="fas fa-money-check-dollar"></i>
            Data Pembayaran
        </a>

        <a href="{{ route('petugas.index') }}">
            <i class="fas fa-user-tie"></i>
            Data Petugas
        </a>

        <a href="{{ route('pengeluaran.index') }}">
            <i class="fas fa-wallet"></i>
            Data Pengeluaran
        </a>

        <a href="{{ route('laporan') }}">
            <i class="fas fa-chart-column"></i>
            Laporan
        </a>

        <a href="{{ route('logout') }}">
            <i class="fas fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>

<div class="main">

    <div class="header">

        <h3>@yield('title')</h3>

        <strong>Admin Laundry</strong>

    </div>

    <div class="content">

        @yield('content')

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
