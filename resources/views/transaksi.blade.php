
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi - Laundry Bubbles Q</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #fff0f7;
            font-family: Arial, sans-serif;
            color: #54213d;
        }

        .container-form {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 18px;
        }

        .form-card {
            background: white;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 10px 35px rgba(180, 50, 110, .08);
        }

        h2 {
            color: #94104f;
            font-weight: 800;
        }

        .section-title {
            color: #d41470;
            font-weight: bold;
            margin: 30px 0 20px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-control, .form-select {
            min-height: 52px;
            border: 1px solid #ffc0dc;
            border-radius: 12px;
        }

        .form-control:focus, .form-select:focus {
            border-color: #e91e78;
            box-shadow: 0 0 0 3px rgba(233,30,120,.12);
        }

        .total-box {
            background: #fff0f7;
            border: 1px solid #ffc1dd;
            border-radius: 18px;
            padding: 25px;
            margin-top: 25px;
        }

        .total-price {
            color: #e91e78;
            font-size: 32px;
            font-weight: 800;
        }

        .btn-save {
            background: #e91e78;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 13px 25px;
            font-weight: bold;
        }

        .btn-save:hover {
            background: #c2185b;
            color: white;
        }

        .btn-back {
            display: inline-block;
            color: #e91e78;
            background: white;
            border: 1px solid #ffc1dd;
            border-radius: 12px;
            padding: 12px 20px;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: bold;
        }

        @media(max-width: 600px) {
            .form-card {
                padding: 22px 16px;
            }
        }
    </style>
</head>

<body>

<div class="container-form">

    <a href="{{ route('transaksi.index') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left me-2"></i>
        Kembali ke Daftar Transaksi
    </a>

    <div class="form-card">

        <h2>
            <i class="fa-solid fa-clipboard-list me-2"></i>
            Formulir Transaksi Baru
        </h2>

        <p class="text-secondary">
            Masukkan identitas pelanggan dan detail cucian.
        </p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Periksa kembali data berikut:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf

            <h5 class="section-title">
                <i class="fa-solid fa-user me-2"></i>
                Data Pelanggan
            </h5>

            <div class="mb-3">
                <label class="form-label">Nama Pelanggan *</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ old('nama') }}"
                       placeholder="Masukkan nama pelanggan"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon *</label>
                <input type="text"
                       name="telepon"
                       class="form-control"
                       value="{{ old('telepon') }}"
                       placeholder="Contoh: 081234567890"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat Pelanggan</label>
                <textarea name="alamat"
                          class="form-control"
                          rows="3"
                          placeholder="Masukkan alamat pelanggan">{{ old('alamat') }}</textarea>
            </div>

            <hr class="my-4">

            <h5 class="section-title">
                <i class="fa-solid fa-shirt me-2"></i>
                Detail Layanan Laundry
            </h5>

            <div class="mb-3">
                <label class="form-label">Pilih Paket Laundry *</label>

                <select name="paket_id" id="paket_id"
                        class="form-select" required>

                    <option value="">-- Pilih Paket Laundry --</option>

                    @foreach ($paket as $p)
                        <option value="{{ $p->id }}"
                                data-harga="{{ $p->harga }}"
                                {{ old('paket_id') == $p->id ? 'selected' : '' }}>
                            {{ $p->nama_paket }} -
                            Rp {{ number_format($p->harga, 0, ',', '.') }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Berat Cucian (Kg) *</label>
                <input type="number"
                       name="berat_kg"
                       id="berat_kg"
                       class="form-control"
                       min="0.1"
                       step="0.1"
                       value="{{ old('berat_kg') }}"
                       placeholder="Masukkan berat cucian"
                       required>
            </div>

            <div class="total-box">
                <div class="fw-bold text-danger">
                    <i class="fa-solid fa-calculator me-2"></i>
                    ESTIMASI TOTAL HARGA
                </div>

                <div class="total-price" id="preview_total">
                    Rp 0
                </div>
                <small class="text-secondary">
                    Harga paket dikalikan berat cucian.
                </small>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4 flex-wrap">

                <a href="{{ route('transaksi.index') }}"
                   class="btn btn-secondary">
                    Batal
                </a>

                <button type="submit" class="btn-save">
                    <i class="fa-solid fa-floppy-disk me-2"></i>
                    Simpan Transaksi
                </button>

            </div>

        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const paket = document.getElementById('paket_id');
    const berat = document.getElementById('berat_kg');
    const total = document.getElementById('preview_total');

    function hitungTotal() {
        const pilihan = paket.options[paket.selectedIndex];
        const harga = parseFloat(pilihan.dataset.harga) || 0;
        const kg = parseFloat(berat.value) || 0;

        total.textContent = 'Rp ' +
            Math.round(harga * kg).toLocaleString('id-ID');
    }

    paket.addEventListener('change', hitungTotal);
    berat.addEventListener('input', hitungTotal);

    hitungTotal();
});
</script>

</body>
</html>
