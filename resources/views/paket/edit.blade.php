<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Paket Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>

        body {
            background-color: #ffe6f2;
        }


        h2 {
            color: #ff1493;
            font-weight: bold;
        }


        .btn-pink {

            background-color: #ff4fa3;
            border: none;
            color: white;

        }


        .btn-pink:hover {

            background-color: #e60073;
            color: white;

        }


        .form-control:focus {

            border-color: #ff4fa3;
            box-shadow: 0 0 0 0.2rem rgba(255,79,163,0.25);

        }


        .card {

            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(255,20,147,0.2);

        }


    </style>


</head>


<body class="container mt-5 mb-5">


    <h2 class="mb-4">
        ✏️ Edit Data Paket
    </h2>



    <a href="{{ route('paket.index') }}"
       class="btn btn-secondary mb-4">

        ← Kembali ke Daftar

    </a>




    <div class="card p-4">


        <form action="{{ route('paket.update',$paket->id) }}"
              method="POST">


            @csrf

            @method('PUT')




            <div class="mb-3">


                <label class="form-label">
                    Nama Paket
                </label>


                <input type="text"
                       name="nama_paket"
                       value="{{ $paket->nama_paket }}"
                       class="form-control"
                       required>


            </div>





            <div class="mb-3">


                <label class="form-label">
                    Harga per Kg (Rp)
                </label>


                <input type="number"
                       name="harga"
                       min="0"
                       value="{{ $paket->harga }}"
                       class="form-control"
                       required>


            </div>





            <div class="mb-4">


                <label class="form-label">
                    Keterangan
                </label>


                <textarea name="keterangan"
                          class="form-control"
                          rows="3">{{ $paket->keterangan }}</textarea>


            </div>





            <button type="submit"
                    class="btn btn-pink w-100 py-2">

                💾 Simpan Perubahan

            </button>




        </form>


    </div>



</body>
</html>