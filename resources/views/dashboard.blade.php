<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | LaundryKu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#eef5f9;
        }

        .sidebar{

            position:fixed;
            width:250px;
            height:100vh;
            background:#0b7f62;
            color:white;
            left:0;
            top:0;
            padding:25px;
        }

        .logo{

            text-align:center;
            margin-bottom:40px;
        }

        .logo h2{

            font-weight:bold;
        }

        .logo p{

            font-size:13px;
            opacity:.8;
        }

        .menu{

            list-style:none;
            padding:0;
        }

        .menu li{

            margin:10px 0;
        }

        .menu li a{

            color:white;
            text-decoration:none;
            display:block;
            padding:12px 15px;
            border-radius:10px;
            transition:.3s;
        }

        .menu li a:hover{

            background:#17a37f;
        }

        .menu .active{

            background:white;
            color:#0b7f62;
            font-weight:bold;
        }

        .main{

            margin-left:250px;
            padding:30px;
        }

        .navbar-custom{

            background:white;
            border-radius:15px;
            padding:20px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        .navbar-custom h3{

            margin-bottom:5px;
            font-weight:bold;
        }

        .navbar-custom p{

            color:gray;
            margin:0;
        }

        .profile{

            display:flex;
            align-items:center;
            gap:15px;
        }

        .profile i{

            font-size:22px;
            color:#555;
        }

        .avatar{

            width:45px;
            height:45px;
            background:#0b7f62;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            border-radius:50%;
            font-weight:bold;
        }

        .card-dashboard{

            margin-top:30px;
        }

        .stat-card{

            border:none;
            border-radius:18px;
            color:white;
            padding:25px;
            box-shadow:0 10px 20px rgba(0,0,0,.08);
            transition:.3s;
        }

        .stat-card:hover{

            transform:translateY(-5px);
        }

        .card1{

            background:linear-gradient(135deg,#14b38a,#0b7f62);
        }

        .card2{

            background:linear-gradient(135deg,#37c978,#1d9f5d);
        }

        .card3{

            background:linear-gradient(135deg,#5c7cfa,#3b5bdb);
        }

        .stat-card h6{

            font-size:15px;
        }

        .stat-card h2{

            margin-top:15px;
            font-weight:bold;
        }

        .content-box{

            background:white;
            border-radius:18px;
            margin-top:30px;
            padding:25px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        table{

            width:100%;
        }

        table th{

            background:#0b7f62;
            color:white;
            padding:12px;
        }

        table td{

            padding:12px;
            border-bottom:1px solid #eee;
        }

        .badge-success{

            background:#28a745;
            color:white;
            padding:6px 12px;
            border-radius:20px;
        }

        .badge-warning{

            background:#ffc107;
            color:black;
            padding:6px 12px;
            border-radius:20px;
        }

        .badge-primary{

            background:#0d6efd;
            color:white;
            padding:6px 12px;
            border-radius:20px;
        }

    </style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <h2>🧺 LaundryKu</h2>

        <p>Sistem Manajemen Laundry</p>

    </div>

    <ul class="menu">

        <li>
            <a href="#" class="active">
                <i class="fas fa-house"></i>
                Beranda
            </a>
        </li>

        <li>
            <a href="{{ route('pelanggan.index') }}">
                <i class="fas fa-users"></i>
                Pelanggan
            </a>
        </li>

        <li>
            <a href="{{ route('paket.index') }}">
                <i class="fas fa-shirt"></i>
                Paket Laundry
            </a>
        </li>

        <li>
            <a href="{{ route('transaksi.index') }}">
                <i class="fas fa-box"></i>
                Transaksi
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-money-bill-wave"></i>
                Pengeluaran
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-chart-column"></i>
                Laporan
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-user"></i>
                Profil
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fas fa-right-from-bracket"></i>
                Logout
            </a>
        </li>

    </ul>

</div>

<div class="main">

    <div class="navbar-custom">

        <div>

            <h3>Dashboard Admin</h3>

            <p>Kelola layanan laundry Anda dengan mudah dan cepat.</p>

        </div>

        <div class="profile">

            <i class="fas fa-bell"></i>

            <div class="avatar">

                AD

            </div>

        </div>

    </div>

    <div class="row card-dashboard">

        <div class="col-md-4">

            <div class="stat-card card1">

                <h6>Pendapatan Bulan Ini</h6>

                <h2>Rp108.000</h2>

            </div>

        </div>

        <div class="col-md-4">

            <div class="stat-card card2">

                <h6>Pendapatan Bersih</h6>

                <h2>Rp6.276.327</h2>

            </div>

        </div>

        <div class="col-md-4">

            <div class="stat-card card3">

                <h6>Total Keuntungan</h6>

                <h2>Rp6.276.327</h2>

            </div>

        </div>

    </div>
        <div class="row">

        <!-- Grafik Pendapatan -->
        <div class="col-lg-8">

            <div class="content-box">

                <h4 class="mb-4">
                    Grafik Pendapatan
                </h4>

                <canvas id="pendapatanChart" height="110"></canvas>

            </div>

        </div>

        <!-- Performa -->
        <div class="col-lg-4">

            <div class="content-box">

                <h4 class="mb-4">
                    Performa Transaksi
                </h4>

                <canvas id="statusChart"></canvas>

            </div>

        </div>

    </div>


    <!-- TABEL -->

    <div class="content-box">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h4>Transaksi Terbaru</h4>

            <button class="btn btn-success">

                Lihat Semua

            </button>

        </div>

        <table class="table table-hover align-middle">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Pelanggan</th>

                    <th>Paket</th>

                    <th>Status</th>

                    <th>Total</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>1</td>

                    <td>Zena</td>

                    <td>Cuci Kering</td>

                    <td>
                        <span class="badge bg-success">
                            Selesai
                        </span>
                    </td>

                    <td>Rp50.000</td>

                </tr>

                <tr>

                    <td>2</td>

                    <td>Rai</td>

                    <td>Cuci Setrika</td>

                    <td>
                        <span class="badge bg-warning text-dark">
                            Diproses
                        </span>
                    </td>

                    <td>Rp75.000</td>

                </tr>

                <tr>

                    <td>3</td>

                    <td>Gabi</td>

                    <td>Setrika</td>

                    <td>
                        <span class="badge bg-primary">
                            Diambil
                        </span>
                    </td>

                    <td>Rp40.000</td>

                </tr>

                <tr>

                    <td>4</td>

                    <td>Ayu</td>

                    <td>Express</td>

                    <td>
                        <span class="badge bg-success">
                            Selesai
                        </span>
                    </td>

                    <td>Rp90.000</td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('pendapatanChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mei',
            'Jun'
        ],

        datasets: [{

            label: 'Pendapatan',

            data: [
                10,
                20,
                18,
                30,
                45,
                60
            ],

            borderColor: '#0b7f62',

            backgroundColor: 'rgba(11,127,98,.15)',

            fill: true,

            tension: .4

        }]

    }

});


const pie = document.getElementById('statusChart');

new Chart(pie, {

    type: 'doughnut',

    data: {

        labels: [

            'Selesai',

            'Diproses',

            'Diambil'

        ],

        datasets: [{

            data: [

                60,

                25,

                15

            ],

            backgroundColor: [

                '#0b7f62',

                '#ffc107',

                '#0d6efd'

            ]

        }]

    }

});

</script>

</body>

</html>
