<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Pelanggan Baru</h2>

        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="w-full p-2 border rounded @error('nama') border-red-500 @enderror">
                @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 border rounded @error('email') border-red-500 @enderror">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Telepon</label>
                <input type="text" name="telepon" value="{{ old('telepon') }}" class="w-full p-2 border rounded @error('telepon') border-red-500 @enderror">
                @error('telepon') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Alamat</label>
                <textarea name="alamat" rows="3" class="w-full p-2 border rounded">{{ old('alamat') }}</textarea>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('pelanggan.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
