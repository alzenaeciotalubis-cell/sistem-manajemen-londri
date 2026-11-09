<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan - Laundry Bubbles Q</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#fff9fb] text-slate-800 antialiased min-h-screen flex flex-col md:flex-row">

    <!-- SIDEBAR KIRI -->
    <aside class="w-full md:w-64 bg-white border-r border-pink-100 flex-shrink-0 flex flex-col justify-between p-6">
        <div>
            <!-- Logo & Nama Brand -->
            <div class="flex items-center gap-3 mb-8">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-pink-500 to-rose-400 flex items-center justify-center text-white font-bold text-xl shadow-md shadow-pink-200">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <div>
                    <h1 class="font-extrabold text-base text-slate-900 leading-tight">Laundry</h1>
                    <p class="text-xs font-bold text-pink-500">Bubbles Q</p>
                </div>
            </div>

            <!-- Menu Utama -->
            <div class="space-y-1.5">
                <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Menu Utama</p>

                <a href="{{ url('/admin') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600 transition-all">
                    <i class="fa-solid fa-house w-4"></i> Dashboard
                </a>

                <a href="{{ url('/pelanggan') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold text-white bg-pink-500 shadow-md shadow-pink-200 transition-all">
                    <i class="fa-solid fa-users w-4"></i> Data Pelanggan
                </a>

                <a href="{{ url('/paket') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600 transition-all">
                    <i class="fa-solid fa-jug-detergent w-4"></i> Layanan Laundry
                </a>

                <a href="{{ url('/transaksi') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600 transition-all">
                    <i class="fa-solid fa-receipt w-4"></i> Data Transaksi
                </a>

                <a href="{{ url('/pembayaran') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600 transition-all">
                    <i class="fa-solid fa-wallet w-4"></i> Pembayaran
                </a>

                <a href="{{ url('/petugas') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600 transition-all">
                    <i class="fa-solid fa-user-shield w-4"></i> Data Petugas
                </a>

                <a href="{{ url('/laporan') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600 transition-all">
                    <i class="fa-solid fa-file-lines w-4"></i> Laporan
                </a>

                <div class="pt-4">
                    <a href="{{ url('/logout') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-rose-500 hover:bg-rose-50 transition-all">
                        <i class="fa-solid fa-right-from-bracket w-4"></i> Keluar
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-gradient-to-br from-pink-500 to-rose-400 p-4 rounded-2xl text-white text-center shadow-inner">
            <p class="text-[11px] italic font-medium">"Laundry Bersih, Hidup Lebih Fresh"</p>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="flex-1 flex flex-col min-w-0 overflow-y-auto">

        <!-- Topbar -->
        <header class="bg-white px-8 py-4 flex items-center justify-between border-b border-pink-50 shadow-sm sticky top-0 z-10">
            <div class="flex items-center gap-2 text-xs text-slate-400">
                <a href="{{ url('/admin') }}" class="hover:text-pink-500">Dashboard</a>
                <i class="fa-solid fa-chevron-right text-[9px]"></i>
                <span class="text-slate-800 font-bold">Data Pelanggan</span>
            </div>

            <div class="flex items-center gap-6">
                <!-- Profil ALZEN LUBIS -->
                <div class="flex items-center gap-3 border-l pl-6 border-slate-100">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-slate-800">ALZEN LUBIS</p>
                        <p class="text-[10px] text-pink-500 font-bold">Administrator</p>
                    </div>
                    <div class="w-9 h-9 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600 font-bold shadow-sm">
                        <i class="fa-solid fa-user-tie text-xs"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Isi Halaman Data Pelanggan -->
        <div class="p-8 space-y-6">

            <!-- Banner Judul & Tombol Tambah -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-6 rounded-3xl border border-pink-100 shadow-sm">
                <div>
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                        <i class="fa-solid fa-users text-pink-500"></i> Data Pelanggan
                    </h2>
                    <p class="text-xs text-slate-500 mt-0.5">Kelola data pelanggan laundry dengan mudah dan cepat.</p>
                </div>
                <a href="{{ route('pelanggan.create') }}" class="px-5 py-2.5 bg-pink-500 hover:bg-pink-600 text-white rounded-2xl text-xs font-bold shadow-md shadow-pink-200 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Tambah Pelanggan
                </a>
            </div>

            <!-- 4 KARTU STATISTIK PELANGGAN -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- Total Pelanggan -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Total Pelanggan</p>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">45</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +12%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center text-pink-500 text-lg shadow-sm">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>

                <!-- Pelanggan Baru -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Pelanggan Baru</p>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">8</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +20%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-500 text-lg shadow-sm">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                </div>

                <!-- Pelanggan Aktif -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Pelanggan Aktif</p>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">42</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +95%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-500 text-lg shadow-sm">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                </div>

                <!-- Pelanggan VIP -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Pelanggan VIP</p>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">5</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +11%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-500 text-lg shadow-sm">
                        <i class="fa-solid fa-crown"></i>
                    </div>
                </div>
            </div>

            <!-- FILTER & PENCARIAN -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 bg-white p-4 rounded-3xl border border-pink-100 shadow-sm">
                <!-- Kolom Cari -->
                <div class="relative w-full sm:w-80">
                    <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                    <input type="text" placeholder="Cari nama pelanggan..." class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-pink-400 transition-all">
                </div>

                <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                    <select class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-semibold text-slate-600 focus:outline-none focus:border-pink-400">
                        <option>Semua Status</option>
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select>

                    <button class="px-4 py-2 bg-slate-50 hover:bg-pink-50 text-slate-600 hover:text-pink-600 border border-slate-200 rounded-xl text-xs font-semibold transition-all flex items-center gap-2">
                        <i class="fa-solid fa-rotate-right"></i> Refresh
                    </button>
                </div>
            </div>

            <!-- TABEL DATA PELANGGAN -->
            <div class="bg-white rounded-3xl border border-pink-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="bg-pink-50/50 text-slate-600 border-b border-pink-100">
                                <th class="p-4 font-bold">No</th>
                                <th class="p-4 font-bold">Foto</th>
                                <th class="p-4 font-bold">Nama Pelanggan</th>
                                <th class="p-4 font-bold">No. HP</th>
                                <th class="p-4 font-bold">Alamat</th>
                                <th class="p-4 font-bold">Status</th>
                                <th class="p-4 font-bold">Tanggal Daftar</th>
                                <th class="p-4 font-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @if(isset($pelanggan) && count($pelanggan) > 0)
                                @foreach($pelanggan as $index => $p)
                                    <tr class="hover:bg-pink-50/20 transition-all">
                                        <td class="p-4 font-semibold text-slate-500">{{ $loop->iteration }}</td>
                                        <td class="p-4">
                                            <div class="w-9 h-9 rounded-full bg-pink-100 overflow-hidden flex items-center justify-center font-bold text-pink-600">
                                                @if(isset($p->foto))
                                                    <img src="{{ asset('storage/' . $p->foto) }}" class="w-full h-full object-cover">
                                                @else
                                                    <i class="fa-solid fa-user text-xs"></i>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="p-4 font-bold text-slate-900">{{ $p->nama }}</td>
                                        <td class="p-4 text-slate-600">{{ $p->telepon }}</td>
                                        <td class="p-4 text-slate-600">{{ $p->alamat }}</td>
                                        <td class="p-4">
                                            <span class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded-full text-[10px] font-bold border border-emerald-100 inline-flex items-center gap-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                                            </span>
                                        </td>
                                        <td class="p-4 text-slate-500">{{ $p->created_at ? $p->created_at->format('d-m-Y') : '-' }}</td>

                                        <!-- KOLOM AKSI (EDIT & HAPUS YANG SUDAH DIPERBAIKI) -->
                                        <td class="p-4 text-center">
                                            <div class="inline-flex items-center gap-1.5">
                                                <!-- Tombol Edit -->
                                                <a href="{{ route('pelanggan.edit', $p->id) }}" class="px-3 py-1.5 bg-pink-50 text-pink-600 hover:bg-pink-500 hover:text-white rounded-xl text-[11px] font-bold transition-all shadow-sm flex items-center gap-1">
                                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                                </a>

                                                <!-- Tombol Hapus (Menggunakan Form DELETE) -->
                                                <form action="{{ route('pelanggan.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="px-3 py-1.5 bg-rose-50 text-rose-600 hover:bg-rose-500 hover:text-white rounded-xl text-[11px] font-bold transition-all shadow-sm flex items-center gap-1">
                                                        <i class="fa-solid fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <!-- Pesan Jika Data Kosong -->
                                <tr>
                                    <td colspan="8" class="p-6 text-center text-slate-400 italic">
                                        Belum ada data pelanggan di database. Silakan klik tombol "Tambah Pelanggan" di atas.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <!-- Bagian Bawah Tabel: Informasi & Pagination -->
                <div class="p-4 border-t border-slate-100 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-slate-500">
                    <span>Menampilkan data pelanggan dari database</span>
                    <div class="flex items-center gap-1">
                        <button class="px-3 py-1.5 bg-slate-50 rounded-xl hover:bg-pink-50 hover:text-pink-600">&laquo;</button>
                        <button class="px-3 py-1.5 bg-pink-500 text-white font-bold rounded-xl shadow-sm">1</button>
                        <button class="px-3 py-1.5 bg-slate-50 rounded-xl hover:bg-pink-50 hover:text-pink-600">&raquo;</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="bg-pink-500 text-white px-8 py-3 text-center text-xs font-semibold flex justify-between items-center mt-auto">
            <span>© 2026 Laundry Bubbles Q. Sistem Manajemen Laundry.</span>
            <span>Bersih • Rapi • Terpercaya 🤍</span>
        </footer>
    </main>

</body>
</html>
