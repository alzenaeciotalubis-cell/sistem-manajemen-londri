<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Laundry Bubbles Q</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts Plus Jakarta Sans -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#fff9fb] text-slate-800 antialiased min-h-screen flex flex-col md:flex-row">

    <!-- 1. SIDEBAR KIRI LENGKAP -->
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

                <a href="{{ url('/admin') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold text-white bg-pink-500 shadow-md shadow-pink-200 transition-all">
                    <i class="fa-solid fa-house w-4"></i> Dashboard
                </a>

                <a href="{{ url('/pelanggan') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600 transition-all">
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

        <!-- Banner Footer Sidebar -->
        <div class="mt-8 bg-gradient-to-br from-pink-500 to-rose-400 p-4 rounded-2xl text-white text-center relative overflow-hidden shadow-inner">
            <p class="text-[11px] italic font-medium">"Laundry Bersih, Hidup Lebih Fresh"</p>
        </div>
    </aside>

    <!-- 2. KONTEN UTAMA -->
    <main class="flex-1 flex flex-col min-w-0 overflow-y-auto">

        <!-- Topbar -->
        <header class="bg-white px-8 py-4 flex items-center justify-between border-b border-pink-50 shadow-sm sticky top-0 z-10">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-bars text-slate-400 cursor-pointer"></i>
            </div>

            <div class="flex items-center gap-6">
                <span class="text-xs bg-pink-50 text-pink-600 px-3 py-1.5 rounded-xl font-semibold border border-pink-100">
                    <i class="fa-regular fa-calendar-days mr-1.5"></i> Senin, 28 April 2026
                </span>

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

        <!-- Isi Dashboard -->
        <div class="p-8 space-y-6">

            <!-- Banner Sambutan -->
            <div>
                <p class="text-xs text-slate-400 font-medium">Selamat datang kembali ✨</p>
                <h2 class="text-2xl font-bold text-slate-900 tracking-tight">Dashboard Admin</h2>
                <p class="text-xs text-slate-500 mt-0.5">Pantau aktivitas operasional Laundry Bubbles Q.</p>
            </div>

            <!-- 4 KARTU STATISTIK ATAS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- Total Pelanggan -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Total Pelanggan</p>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">{{ $totalPelanggan ?? 45 }}</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +12%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center text-pink-500 text-lg shadow-sm">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>

                <!-- Pesanan Aktif -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Pesanan Aktif</p>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">12</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +8%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-500 text-lg shadow-sm">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                </div>

                <!-- Pesanan Selesai -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Pesanan Selesai</p>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">28</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +15%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-500 text-lg shadow-sm">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                </div>

                <!-- Pendapatan Hari Ini -->
                <div class="bg-white p-5 rounded-3xl border border-pink-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase">Pendapatan Hari Ini</p>
                        <h3 class="text-xl font-bold text-slate-900 mt-1">Rp {{ number_format($totalPendapatan ?? 1250000, 0, ',', '.') }}</h3>
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-1.5">
                            <i class="fa-solid fa-arrow-up text-[9px]"></i> +20%
                        </span>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-500 text-lg shadow-sm">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                </div>
            </div>

            <!-- GRAFIK PENDAPATAN & JENIS LAYANAN -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                <!-- Grafik Pendapatan -->
                <div class="bg-white p-6 rounded-3xl border border-pink-100 shadow-sm xl:col-span-2 flex flex-col justify-between">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 mb-4">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                                <i class="fa-solid fa-chart-line text-pink-500"></i> Grafik Pendapatan
                            </h3>
                            <p class="text-[11px] text-slate-400">Pendapatan selama 7 hari terakhir</p>
                        </div>
                        <div class="bg-slate-50 p-1 rounded-xl border border-slate-100 text-[11px] font-semibold flex gap-1">
                            <span class="px-3 py-1 bg-pink-500 text-white rounded-lg shadow-sm">Mingguan</span>
                            <span class="px-3 py-1 text-slate-500 hover:text-slate-900 cursor-pointer">Bulanan</span>
                            <span class="px-3 py-1 text-slate-500 hover:text-slate-900 cursor-pointer">Tahunan</span>
                        </div>
                    </div>

                    <!-- Visual Grafik Kurva Sederhana -->
                    <div class="relative h-32 w-full flex items-end pt-4">
                        <svg class="absolute inset-0 w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 500 100">
                            <path d="M 0,70 Q 80,20 160,55 T 320,15 T 440,30 T 500,25" fill="none" stroke="#ec4899" stroke-width="3" />
                        </svg>
                    </div>

                    <div class="flex justify-between text-[11px] text-slate-400 pt-3 border-t border-slate-50 font-medium">
                        <span>Sen</span>
                        <span>Sel</span>
                        <span>Rab</span>
                        <span>Kam</span>
                        <span>Jum</span>
                        <span class="text-pink-600 font-bold">Sab</span>
                        <span>Min</span>
                    </div>
                </div>

                <!-- Jenis Layanan (Komposisi Donat) -->
                <div class="bg-white p-6 rounded-3xl border border-pink-100 shadow-sm xl:col-span-1 flex flex-col justify-between">
                    <h3 class="font-bold text-slate-900 text-sm flex items-center gap-2 mb-2">
                        <i class="fa-solid fa-chart-pie text-pink-500"></i> Jenis Layanan
                    </h3>
                    <p class="text-[11px] text-slate-400 mb-4">Komposisi layanan laundry</p>

                    <div class="flex items-center justify-center py-2">
                        <div class="w-24 h-24 rounded-full border-8 border-pink-500 border-t-purple-400 border-r-rose-300 flex items-center justify-center font-bold text-slate-800 text-xs shadow-inner">
                            100%
                        </div>
                    </div>

                    <div class="space-y-1.5 text-xs pt-4 border-t border-slate-50">
                        <div class="flex justify-between items-center"><span class="text-slate-500 flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-pink-500"></span> Cuci Komplit</span><span class="font-bold">45%</span></div>
                        <div class="flex justify-between items-center"><span class="text-slate-500 flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-rose-400"></span> Cuci Setrika</span><span class="font-bold">30%</span></div>
                        <div class="flex justify-between items-center"><span class="text-slate-500 flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-purple-400"></span> Bed Cover</span><span class="font-bold">15%</span></div>
                        <div class="flex justify-between items-center"><span class="text-slate-500 flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-slate-200"></span> Dry Clean</span><span class="font-bold">10%</span></div>
                    </div>
                </div>

            </div>

            <!-- BAGIAN BAWAH: STATUS CUCIAN, TRANSAKSI TERBARU, AKSES CEPAT -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                <!-- 1. Status Cucian -->
                <div class="bg-white p-6 rounded-3xl border border-pink-100 shadow-sm space-y-4">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-slate-900 text-sm">Status Cucian</h3>
                        <a href="{{ url('/transaksi') }}" class="text-xs font-semibold text-pink-500 hover:text-pink-600">Lihat Detail →</a>
                    </div>

                    <div class="space-y-3.5 pt-2">
                        <div>
                            <div class="flex justify-between text-xs mb-1"><span class="text-slate-500">Menunggu</span><span class="font-bold">4 pesanan</span></div>
                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden"><div class="bg-amber-400 h-full w-[35%] rounded-full"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs mb-1"><span class="text-slate-500">Sedang Dicuci</span><span class="font-bold">5 pesanan</span></div>
                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden"><div class="bg-blue-400 h-full w-[50%] rounded-full"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs mb-1"><span class="text-slate-500">Proses Setrika</span><span class="font-bold">3 pesanan</span></div>
                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden"><div class="bg-purple-400 h-full w-[25%] rounded-full"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs mb-1"><span class="text-slate-500">Siap Diambil</span><span class="font-bold">6 pesanan</span></div>
                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden"><div class="bg-emerald-400 h-full w-[70%] rounded-full"></div></div>
                        </div>
                    </div>
                </div>

                <!-- 2. Transaksi Terbaru (Aman Menggunakan Looping/Data Statis) -->
                <div class="bg-white p-6 rounded-3xl border border-pink-100 shadow-sm space-y-4">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-slate-900 text-sm">Transaksi Terbaru</h3>
                        <a href="{{ url('/transaksi') }}" class="text-xs font-semibold text-pink-500 hover:text-pink-600">Lihat Semua →</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <thead>
                                <tr class="text-slate-400 border-b border-slate-100 pb-2">
                                    <th class="pb-2 font-semibold">Kode</th>
                                    <th class="pb-2 font-semibold">Pelanggan</th>
                                    <th class="pb-2 font-semibold">Total</th>
                                    <th class="pb-2 font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @if(isset($transaksiTerbaru) && count($transaksiTerbaru) > 0)
                                    @foreach($transaksiTerbaru as $trx)
                                        <tr>
                                            <td class="py-2.5 font-bold text-slate-700">{{ $trx->kode_invoice ?? 'TRX-001' }}</td>
                                            <td class="py-2.5 text-slate-600">{{ $trx->pelanggan->nama ?? 'Andi Wijaya' }}</td>
                                            <td class="py-2.5 font-semibold text-slate-800">Rp {{ number_format($trx->total_harga ?? 36000, 0, ',', '.') }}</td>
                                            <td class="py-2.5"><span class="bg-amber-50 text-amber-600 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Diproses</span></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="py-2.5 font-bold text-slate-700">TRX-001</td>
                                        <td class="py-2.5 text-slate-600">Andi Wijaya</td>
                                        <td class="py-2.5 font-semibold text-slate-800">Rp 36.000</td>
                                        <td class="py-2.5"><span class="bg-amber-50 text-amber-600 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Diproses</span></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 font-bold text-slate-700">TRX-002</td>
                                        <td class="py-2.5 text-slate-600">Siti Rahma</td>
                                        <td class="py-2.5 font-semibold text-slate-800">Rp 45.000</td>
                                        <td class="py-2.5"><span class="bg-emerald-50 text-emerald-600 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2.5 font-bold text-slate-700">TRX-003</td>
                                        <td class="py-2.5 text-slate-600">Budi Santoso</td>
                                        <td class="py-2.5 font-semibold text-slate-800">Rp 28.000</td>
                                        <td class="py-2.5"><span class="bg-blue-50 text-blue-600 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Menunggu</span></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 3. Akses Cepat -->
                <div class="bg-white p-6 rounded-3xl border border-pink-100 shadow-sm space-y-4">
                    <h3 class="font-bold text-slate-900 text-sm">Akses Cepat</h3>

                    <div class="grid grid-cols-2 gap-3 pt-1">
                        <a href="{{ url('/transaksi/create') }}" class="p-4 rounded-2xl bg-pink-50 hover:bg-pink-100 transition-all text-center flex flex-col items-center justify-center group">
                            <div class="w-9 h-9 rounded-xl bg-pink-500 text-white flex items-center justify-center mb-2 shadow-sm">
                                <i class="fa-solid fa-plus text-xs"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-700">Transaksi Baru</span>
                        </a>

                        <a href="{{ url('/pelanggan/create') }}" class="p-4 rounded-2xl bg-rose-50 hover:bg-rose-100 transition-all text-center flex flex-col items-center justify-center group">
                            <div class="w-9 h-9 rounded-xl bg-rose-500 text-white flex items-center justify-center mb-2 shadow-sm">
                                <i class="fa-solid fa-user-plus text-xs"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-700">Tambah Pelanggan</span>
                        </a>

                        <a href="{{ url('/paket') }}" class="p-4 rounded-2xl bg-purple-50 hover:bg-purple-100 transition-all text-center flex flex-col items-center justify-center group">
                            <div class="w-9 h-9 rounded-xl bg-purple-500 text-white flex items-center justify-center mb-2 shadow-sm">
                                <i class="fa-solid fa-jug-detergent text-xs"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-700">Tambah Layanan</span>
                        </a>

                        <a href="{{ url('/laporan') }}" class="p-4 rounded-2xl bg-amber-50 hover:bg-amber-100 transition-all text-center flex flex-col items-center justify-center group">
                            <div class="w-9 h-9 rounded-xl bg-amber-500 text-white flex items-center justify-center mb-2 shadow-sm">
                                <i class="fa-solid fa-file-lines text-xs"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-700">Lihat Laporan</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer Bawah -->
        <footer class="bg-pink-500 text-white px-8 py-3 text-center text-xs font-semibold flex flex-col sm:flex-row justify-between items-center gap-2 mt-auto">
            <span>© 2026 Laundry Bubbles Q. Sistem Manajemen Laundry.</span>
            <span>Bersih • Rapi • Terpercaya 🤍</span>
        </footer>
    </main>

</body>
</html> 
