<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas - Laundry Bubbles Q</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#fff9fb] text-slate-800 antialiased min-h-screen flex flex-col justify-between p-6 md:p-10">

    <div class="max-w-3xl mx-auto w-full">
        <!-- Tombol Kembali -->
        <a href="{{ route('petugas.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-pink-600 bg-white px-4 py-2 rounded-xl border border-pink-100 shadow-sm hover:bg-pink-50 transition-all mb-6">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Data Petugas
        </a>

        <!-- Form Card -->
        <div class="bg-white p-8 rounded-3xl border border-pink-100 shadow-sm">
            <div class="mb-6">
                <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-user-plus text-pink-500"></i> Tambah Petugas Baru
                </h2>
                <p class="text-xs text-slate-500 mt-0.5">Masukkan informasi akun dan data diri petugas laundry.</p>
            </div>

            <!-- Pesan Error Validasi -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-rose-50 border border-rose-100 rounded-2xl text-rose-600 text-xs">
                    <p class="font-bold mb-1">Terjadi kesalahan:</p>
                    <ul class="list-disc list-inside space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Simpan Petugas -->
            <form action="{{ route('petugas.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-pink-400 transition-all" required>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Username</label>
                    <input type="text" name="username" value="{{ old('username') }}" placeholder="Contoh: budi01" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-pink-400 transition-all" required>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">No. HP / WhatsApp</label>
                    <input type="text" name="telepon" value="{{ old('telepon') }}" placeholder="Contoh: 081234567890" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-pink-400 transition-all" required>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Posisi / Jabatan</label>
                    <select name="posisi" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs font-semibold text-slate-600 focus:outline-none focus:border-pink-400 transition-all" required>
                        <option value="">-- Pilih Posisi --</option>
                        <option value="Petugas Laundry">Petugas Laundry</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Petugas Setrika">Petugas Setrika</option>
                        <option value="Petugas Cuci">Petugas Cuci</option>
                        <option value="Petugas Packing">Petugas Packing</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Password</label>
                    <input type="password" name="password" placeholder="Minimal 5 karakter" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-pink-400 transition-all" required>
                </div>

                <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('petugas.index') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-xl text-xs font-bold transition-all">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2.5 bg-pink-500 hover:bg-pink-600 text-white rounded-xl text-xs font-bold shadow-md shadow-pink-200 transition-all">
                        Simpan Petugas
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-xs text-slate-400 mt-8">
        © 2026 Laundry Bubbles Q. Sistem Manajemen Laundry.
    </footer>

</body>
</html>
