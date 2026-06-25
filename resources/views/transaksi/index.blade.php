<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Transaksi Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>

        body {
            background-color: #fff5f9;
        }

        h2 {
            color: #d63384;
            font-weight: bold;
        }

        .btn-pink {
            background-color: #f06595;
            border: none;
            color: white;
        }

        .btn-pink:hover {
            background-color: #d63384;
            color: white;
        }

        .card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 8px rgba(214,51,132,0.1);
        }

        .badge-proses {
            background-color: #ffc107;
            color: black;
        }

        .badge-selesai {
            background-color: #198754;
        }

        .badge-diambil {
            background-color: #0d6efd;
        }

    </style>

</head>


<body class="container mt-5 mb-5">



<h2 class="mb-4">
    🧾 Daftar Transaksi Laundry
</h2>



<div class="mb-4">

<a href="{{ route('transaksi.create') }}"
   class="btn btn-pink me-2">

+ Tambah Transaksi Baru

</a>


<a href="/" class="btn btn-secondary">

← Kembali ke Dashboard

</a>


</div>




@if(session('sukses'))

<div class="alert alert-success">

{{ session('sukses') }}

</div>

@endif





<div class="card p-4">


<table class="table table-hover">


<thead>

<tr>

<th>No</th>
<th>Tanggal</th>
<th>Nama Pelanggan</th>
<th>Paket</th>
<th>Berat (Kg)</th>
<th>Total Harga</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>



<tbody>



@if($transaksi->isEmpty())


<tr>

<td colspan="8" class="text-center text-muted">

Belum ada transaksi apapun

</td>

</tr>



@else



@foreach($transaksi as $no => $t)


<tr>


<td>{{ $no + 1 }}</td>


<td>
{{ $t->created_at->format('d/m/Y H:i') }}
</td>


<td>
{{ $t->pelanggan->nama ?? '-' }}
</td>


<td>
{{ $t->paket->nama_paket ?? '-' }}
</td>


<td>
{{ $t->berat_kg }} Kg
</td>


<td>
Rp {{ number_format($t->total_harga,0,',','.') }}
</td>



<td>


@if($t->status == 'proses')

<span class="badge badge-proses">
🔄 Proses
</span>


@elseif($t->status == 'selesai')


<span class="badge badge-selesai">
✅ Selesai
</span>


@else


<span class="badge badge-diambil">
📤 Diambil
</span>


@endif


</td>




<td>


<a href="{{ route('transaksi.edit',$t->id) }}"
class="btn btn-warning btn-sm">

✏️ Edit

</a>





<form action="{{ route('transaksi.destroy',$t->id) }}"
method="POST"
class="d-inline"
onsubmit="return confirm('Yakin hapus?')">


@csrf

@method('DELETE')


<button class="btn btn-danger btn-sm">

🗑️ Hapus

</button>


</form>



</td>



</tr>



@endforeach



@endif




</tbody>


</table>


</div>



</body>
</html>