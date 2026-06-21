<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistem Manajemen Laundry</title>

<style>

*{

    margin:0;

    padding:0;

    box-sizing:border-box;

    font-family:'Segoe UI',sans-serif;

}

body{

    background:#f4f7fc;

}

.sidebar{

    width:250px;

    height:100vh;

    background:linear-gradient(180deg,#2563eb,#1e40af);

    position:fixed;

    color:white;

    padding:20px;

}

.logo{

    text-align:center;

    margin-bottom:40px;

}

.logo h2{

    font-size:24px;

}

.menu{

    list-style:none;

}

.menu li{

    padding:15px;

    margin:10px 0;

    border-radius:10px;

    cursor:pointer;

    transition:0.3s;

}

.menu li:hover{

    background:rgba(255,255,255,0.2);

}

.main{

    margin-left:250px;

    padding:30px;

}

.navbar{

    background:white;

    padding:20px;

    border-radius:15px;

    box-shadow:0 2px 10px rgba(0,0,0,0.1);

    display:flex;

    justify-content:space-between;

    align-items:center;

}

.cards{

    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:20px;

    margin-top:30px;

}

.card{

    background:white;

    padding:25px;

    border-radius:15px;

    box-shadow:0 2px 10px rgba(0,0,0,0.1);

}

.card h3{

    color:#666;

    margin-bottom:10px;

}

.card p{

    font-size:30px;

    font-weight:bold;

}

.blue{color:#2563eb;}

.green{color:#16a34a;}

.orange{color:#ea580c;}

.red{color:#dc2626;}

.table-box{

    background:white;

    margin-top:30px;

    padding:20px;

    border-radius:15px;

    box-shadow:0 2px 10px rgba(0,0,0,0.1);

}

table{

    width:100%;

    border-collapse:collapse;

}

th,td{

    padding:12px;

    border-bottom:1px solid #ddd;

    text-align:left;

}

th{

    background:#2563eb;

    color:white;

}

</style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <h2>🧺 LaundryApp</h2>

    </div>

    <ul class="menu">

        <li>🏠 Dashboard</li>

        <li>👥 Pelanggan</li>

        <li>🧴 Layanan</li>

        <li>📦 Transaksi</li>

        <li>👤 User</li>

        <li>🚪 Logout</li>

    </ul>

</div>

<div class="main">

    <div class="navbar">

        <h2>Dashboard Admin</h2>

        <h3>Selamat Datang, Admin</h3>

    </div>

    <div class="cards">

        <div class="card">

            <h3>Total Pelanggan</h3>

            <p class="blue">120</p>

        </div>

        <div class="card">

            <h3>Total Transaksi</h3>

            <p class="green">350</p>

        </div>

        <div class="card">

            <h3>Cucian Diproses</h3>

            <p class="orange">45</p>

        </div>

        <div class="card">

            <h3>Pendapatan</h3>

            <p class="red">Rp 8.500.000</p>

        </div>

    </div>

    <div class="table-box">

        <h2>Transaksi Terbaru</h2>

        <br>

        <table>

            <tr>

                <th>No</th>

                <th>Nama Pelanggan</th>

                <th>Layanan</th>

                <th>Status</th>

            </tr>

            <tr>

                <td>1</td>

                <td>Budi</td>

                <td>Cuci Kering</td>

                <td>Selesai</td>

            </tr>

            <tr>

                <td>2</td>

                <td>Siti</td>

                <td>Cuci Setrika</td>

                <td>Proses</td>

            </tr>

            <tr>

                <td>3</td>

                <td>Andi</td>

                <td>Setrika</td>

                <td>Diambil</td>

            </tr>

        </table>

    </div>

</div>

</body>

</html>
