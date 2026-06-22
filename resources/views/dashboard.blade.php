<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff5f9;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .judul-utama {
            color: #d63384;
            font-weight: 700;
            font-size: 2.2rem;
        }

        .sub-judul {
            color: #994477;
            font-size: 1.1rem;
        }

        .card-menu {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(214,51,132,0.15);
            transition: 0.3s;
            background: white;
            height: 100%;
        }

        .card-menu:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(214,51,132,0.25);
        }

        .btn-pelanggan {
            background:#ff8fab;
            color:white;
            border:none;
        }

        .btn-paket {
            background:#f06595;
            color:white;
            border:none;
        }

        .btn-transaksi {
            background:#d63384;
            color:white;
            border:none;
        }

        .btn-pelanggan:hover,
        .btn-paket:hover,
        .btn-transaksi:hover {
            color:white;
        }

        .icon-besar {
            font-size:2.5rem;
            margin-bottom:1rem;
            color:#d63384;
        }
    </style>

</head>

<body>

<div class="container mt-5 mb-5">

    <div class="text-center mb-5">

        <h1 class="judul-utama">
            ✨ SISTEM MANAJEMEN LAUNDRY ✨
        </h1>

        <p class="sub-judul">
            Kelola data pelanggan, paket layanan, dan transaksi dengan mudah
        </p>

    </div>


    <div class="row g-4">


        <div class="col-md-4">

            <div class="card card-menu p-4 text-center">

                <div class="icon-besar">
                    👤
                </div>

                <h3>Data Pelanggan</h3>

                <p class="text-muted">
                    Tambah, lihat, edit dan hapus pelanggan
                </p>

                <a href="{{ route('pelanggan.index') }}"
                class="btn btn-pelanggan w-100">
                    Buka Menu
                </a>

            </div>

        </div>



        <div class="col-md-4">

            <div class="card card-menu p-4 text-center">

                <div class="icon-besar">
                    🧺
                </div>

                <h3>Data Paket</h3>

                <p class="text-muted">
                    Kelola jenis layanan laundry
                </p>

                <a href="{{ route('paket.index') }}"
                class="btn btn-paket w-100">
                    Buka Menu
                </a>

            </div>

        </div>




        <div class="col-md-4">

            <div class="card card-menu p-4 text-center">

                <div class="icon-besar">
                    🧾
                </div>

                <h3>Transaksi</h3>

                <p class="text-muted">
                    Catat transaksi laundry
                </p>

                <a href="{{ route('transaksi.index') }}"
                class="btn btn-transaksi w-100">
                    Buka Menu
                </a>

            </div>

        </div>


    </div>


</div>


</body>
</html>
