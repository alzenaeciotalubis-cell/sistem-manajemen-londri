<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Daftar Pelanggan</h2>
            <a href="{{ route('pelanggan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Tambah Pelanggan
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="border border-gray-200 p-3">Nama</th>
                    <th class="border border-gray-200 p-3">Email</th>
                    <th class="border border-gray-200 p-3">Telepon</th>
                    <th class="border border-gray-200 p-3">Alamat</th>
                    <th class="border border-gray-200 p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $pelanggan)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 p-3">{{ $pelanggan->nama }}</td>
                        <td class="border border-gray-200 p-3">{{ $pelanggan->email }}</td>
                        <td class="border border-gray-200 p-3">{{ $pelanggan->telepon }}</td>
                        <td class="border border-gray-200 p-3">{{ $pelanggan->alamat ?? '-' }}</td>
                        <td class="border border-gray-200 p-3 text-center flex justify-center gap-2">
                            <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">
                                Edit
                            </a>

                            <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center p-4 text-gray-500">Belum ada data pelanggan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
