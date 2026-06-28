<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas - Bubbles Q</title>
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
        .header h1 { color: #ff4d94; font-size: 28px; font-weight: 700; }
        .btn-tambah { background: linear-gradient(45deg, #ff4d94, #ff80bf); color: white; padding: 12px 24px; border-radius: 12px; text-decoration: none; font-weight: 600; font-size: 14px; border: none; cursor: pointer; }
        .box { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th { background: #fff0f5; color: #ff4d94; padding: 16px; font-weight: 600; font-size: 14px; }
        td { padding: 16px; border-bottom: 1px solid #f5eff2; font-size: 15px; }
        .badge { display: inline-block; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; text-transform: uppercase; }
        .badge.admin { background: #fff0f6; color: #d6336c; }
        .badge.kasir { background: #e6fcf5; color: #0ca678; }
        .alert { background: #d4edda; color: #155724; padding: 15px; border-radius: 12px; margin-bottom: 20px; font-weight: 500; }
        .form-tambah-box { margin-top: 30px; background: #fff; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #ffd6e8; }
        .form-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 15px; }
        .form-group input, .form-group select { width: 100%; padding: 12px; border: 1px solid #e1d8dc; border-radius: 10px; font-size: 14px; margin-top: 5px; outline: none; }
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
            <a href="{{ url('pembayaran') }}">💳 &nbsp; Data Pembayaran</a>
            <a href="{{ url('petugas') }}" class="active">👨‍💼 &nbsp; Data Petugas</a>
            <a href="{{ url('/laporan') }}">📊 &nbsp; Laporan Keuangan</a>
            <a href="{{ url('logout') }}" style="margin-top: 40px; background: rgba(0,0,0,0.15);">🚪 &nbsp; Logout</a>
        </div>
    </div>
    <div class="main">
        <div class="header">
            <div>
                <h1>👨‍💼 Data Karyawan & Petugas</h1>
                <p>Manajemen hak akses staf operasional laundry Bubbles Q.</p>
            </div>
        </div>

        @if(session('sukses'))
            <div class="alert">🎉 {{ session('sukses') }}</div>
        @endif

        <div class="box">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>No. HP</th>
                        <th>Role Akses</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data_petugas as $key => $p)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->username }}</td>
                        <td>{{ $p->no_hp }}</td>
                        <td><span class="badge {{ $p->role == 'admin' ? 'admin' : 'kasir' }}">{{ $p->role }}</span></td>
                        <td>
                            <form action="{{ route('petugas.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Hapus petugas ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" style="background: #ff4d4d; color: white; border: none; padding: 6px 12px; border-radius: 8px; cursor: pointer;">🗑️ Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: #999;">Belum ada data petugas. Silakan tambah di form bawah.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="form-tambah-box">
            <h3 style="color: #ff4d94;">➕ Tambah Petugas Baru</h3>
            <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama_lengkap" required></div>
                    <div class="form-group"><label>Username</label><input type="text" name="username" required></div>
                    <div class="form-group"><label>No. HP</label><input type="text" name="no_hp" required></div>
                    <div class="form-group"><label>Role</label><select name="role"><option value="kasir">Kasir</option><option value="admin">Admin</option></select></div>
                </div>
                <button type="submit" class="btn-tambah" style="margin-top: 20px; width: 100%;">💾 Simpan Data</button>
            </form>
        </div>
    </div>
</body>
</html>
