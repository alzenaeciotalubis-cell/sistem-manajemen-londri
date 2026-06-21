<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Petugas - Sistem Manajemen Laundry</title>

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

        }

        .menu a{

            display:block;

            text-decoration:none;

            color:white;

            padding:15px;

            margin-bottom:12px;

            border-radius:15px;

        }

        .menu a:hover{

            background:rgba(255,255,255,0.3);

        }

        .main{

            margin-left:270px;

            width:100%;

            padding:30px;

        }

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

        .profile{

            background:linear-gradient(45deg,#ff4d94,#ff80bf);

            color:white;

            padding:18px 25px;

            border-radius:20px;

            text-align:center;

        }

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

        }

        .card h1{

            font-size:38px;

            color:#ff4d94;

            margin-bottom:10px;

        }

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

    </style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <h2>🧺 Laundry App</h2>

        <p>Petugas Laundry</p>

    </div>

    <div class="menu">

        <a href="#">🏠 Dashboard</a>

        <a href="#">👥 Data Pelanggan</a>

        <a href="#">📦 Data Transaksi</a>

        <a href="#">💳 Data Pembayaran</a>

        <a href="#">🧺 Status Laundry</a>

        <a href="/">🚪 Logout</a>

    </div>

</div>

<div class="main">

    <div class="header">

        <div>

            <h1>Selamat Datang, Petugas 👋</h1>

            <p>Sistem Manajemen Laundry Berbasis Web</p>

            <p id="waktu"></p>

        </div>

        <div class="profile">

            <h3>👨‍💼 Petugas Laundry</h3>

            <p>Role : Petugas</p>

        </div>

    </div>

    <div class="cards">

        <div class="card">

            <h1>15</h1>

            <p>📦 Transaksi Hari Ini</p>

        </div>

        <div class="card">

            <h1>8</h1>

            <p>🧺 Laundry Diproses</p>

        </div>

        <div class="card">

            <h1>12</h1>

            <p>✅ Laundry Selesai</p>

        </div>

        <div class="card">

            <h1>Rp350K</h1>

            <p>💰 Pembayaran Hari Ini</p>

        </div>

    </div>

    <div class="box">

        <h2>📋 Aktivitas Hari Ini</h2>

        <table>

            <tr>

                <th>Pelanggan</th>

                <th>Layanan</th>

                <th>Status</th>

            </tr>

            <tr>

                <td>Budi</td>

                <td>Cuci Express</td>

                <td><span class="status">Diproses</span></td>

            </tr>

            <tr>

                <td>Siti</td>

                <td>Cuci Reguler</td>

                <td><span class="status">Selesai</span></td>

            </tr>

            <tr>

                <td>Andi</td>

                <td>Setrika</td>

                <td><span class="status">Diproses</span></td>

            </tr>

        </table>

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
