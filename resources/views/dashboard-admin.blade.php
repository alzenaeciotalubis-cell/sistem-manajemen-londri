<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - Sistem Manajemen Laundry</title>

    <style>

        *{

            margin:0;

            padding:0;

            box-sizing:border-box;

            font-family:'Segoe UI',sans-serif;

        }

        body{

            background:#fff0f5;

            display:flex;

        }

        /* Sidebar */

        .sidebar{

            width:270px;

            height:100vh;

            background:linear-gradient(180deg,#ff4d94,#ff80bf);

            color:white;

            position:fixed;

            padding:30px;

            box-shadow:5px 0 20px rgba(0,0,0,0.1);

        }

        .logo{

            text-align:center;

            margin-bottom:40px;

        }

        .logo h2{

            font-size:30px;

        }

        .logo p{

            margin-top:10px;

            opacity:0.9;

        }

        .menu a{

            display:block;

            text-decoration:none;

            color:white;

            padding:15px;

            margin-bottom:12px;

            border-radius:15px;

            transition:0.3s;

        }

        .menu a:hover{

            background:rgba(255,255,255,0.3);

            transform:translateX(5px);

        }

        /* Main */

        .main{

            margin-left:270px;

            width:100%;

            padding:30px;

        }

        /* Header */

        .header{

            background:white;

            border-radius:25px;

            padding:25px;

            display:flex;

            justify-content:space-between;

            align-items:center;

            box-shadow:0 8px 20px rgba(0,0,0,0.08);

        }

        .header h1{

            color:#ff4d94;

        }

        #waktu{

            color:gray;

            margin-top:10px;

        }

        .profile{

            background:linear-gradient(45deg,#ff4d94,#ff80bf);

            color:white;

            padding:18px 25px;

            border-radius:20px;

            text-align:center;

        }

        /* Cards */

        .cards{

            display:grid;

            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));

            gap:20px;

            margin-top:30px;

        }

        .card{

            background:white;

            padding:30px;

            border-radius:25px;

            text-align:center;

            box-shadow:0 8px 20px rgba(0,0,0,0.08);

            transition:0.3s;

        }

        .card:hover{

            transform:translateY(-8px);

        }

        .card h1{

            font-size:38px;

            color:#ff4d94;

            margin-bottom:10px;

        }

        .card p{

            color:#666;

        }

        /* Box */

        .box{

            background:white;

            margin-top:30px;

            padding:25px;

            border-radius:25px;

            box-shadow:0 8px 20px rgba(0,0,0,0.08);

        }

        .box h2{

            color:#ff4d94;

            margin-bottom:20px;

        }

        table{

            width:100%;

            border-collapse:collapse;

        }

        th{

            background:#ff4d94;

            color:white;

            padding:15px;

        }

        td{

            padding:15px;

            border-bottom:1px solid #eee;

        }

        .status{

            background:#ffe6f0;

            color:#ff4d94;

            padding:8px 15px;

            border-radius:20px;

        }

        .grafik{

            line-height:40px;

            font-size:18px;

        }

    </style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <h2>🧺 Laundry App</h2>

        <p>Administrator</p>

    </div>

    <div class="menu">

        <a href="#">🏠 Dashboard</a>

        <a href="#">👥 Data Pelanggan</a>

        <a href="#">🧺 Data Layanan</a>

        <a href="#">📦 Data Transaksi</a>

        <a href="#">💳 Data Pembayaran</a>

        <a href="#">👨‍💼 Data Petugas</a>

        <a href="/">🚪 Logout</a>

    </div>

</div>

<div class="main">

    <div class="header">

        <div>

            <h1>Selamat Datang, Alzena 👋</h1>

            <p>Sistem Manajemen Laundry Berbasis Web</p>

            <p id="waktu"></p>

        </div>

        <div class="profile">

            <h3>👩‍💻 Alzena</h3>

            <p>Administrator</p>

        </div>

    </div>

    <div class="cards">

        <div class="card">

            <h1>120</h1>

            <p>👥 Total Pelanggan</p>

        </div>

        <div class="card">

            <h1>80</h1>

            <p>📦 Total Transaksi</p>

        </div>

        <div class="card">

            <h1>60</h1>

            <p>💳 Total Pembayaran</p>

        </div>

        <div class="card">

            <h1>5</h1>

            <p>👨‍💼 Total Petugas</p>

        </div>

        <div class="card">

            <h1>Rp850K</h1>

            <p>💰 Pendapatan Hari Ini</p>

        </div>

        <div class="card">

            <h1>25</h1>

            <p>🧺 Laundry Diproses</p>

        </div>

        <div class="card">

            <h1>50</h1>

            <p>✅ Laundry Selesai</p>

        </div>

    </div>

    <div class="box">

        <h2>📋 Transaksi Terbaru</h2>

        <table>

            <tr>

                <th>Pelanggan</th>

                <th>Layanan</th>

                <th>Status</th>

            </tr>

            <tr>

                <td>Budi</td>

                <td>Cuci Express</td>

                <td><span class="status">Selesai</span></td>

            </tr>

            <tr>

                <td>Siti</td>

                <td>Cuci Reguler</td>

                <td><span class="status">Diproses</span></td>

            </tr>

            <tr>

                <td>Andi</td>

                <td>Setrika</td>

                <td><span class="status">Menunggu</span></td>

            </tr>

        </table>

    </div>

    <div class="box">

        <h2>📊 Pendapatan Mingguan</h2>

        <div class="grafik">

            Senin : ███████ Rp120.000<br>

            Selasa : █████████ Rp180.000<br>

            Rabu : ██████████ Rp200.000<br>

            Kamis : ███████████ Rp250.000<br>

            Jumat : █████████████ Rp300.000

        </div>

    </div>

</div>

<script>

setInterval(function(){

    document.getElementById('waktu').innerHTML =

        new Date().toLocaleString();

},1000);

</script>

</body>

</html>
