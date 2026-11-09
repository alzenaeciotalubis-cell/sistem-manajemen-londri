
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Laundry - Laundry Bubbles Q</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        .service-card {
            transition: all .3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(236, 72, 153, .12);
        }

        .service-image {
            transition: transform .4s ease;
        }

        .service-card:hover .service-image {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-[#fff9fb] text-slate-800 min-h-screen flex flex-col md:flex-row">

    <!-- SIDEBAR -->
    <aside class="w-full md:w-64 bg-white border-r border-pink-100 flex-shrink-0 flex flex-col justify-between p-6">
        <div>
            <div class="flex items-center gap-3 mb-8">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-pink-500 to-rose-400 flex items-center justify-center text-white text-xl shadow-md">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <div>
                    <h1 class="font-extrabold text-base text-slate-900">Laundry</h1>
                    <p class="text-xs font-bold text-pink-500">Bubbles Q</p>
                </div>
            </div>

            <div class="space-y-1.5">
                <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Menu Utama</p>

                <a href="{{ url('/admin') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600">
                    <i class="fa-solid fa-house w-4"></i> Dashboard
                </a>

                <a href="{{ url('/pelanggan') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600">
                    <i class="fa-solid fa-users w-4"></i> Data Pelanggan
                </a>

                <a href="{{ url('/paket') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold text-white bg-pink-500 shadow-md">
                    <i class="fa-solid fa-jug-detergent w-4"></i> Layanan Laundry
                </a>

                <a href="{{ url('/transaksi') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600">
                    <i class="fa-solid fa-receipt w-4"></i> Data Transaksi
                </a>

                <a href="{{ url('/pembayaran') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600">
                    <i class="fa-solid fa-wallet w-4"></i> Pembayaran
                </a>

                <a href="{{ url('/petugas') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600">
                    <i class="fa-solid fa-user-shield w-4"></i> Data Petugas
                </a>

                <a href="{{ url('/laporan') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-slate-600 hover:bg-pink-50 hover:text-pink-600">
                    <i class="fa-solid fa-file-lines w-4"></i> Laporan
                </a>

                <div class="pt-4">
                    <a href="{{ url('/logout') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-semibold text-rose-500 hover:bg-rose-50">
                        <i class="fa-solid fa-right-from-bracket w-4"></i> Keluar
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-gradient-to-br from-pink-500 to-rose-400 p-4 rounded-2xl text-white text-center">
            <p class="text-[11px] italic font-medium">"Laundry Bersih, Hidup Lebih Fresh"</p>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="flex-1 flex flex-col min-w-0">

        <!-- TOPBAR -->
        <header class="bg-white px-8 py-4 flex items-center justify-between border-b border-pink-50 shadow-sm sticky top-0 z-10">
            <h1 class="text-lg font-bold text-slate-900">Layanan Laundry</h1>

            <div class="flex items-center gap-3 border-l pl-6 border-slate-100">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-slate-800">ALZEN LUBIS</p>
                    <p class="text-[10px] text-pink-500 font-bold">Administrator</p>
                </div>
                <div class="w-9 h-9 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
            </div>
        </header>

        <!-- ISI HALAMAN -->
        <div class="p-6 md:p-8 space-y-6">

            <!-- BANNER -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-6 rounded-3xl border border-pink-100 shadow-sm">
                <div>
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                        <i class="fa-solid fa-jug-detergent text-pink-500"></i>
                        Daftar Layanan Laundry
                    </h2>
                    <p class="text-xs text-slate-500 mt-2">
                        Berbagai layanan terbaik dari Laundry Bubbles Q.
                    </p>
                    <p class="text-xs text-pink-500 font-semibold mt-2">
                        Tersedia 8 jenis layanan laundry
                    </p>
                </div>

                <a href="{{ url('/paket/create') }}"
                   class="px-5 py-3 bg-pink-500 hover:bg-pink-600 text-white rounded-2xl text-xs font-bold shadow-md flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Tambah Layanan
                </a>
            </div>

            @php
                $layanan = [
                    [
                        'nama' => 'Cuci Komplit',
                        'kategori' => 'Paling Populer',
                        'deskripsi' => 'Cuci, pengeringan, pewangi, setrika, dan lipat pakaian.',
                        'harga' => 'Rp7.000',
                        'satuan' => '/kg',
                        'foto' => 'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?w=600&auto=format&fit=crop'
                    ],
                    [
                        'nama' => 'Bed Cover & Selimut',
                        'kategori' => 'Perlengkapan Tidur',
                        'deskripsi' => 'Pencucian khusus selimut tebal, bed cover, dan sprei.',
                        'harga' => 'Rp25.000',
                        'satuan' => '/pcs',
                        'foto' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=600&auto=format&fit=crop'
                    ],
                    [
                        'nama' => 'Cuci Sepatu',
                        'kategori' => 'Perawatan Sepatu',
                        'deskripsi' => 'Pembersihan sepatu dari debu, noda, dan kotoran.',
                        'harga' => 'Rp20.000',
                        'satuan' => '/pasang',
                        'foto' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=600&auto=format&fit=crop'
                    ],
                    [
                        'nama' => 'Dry Clean Premium',
                        'kategori' => 'Perawatan Premium',
                        'deskripsi' => 'Perawatan khusus pakaian sensitif, jas, dan kebaya.',
                        'harga' => 'Rp15.000',
                        'satuan' => '/pcs',
                        'foto' => 'https://images.unsplash.com/photo-1598033129183-c4f50c736f10?w=600&auto=format&fit=crop'
                    ],
                    [
                        'nama' => 'Cuci Kering',
                        'kategori' => 'Cuci Pakaian',
                        'deskripsi' => 'Pakaian dicuci dan dikeringkan tanpa proses setrika.',
                        'harga' => 'Rp5.000',
                        'satuan' => '/kg',
                        'foto' => 'https://images.unsplash.com/photo-1545173168-9f1947eebb7f?w=600&auto=format&fit=crop'
                    ],
                    [
                        'nama' => 'Cuci Setrika',
                        'kategori' => 'Layanan Reguler',
                        'deskripsi' => 'Pakaian dicuci, dikeringkan, disetrika, dan dilipat.',
                        'harga' => 'Rp7.000',
                        'satuan' => '/kg',
                        'foto' => 'https://images.unsplash.com/photo-1521656693074-0ef32e80a5d5?w=600&auto=format&fit=crop'
                    ],
                    [
                        'nama' => 'Laundry Express',
                        'kategori' => 'Layanan Cepat',
                        'deskripsi' => 'Layanan laundry cepat untuk pakaian yang segera digunakan.',
                        'harga' => 'Rp12.000',
                        'satuan' => '/kg',
                        'foto' => 'https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?w=600&auto=format&fit=crop'
                    ],
                    [
                        'nama' => 'Setrika Saja',
                        'kategori' => 'Perawatan Pakaian',
                        'deskripsi' => 'Pakaian disetrika dan dilipat tanpa proses pencucian.',
                        'harga' => 'Rp5.000',
                        'satuan' => '/kg',
                        'foto' => 'https://images.pexels.com/photos/5591663/pexels-photo-5591663.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                ];
            @endphp

            <!-- GRID KARTU LAYANAN -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

                @foreach ($layanan as $item)
                    <div class="service-card bg-white rounded-3xl border border-pink-100 shadow-sm overflow-hidden flex flex-col">

                        <div class="h-44 bg-pink-50 overflow-hidden">
                            <img
                                src="{{ $item['foto'] }}"
                                alt="{{ $item['nama'] }}"
                                class="service-image w-full h-full object-cover"
                                loading="lazy"
                                onerror="this.onerror=null;this.src='https://placehold.co/600x400/fce7f3/be185d?text=Foto+{{ urlencode($item['nama']) }}';"
                            >
                        </div>

                        <div class="p-5 flex-1">
                            <span class="inline-block bg-pink-100 text-pink-600 text-[10px] font-bold px-3 py-1 rounded-full">
                                {{ $item['kategori'] }}
                            </span>

                            <h3 class="font-bold text-slate-900 text-sm mt-3">
                                {{ $item['nama'] }}
                            </h3>

                            <p class="text-[11px] text-slate-500 leading-relaxed mt-2">
                                {{ $item['deskripsi'] }}
                            </p>
                        </div>

                        <div class="p-5 pt-3 border-t border-pink-50 flex items-center justify-between gap-2">
                            <div>
                                <span class="font-extrabold text-pink-600 text-sm">
                                    {{ $item['harga'] }}
                                </span>
                                <span class="text-[10px] text-slate-400">
                                    {{ $item['satuan'] }}
                                </span>
                            </div>

                            <a href="{{ url('/transaksi/create') }}"
                               class="px-4 py-2 bg-pink-50 hover:bg-pink-500 text-pink-600 hover:text-white rounded-xl text-xs font-bold transition-all">
                                Pesan
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- INFORMASI -->
            <div class="bg-pink-50 border border-pink-100 p-5 rounded-2xl">
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-info text-pink-500 mt-1"></i>
                    <div>
                        <h3 class="text-sm font-bold text-pink-700">Informasi Layanan</h3>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                            Harga layanan merupakan contoh tarif dan dapat disesuaikan
                            dengan ketentuan Laundry Bubbles Q.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- FOOTER -->
        <footer class="bg-pink-500 text-white px-8 py-4 text-center text-xs font-semibold flex flex-col sm:flex-row justify-between gap-2 mt-auto">
            <span>© 2026 Laundry Bubbles Q. Sistem Manajemen Laundry.</span>
            <span>Bersih • Rapi • Terpercaya 🤍</span>
        </footer>

    </main>
</body>
</html>
