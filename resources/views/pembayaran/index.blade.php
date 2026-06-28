<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran - Bubbles Q</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: #fbf6f8; display: flex; color: #444; }
        .sidebar { width: 270px; height: 100vh; background: linear-gradient(135deg, #ff4d94, #ff80bf); color: white; position: fixed; padding: 30px 20px; box-shadow: 4px 0 25px rgba(255, 77, 148, 0.15); }
        .logo { text-align: center; margin-bottom: 35px; border-bottom: 1px solid rgba(255, 255, 255, 0.2); padding-bottom: 20px; }
        .logo h2 { font-size: 26px; font-weight: 700; }
        .menu a { display: flex; align-items: center; text-decoration: none; color: rgba(255, 255, 255, 0.9); padding: 14px 20px; margin-bottom: 8px; border-radius: 12px; font-weight: 500; transition: all 0.3s; }
        .menu a:hover, .menu a.active { background: rgba(255, 255, 255, 0.2); color: white; transform: translateX(5px); }
        .main { margin-left: 270px; width: calc(100% - 270px); padding: 40px; }
        .header { background: white; border-radius: 20px; padding: 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 10px 30px rgba(0,0,0,0.04); margin-bottom: 30px; }
        .header h1 { color: #ff4d94; font-size: 28px; }
        .box { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th { background: #fff0f5; color: #ff4d94; padding: 16px; font-weight: 600; font-size: 14px; }
        td { padding: 16px; border-bottom: 1px solid #f5eff2; font-size: 15px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo"><h2>Bubbles Q</h2><p>Admin Workspace</p></div>
        <div class="menu">
            <a href="{{ url('admin') }}">🏠 &nbsp; Dashboard</a>
            <a href="{{ url('pelanggan') }}">👥 &nbsp; Data Pelanggan</a>
            <a href="{{ url('paket') }}">🧺 &nbsp; Data Layanan</a>
            <a href="{{ url('transaksi') }}">📦 &nbsp; Data Transaksi</a>
            <a href="{{ url('pembayaran') }}" class="active">💳 &nbsp; Data Pembayaran</a>
            <a href="{{ url('petugas') }}">👨‍💼 &nbsp; Data Petugas</a>
            <a href="{{ url('/laporan') }}">📊 &nbsp; Laporan Keuangan</a>
            <a href="{{ url('logout') }}" style="margin-top: 40px; background: rgba(0,0,0,0.15);">🚪 &nbsp; Logout</a>
        </div>
    </div>
    <div class="main">
        <div class="header">
            <div>
                <h1>💳 Riwayat Transaksi & Pembayaran</h1>
                <p>Arus kas masuk dan konfirmasi pembayaran konsumen.</p>
            </div>
        </div>
        <div class="box">
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
    </div>
</body>
</html>
