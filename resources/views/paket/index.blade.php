<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket Laundry</title>

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

        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(255, 20, 147, 0.2);
        }


        .table thead {
            background-color: #ffc1df;
            color: #8b005f;
        }


        .btn-warning {
            background-color: #ffb703;
            border: none;
            color: white;
        }


        .btn-danger {
            background-color: #ff3366;
            border: none;
        }


    </style>

</head>


<body class="container mt-5 mb-5">


    <h2 class="mb-4">
        🧺 Daftar Paket Laundry
    </h2>


    <div class="mb-4">

        <a href="{{ route('paket.create') }}" 
           class="btn btn-pink me-2">
            + Tambah Paket
        </a>


        <a href="{{ route('pelanggan.index') }}" 
           class="btn btn-secondary me-2">
            ← Data Pelanggan
        </a>


        <a href="/" 
           class="btn btn-secondary">
            🏠 Dashboard
        </a>

    </div>



    @if(session('sukses'))

        <div class="alert alert-success">

            {{ session('sukses') }}

        </div>

    @endif





    <div class="card p-4">


        <table class="table table-hover table-bordered">


            <thead>

                <tr>

                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Harga (Rp)</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>

                </tr>

            </thead>



            <tbody>


            @foreach($pakets as $no => $p)

                <tr>


                    <td>
                        {{ $no + 1 }}
                    </td>


                    <td>
                        {{ $p->nama_paket }}
                    </td>


                    <td>

                        Rp {{ number_format($p->harga,0,',','.') }}

                    </td>


                    <td>

                        {{ $p->keterangan ?? '-' }}

                    </td>



                    <td>


                        <a href="{{ route('paket.edit',$p->id) }}"
                           class="btn btn-warning btn-sm">

                           ✏️ Edit

                        </a>



                        <form action="{{ route('paket.destroy',$p->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin hapus paket ini?')">


                            @csrf
                            @method('DELETE')


                            <button class="btn btn-danger btn-sm">

                                🗑️ Hapus

                            </button>


                        </form>


                    </td>


                </tr>


            @endforeach





            @if($pakets->isEmpty())


                <tr>

                    <td colspan="5" class="text-center text-muted">

                        Belum ada data paket

                    </td>

                </tr>


            @endif



            </tbody>


        </table>


    </div>



</body>
</html>