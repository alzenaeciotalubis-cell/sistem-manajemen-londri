
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi - Laundry Bubbles Q</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #fff0f7;
            font-family: Arial, sans-serif;
            color: #54213d;
        }

        .container-form {
            max-width: 900px;
            margin: 40px auto;
        }

        .card-form {
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 5px 25px rgba(214, 51, 132, 0.10);
        }

        h2 {
            color: #a30d58;
            font-weight: bold;
        }

        .section-title {
            color: #e91e78;
            font-weight: bold;
            margin-top: 25px;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control, .form-select {
            border: 1px solid #f5a6ca;
            border-radius: 10px;
            padding: 12px;
        }

        .form-control:focus, .form-select:focus {
            border-color: #e91e78;
            box-shadow: 0 0 0 3px rgba(233, 30, 120, 0.12);
        }

        .total-box {
            background: #fff0f7;
            border: 1px solid #f5a6ca;
            border-radius: 12px;
            padding: 20px;
            margin-top: 20px;
        }

        .total-harga {
            color: #c21869;
            font-size: 28px;
            font-weight: bold;
        }

        .btn-pink {
            background: #e91e78;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
        }

        .btn-pink:hover {
            background: #c21869;
            color: white;
        }

        .btn-back {
            color: #e91e78;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container container-form">

    <a href="{{ route('transaksi.index') }}" class="btn-back">
        ← Kembali ke Daftar Transaksi
    </a>

    <div class="card-form mt-4">

        <h2>🧾 Formulir Transaksi Baru</h2>
        <p class="text-secondary">
            Lengkapi data pelanggan dan layanan laundry di bawah ini.
        </p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Periksa kembali data berikut:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf

            <h5 class="section-title">👤 Data Pelanggan</h5>

            <div class="mb-3">
                <label class="form-label">Nama Pelanggan *</label>
                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ old('nama') }}"
                    placeholder="Masukkan nama pelanggan"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon *</label>
                <input
                    type="text"
                    name="telepon"
                    class="form-control"
                    value="{{ old('telepon') }}"
                    placeholder="Contoh: 081234567890"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea
                    name="alamat"
                    class="form-control"
                    rows="3"
                    placeholder="Masukkan alamat pelanggan">{{ old('alamat') }}</textarea>
            </div>

            <hr>

            <h5 class="section-title">👕 Detail Layanan Laundry</h5>

            <div class="mb-3">
                <label class="form-label">Pilih Paket Laundry *</label>

                <select
                    name="paket_id"
                    id="paket_id"
                    class="form-select"
                    required>

                    <option value="">-- Pilih Paket Laundry --</option>

                    @foreach ($paket as $item)
                        <option
                            value="{{ $item->id }}"
                            data-harga="{{ $item->harga }}"
                            {{ old('paket_id') == $item->id ? 'selected' : '' }}>

                            {{ $item->nama_paket }}
                            - Rp {{ number_format($item->harga, 0, ',', '.') }}

                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Berat Cucian (Kg) *</label>
                <input
                    type="number"
                    name="berat_kg"
                    id="berat_kg"
                    class="form-control"
                    min="0.1"
                    step="0.1"
                    value="{{ old('berat_kg', '0.1') }}"
                    required>
            </div>

            <div class="total-box">
                <div class="text-secondary">Estimasi Total Pembayaran</div>
                <div class="total-harga" id="total_harga">
                    Rp 0
                </div>
                <small class="text-secondary">
                    Total dihitung berdasarkan harga paket dikali berat cucian.
                </small>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('transaksi.index') }}"
                   class="btn btn-outline-secondary">
                    Batal
                </a>

                <button type="submit" class="btn btn-pink">
                    Simpan Transaksi
                </button>
            </div>

        </form>
    </div>
</div>

<script>
    const paketSelect = document.getElementById('paket_id');
    const beratInput = document.getElementById('berat_kg');
    const totalHarga = document.getElementById('total_harga');

    function hitungTotal() {
        const pilihan = paketSelect.options[paketSelect.selectedIndex];

        const harga = parseFloat(pilihan.dataset.harga) || 0;
        const berat = parseFloat(beratInput.value) || 0;

        const total = harga * berat;

        totalHarga.textContent = 'Rp ' + total.toLocaleString('id-ID');
    }

    paketSelect.addEventListener('change', hitungTotal);
    beratInput.addEventListener('input', hitungTotal);

    hitungTotal();
</script>

</body>
</html>

