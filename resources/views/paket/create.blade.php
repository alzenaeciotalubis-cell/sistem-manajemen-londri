
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket Laundry - Bubbles Q</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #fff1f7, #ffe0ef);
            font-family: Arial, sans-serif;
            color: #374151;
        }

        .page-container {
            max-width: 1050px;
            margin: 0 auto;
            padding: 45px 20px;
        }

        .page-header {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 28px;
        }

        .header-icon {
            width: 65px;
            height: 65px;
            border-radius: 20px;
            background: linear-gradient(135deg, #ec4899, #f472b6);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            box-shadow: 0 8px 18px rgba(236, 72, 153, .25);
        }

        .page-header h1 {
            color: #db2777;
            font-size: 29px;
            font-weight: 800;
            margin: 0 0 6px;
        }

        .page-header p {
            color: #9d6680;
            font-size: 13px;
            margin: 0;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 11px 19px;
            background: white;
            color: #db2777;
            border: 1px solid #fbcfe8;
            border-radius: 12px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 22px;
            transition: .2s;
        }

        .back-button:hover {
            background: #fce7f3;
            color: #be185d;
            transform: translateX(-3px);
        }

        .form-card {
            background: white;
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 12px 35px rgba(190, 24, 93, .10);
            border: 1px solid #fce7f3;
        }

        .form-heading {
            padding-bottom: 20px;
            margin-bottom: 25px;
            border-bottom: 1px solid #fce7f3;
        }

        .form-heading h2 {
            font-size: 19px;
            font-weight: 800;
            color: #831843;
            margin-bottom: 6px;
        }

        .form-heading p {
            font-size: 12px;
            color: #9ca3af;
            margin: 0;
        }

        .form-label {
            font-size: 13px;
            font-weight: 700;
            color: #4b2540;
            margin-bottom: 9px;
        }

        .form-control {
            min-height: 48px;
            border: 1px solid #f3c4dc;
            border-radius: 11px;
            padding: 12px 15px;
            font-size: 13px;
            background-color: #fffafd;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-control:focus {
            border-color: #ec4899;
            background: white;
            box-shadow: 0 0 0 4px rgba(236, 72, 153, .12);
        }

        .input-group-text {
            background: #fce7f3;
            color: #be185d;
            border: 1px solid #f3c4dc;
            border-radius: 11px 0 0 11px;
            font-weight: 700;
            font-size: 13px;
        }

        .input-group .form-control {
            border-radius: 0 11px 11px 0;
        }

        .form-text {
            font-size: 11px;
            color: #9ca3af;
            margin-top: 7px;
        }

        .btn-save {
            border: none;
            background: linear-gradient(135deg, #ec4899, #db2777);
            color: white;
            border-radius: 12px;
            padding: 14px 25px;
            font-size: 14px;
            font-weight: 700;
            transition: .2s;
            box-shadow: 0 7px 16px rgba(219, 39, 119, .2);
        }

        .btn-save:hover {
            background: linear-gradient(135deg, #db2777, #be185d);
            color: white;
            transform: translateY(-2px);
        }

        .btn-cancel {
            border: 1px solid #e5e7eb;
            background: white;
            color: #6b7280;
            border-radius: 12px;
            padding: 14px 22px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        .btn-cancel:hover {
            background: #f9fafb;
            color: #374151;
        }

        .alert {
            border-radius: 12px;
            font-size: 13px;
        }

        .footer {
            text-align: center;
            color: #b76b91;
            font-size: 11px;
            margin-top: 28px;
        }

        @media (max-width: 600px) {
            .page-container {
                padding: 25px 14px;
            }

            .form-card {
                padding: 22px 17px;
            }

            .page-header h1 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>

<div class="page-container">

    <!-- JUDUL HALAMAN -->
    <div class="page-header">
        <div class="header-icon">
            <i class="fa-solid fa-shirt"></i>
        </div>

        <div>
            <h1>Tambah Paket Laundry</h1>
            <p>Tambahkan layanan dan harga baru Laundry Bubbles Q.</p>
        </div>
    </div>

    <!-- TOMBOL KEMBALI -->
    <a href="{{ route('paket.index') }}" class="back-button">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali ke Daftar Paket
    </a>

    <!-- FORM TAMBAH PAKET -->
    <div class="form-card">

        <div class="form-heading">
            <h2><i class="fa-solid fa-clipboard-list text-danger me-2"></i>Informasi Paket</h2>
            <p>Lengkapi informasi paket laundry di bawah ini.</p>
        </div>

        <!-- PESAN KESALAHAN -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong><i class="fa-solid fa-circle-exclamation me-2"></i>Data belum benar.</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('paket.store') }}" method="POST" autocomplete="off">
            @csrf

            <!-- NAMA PAKET -->
            <div class="mb-4">
                <label class="form-label">
                    Nama Paket <span class="text-danger">*</span>
                </label>

                <input
                    type="text"
                    name="nama_paket"
                    class="form-control @error('nama_paket') is-invalid @enderror"
                    placeholder="Contoh: Cuci Kering, Cuci Komplit, Laundry Express"
                    value="{{ old('nama_paket') }}"
                    autocomplete="off"
                    required
                >

                @error('nama_paket')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div class="form-text">
                    Masukkan nama layanan laundry yang ingin ditambahkan.
                </div>
            </div>

            <!-- HARGA PAKET -->
            <div class="mb-4">
                <label class="form-label">
                    Harga Paket <span class="text-danger">*</span>
                </label>

                <div class="input-group">
                    <span class="input-group-text">Rp</span>

                    <input
                        type="number"
                        name="harga"
                        class="form-control @error('harga') is-invalid @enderror"
                        placeholder="Contoh: 7000"
                        value="{{ old('harga') }}"
                        min="0"
                        step="1"
                        inputmode="numeric"
                        autocomplete="off"
                        required
                    >
                </div>

                @error('harga')
                    <div class="text-danger mt-1" style="font-size:12px;">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-text">
                    Masukkan harga dalam rupiah tanpa tanda titik atau koma.
                </div>
            </div>

            <!-- KETERANGAN -->
            <div class="mb-4">
                <label class="form-label">Keterangan Paket</label>

                <textarea
                    name="keterangan"
                    class="form-control @error('keterangan') is-invalid @enderror"
                    rows="4"
                    placeholder="Contoh: Layanan cuci, pengeringan, setrika, dan pewangi pakaian."
                    autocomplete="off"
                >{{ old('keterangan') }}</textarea>

                @error('keterangan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div class="form-text">
                    Keterangan boleh dikosongkan jika tidak diperlukan.
                </div>
            </div>

            <!-- TOMBOL -->
            <div class="d-flex flex-column flex-sm-row justify-content-end gap-3 pt-3 border-top">

                <a href="{{ route('paket.index') }}" class="btn-cancel text-center">
                    <i class="fa-solid fa-xmark me-2"></i>Batal
                </a>

                <button type="submit" class="btn-save">
                    <i class="fa-solid fa-floppy-disk me-2"></i>
                    Simpan Paket
                </button>

            </div>

        </form>
    </div>

    <div class="footer">
        © 2026 Laundry Bubbles Q · Sistem Manajemen Laundry
    </div>

</div>

</body>
</html>
