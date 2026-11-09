
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembayaran - Laundry Bubbles Q</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #fff0f7;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 750px;
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        h3 {
            color: #d63384;
            font-weight: bold;
        }

        .btn-pink {
            background: #e91e78;
            color: white;
        }

        .btn-pink:hover {
            background: #c2185b;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4">

        <h3 class="mb-4">Tambah Pembayaran</h3>

        <form action="{{ route('pembayaran.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">ID Transaksi</label>
                <input type="number" name="transaksi_id"
                    class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Pembayaran</label>
                <input type="number" name="jumlah_bayar"
                    class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Metode Pembayaran</label>
                <select name="metode_pembayaran" class="form-select" required>
                    <option value="">Pilih Metode</option>
                    <option value="Tunai">Tunai</option>
                    <option value="Transfer">Transfer</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Status Pembayaran</label>
                <select name="status" class="form-select" required>
                    <option value="Belum Lunas">Belum Lunas</option>
                    <option value="Lunas">Lunas</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('pembayaran.index') }}"
                   class="btn btn-secondary">Kembali</a>

                <button type="submit" class="btn btn-pink">
                    Simpan Pembayaran
                </button>
            </div>

        </form>
    </div>
</div>

</body>
</html>
