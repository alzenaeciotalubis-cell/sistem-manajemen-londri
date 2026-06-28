<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Sistem Manajemen Laundry</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background: #fbf6f8;
            display: flex;
            color: #444;
        }
        /* Sidebar Modern */
        .sidebar {
            width: 270px;
            height: 100vh;
            background: linear-gradient(135deg, #ff4d94, #ff80bf);
            color: white;
            position: fixed;
            padding: 30px 20px;
            box-shadow: 4px 0 25px rgba(255, 77, 148, 0.15);
            z-index: 100;
        }
        .logo {
            text-align: center;
            margin-bottom: 35px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 20px;
        }
        .logo h2 {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .logo p {
            margin-top: 5px;
            font-size: 14px;
            opacity: 0.85;
        }
        .menu a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
            padding: 14px 20px;
            margin-bottom: 8px;
            border-radius: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .menu a:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateX(5px);
        }
        /* Main Workspace */
        .main {
            margin-left: 270px;
            width: calc(100% - 270px);
            padding: 40px;
        }
        /* Header Card */
        .header {
            background: white;
            border-radius: 20px;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            margin-bottom: 30px;
        }
        .header h1 {
            color: #ff4d94;
            font-size: 28px;
            font-weight: 700;
        }
        .header p {
            color: #777;
            margin-top: 4px;
        }
        #waktu {
            color: #ff80bf;
            font-weight: 600;
            font-size: 14px;
            margin-top: 8px;
        }
        .profile {
            background: linear-gradient(45deg, #ff4d94, #ff80bf);
            color: white;
            padding: 15px 25px;
            border-radius: 15px;
            text-align: right;
            box-shadow: 0 5px 15px rgba(255, 77, 148, 0.2);
        }
        .profile h3 { font-size: 16px; }
        .profile p { font-size: 12px; opacity: 0.9; color: white; margin: 0; }

        /* Grid Statistik */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 4px;
            background: linear-gradient(90deg, #ff4d94, #ff80bf);
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(255, 77, 148, 0.1);
        }
        .card h1 {
            font-size: 36px;
            color: #ff4d94;
            margin-bottom: 5px;
            font-weight: 700;
        }
        .card p {
            color: #666;
            font-size: 14px;
            font-weight: 500;
        }

        /* Container Box */
        .box {
            background: white;
            margin-bottom: 30px;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        }
        .box h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Desain Tabel Modern */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        th {
            background: #fff0f5;
            color: #ff4d94;
            padding: 16px;
            font-weight: 600;
            font-size: 14px;
            border-radius: 8px;
        }
        td {
            padding: 16px;
            border-bottom: 1px solid #f5eff2;
            font-size: 15px;
        }
        tr:hover td {
            background-color: #fdfbfd;
        }
        .status {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .status.selesai { background: #e6fcf5; color: #0ca678; }
        .status.proses { background: #fff0f6; color: #d6336c; }
        .status.menunggu { background: #fff9db; color: #f59f00; }

        /* Desain Grafik Bar */
        .chart-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .chart-row {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .day-label {
            width: 70px;
            font-weight: 600;
            font-size: 14px;
        }
        .bar-wrapper {
            flex-grow: 1;
            background: #f1f3f5;
            height: 16px;
            border-radius: 10px;
            overflow: hidden;
        }
        .bar {
            height: 100%;
            background: linear-gradient(90deg, #ff4d94, #ff80bf);
            border-radius: 10px;
            transition: width 1s ease-in-out;
        }
        .price-label {
            width: 90px;
            text-align: right;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="logo">
            <h2>Bubbles Q</h2>
            <p>Admin Workspace</p>
        </div>
        <div class="menu">
            <a href="{{ url('admin') }}">🏠 &nbsp; Dashboard</a>
            <a href="{{ url('pelanggan') }}">👥 &nbsp; Data Pelanggan</a>
            <a href="{{ url('paket') }}">🧺 &nbsp; Data Layanan</a>
            <a href="{{ url('transaksi') }}">📦 &nbsp; Data Transaksi</a>

            <a href="{{ url('pembayaran') }}">💳 &nbsp; Data Pembayaran</a>
            <a href="{{ url('petugas') }}">👨‍💼 &nbsp; Data Petugas</a>
            <a href="{{ url('/laporan') }}">📊 &nbsp; Laporan Keuangan</a>

            <a href="{{ url('logout') }}" style="margin-top: 40px; background: rgba(0,0,0,0.15);">🚪 &nbsp; Logout</a>
        </div>
    </div>

    <div class="main">
        <div class="header">
            <div>
                <h1>Selamat Datang, Admin!</h1>
                <p>Pantau perkembangan bisnismu hari ini di panel kendali.</p>
                <div id="waktu">Senin, 22 Juni 2026 | 19:45 WIB</div>
            </div>
            <div class="profile">
                <h3>Super Admin</h3>
                <p>ID: #001-Bubbles</p>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <h1>12</h1>
                <p>Pesanan Aktif</p>
            </div>
            <div class="card">
                <h1>45</h1>
                <p>Pelanggan Terdaftar</p>
            </div>
            <div class="card">
                <h1>Rp 1.250k</h1>
                <p>Pendapatan Hari Ini</p>
            </div>
        </div>

        <div class="box">
            <h2>📦 Transaksi Terbaru</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pelanggan</th>
                        <th>Layanan</th>
                        <th>Berat</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#TRX098</td>
                        <td>Andi Wijaya</td>
                        <td>Cuci Kering + Setrika</td>
                        <td>4.5 Kg</td>
                        <td>Rp 36.000</td>
                        <td><span class="status proses">Proses</span></td>
                    </tr>
                    <tr>
                        <td>#TRX097</td>
                        <td>Siti Rahma</td>
                        <td>Bed Cover Large</td>
                        <td>1 Pcs</td>
                        <td>Rp 45.000</td>
                        <td><span class="status selesai">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
