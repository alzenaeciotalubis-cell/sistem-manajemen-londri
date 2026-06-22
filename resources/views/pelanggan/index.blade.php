<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>

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
            border-radius: 18px;
            border: none;
            box-shadow: 0 5px 15px rgba(214, 51, 132, 0.2);
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

        thead {
            background-color: #f8bbd0;
        }

        .table th {
            color: #9c2760;
        }
    </style>

</head>

<body class="container mt-5">

    <h2 class="mb-4">
        👤 Daftar Pelanggan
    </h2>


    <div class="mb-4">

        <a href="{{ route('pelanggan.create') }}" 
           class="btn btn-pink">
            + Tambah Pelanggan
        </a>


        <a href="/" 
           class="btn btn-secondary">
            ← Dashboard
        </a>

    </div>


    @if(session('sukses'))

        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>

    @endif



    <div class="card p-4">


        <table class="table table-bordered table-hover">


            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>

            </thead>



            <tbody>


            @foreach($pelanggan as $no => $p)

                <tr>

                    <td>{{ $no+1 }}</td>

                    <td>{{ $p->nama }}</td>

                    <td>{{ $p->telepon }}</td>

                    <td>{{ $p->alamat }}</td>


                    <td>


                        <a href="{{ route('pelanggan.edit',$p->id) }}"
                           class="btn btn-warning btn-sm">

                           ✏️ Edit

                        </a>



                        <form action="{{ route('pelanggan.destroy',$p->id) }}"
                              method="POST"
                              class="d-inline">


                            @csrf
                            @method('DELETE')


                            <button 
                              onclick="return confirm('Yakin hapus?')"
                              class="btn btn-danger btn-sm">

                              🗑 Hapus

                            </button>


                        </form>


                    </td>


                </tr>


            @endforeach



            @if($pelanggan->isEmpty())

                <tr>

                    <td colspan="5" class="text-center">

                        Belum ada data pelanggan

                    </td>

                </tr>

            @endif


            </tbody>


        </table>


    </div>



</body>
</html>