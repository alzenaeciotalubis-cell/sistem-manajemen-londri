<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Tambah Transaksi Baru</title>


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


.form-control:focus,
.form-select:focus {

    border-color: #f06595;

    box-shadow: 0 0 0 0.2rem rgba(240,101,149,0.25);

}



.card {

    border-radius: 12px;
    border: none;
    box-shadow: 0 2px 8px rgba(214,51,132,0.1);

}


</style>


</head>



<body class="container mt-5 mb-5">



<h2 class="mb-4">
➕ Tambah Transaksi Baru
</h2>




<a href="{{ route('transaksi.index') }}"
class="btn btn-secondary mb-4">

← Kembali ke Daftar

</a>





<div class="card p-4">



<form action="{{ route('transaksi.store') }}" method="POST">


@csrf





<div class="mb-3">


<label class="form-label">
Nama Pelanggan
</label>



<select name="pelanggan_id"
class="form-select"
required>



<option value="">
-- Pilih Pelanggan --
</option>



@foreach($pelanggan as $p)


<option value="{{ $p->id }}">

{{ $p->nama }}

</option>


@endforeach



</select>


</div>







<div class="mb-3">


<label class="form-label">
Jenis Paket Laundry
</label>



<select name="paket_id"
class="form-select"
required>




<option value="">
-- Pilih Paket --
</option>



@foreach($paket as $p)


<option value="{{ $p->id }}">


{{ $p->nama_paket }}

- Rp {{ number_format($p->harga,0,',','.') }}/kg


</option>


@endforeach



</select>


</div>







<div class="mb-4">


<label class="form-label">
Berat Cucian (Kg)
</label>



<input type="number"
name="berat_kg"
step="0.1"
min="0.1"
class="form-control"
required>



</div>







<button type="submit"
class="btn btn-pink w-100 py-2">


💾 Simpan Transaksi


</button>




</form>




</div>





</body>

</html>