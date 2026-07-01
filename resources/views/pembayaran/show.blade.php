<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pelanggan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <h2 class="text-2xl font-bold text-gray-800">Detail Pelanggan</h2>
            <span class="text-sm text-gray-500">ID: #{{ $data->id }}</span>
        </div>

        <div class="space-y-4">
            <div>
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Lengkap</label>
                <p class="text-lg text-gray-900 font-medium mt-1">{{ $data->nama }}</p>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Alamat Email</label>
                <p class="text-lg text-gray-900 mt-1">{{ $data->email }}</p>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">No. Telepon / WhatsApp</label>
                <p class="text-lg text-gray-900 mt-1">{{ $data->telepon }}</p>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Alamat</label>
                <p class="text-lg text-gray-900 mt-1 bg-gray-50 p-3 rounded border border-gray-100">
                    {{ $data->alamat ?? 'Tidak ada alamat' }}
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4 pt-2 text-xs text-gray-400">
                <div>
                    <p>Terdaftar pada:</p>
                    <p class="font-medium">{{ $data->created_at->format('d M Y, H:i') }}</p>
                </div>
                <div>
                    <p>Terakhir diperbarui:</p>
                    <p class="font-medium">{{ $data->updated_at->format('d M Y, H:i') }}</p>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-2 mt-8 pt-4 border-t border-gray-100">
            <a href="{{ route('pelanggan.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                Kembali
            </a>
            <a href="{{ route('pelanggan.edit', $data->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                Edit Data
            </a>
        </div>
    </div>
</body>
</html>
