<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>

        body {
            background-color: #fff0f6;
        }


        h2 {
            color: #d63384;
            font-weight: bold;
        }


        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 5px 15px rgba(214,51,132,0.2);
        }


        .btn-pink {

            background-color: #d63384;
            color: white;
            border: none;

        }


        .btn-pink:hover {

            background-color: #a61e5c;
            color: white;

        }


        .form-control:focus {

            border-color: #d63384;

            box-shadow: 0 0 0 0.2rem rgba(214,51,132,.25);

        }

    </style>

</head>


<body class="container mt-5 mb-5">


    <h2 class="mb-4">
        ➕ Tambah Pelanggan Baru
    </h2>



    <a href="{{ route('pelanggan.index') }}"
       class="btn btn-secondary mb-4">

        ← Kembali

    </a>



    <div class="card p-4">


        <form action="{{ route('pelanggan.store') }}" method="POST">


            @csrf



            <div class="mb-3">

                <label class="form-label">
                    Nama Lengkap
                </label>


                <input type="text"
                       name="nama"
                       class="form-control"
                       required>

            </div>



            <div class="mb-3">

                <label class="form-label">
                    Nomor Telepon
                </label>


                <input type="text"
                       name="telepon"
                       class="form-control"
                       required>

            </div>



            <div class="mb-4">

                <label class="form-label">
                    Alamat Lengkap
                </label>


                <textarea name="alamat"
                          class="form-control"
                          rows="3"
                          required></textarea>


            </div>




            <button type="submit"
                    class="btn btn-pink w-100 py-2">

                💾 Simpan Data

            </button>



        </form>


    </div>


</body>

</html>