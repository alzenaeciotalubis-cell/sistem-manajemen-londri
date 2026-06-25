<!DOCTYPE html>
<html>
<head>
    <title>Menu Transaksi Laundry</title>
<style>
    body{
        font-family: Arial, sans-serif;
        background:#fff5f8;
        margin:0;
        padding:30px;
    }
    .container{
        max-width:900px;
        margin:auto;
        background:white;
        padding:30px;
        border-radius:15px;
        box-shadow:0 3px 15px rgba(255,105,180,0.2);
    }
    h1{
        text-align:center;
        color:#ff4fa3;
    }
    label{
        display:block;
        margin-top:15px;
        margin-bottom:8px;
        font-weight:bold;
        color:#ff4fa3;
    }
    input, select{
        width:100%;
        padding:12px;
        border:1px solid #ffc0cb;
        border-radius:8px;
        box-sizing:border-box;
    }
    .btn{
        background:#ff69b4;
        color:white;
        border:none;
        padding:12px 20px;
        border-radius:8px;
        cursor:pointer;
        margin-top:20px;
    }
    .btn:hover{
        background:#ff4fa3;
    }
</style>
</head>
<body>
<div class="container">
<h1>Menu Transaksi Laundry</h1>
<form method="POST" action="/transaksi">
    @csrf
    <label>Nama Pelanggan</label>
    <input type="text" name="nama" required>
    <label>Jenis Layanan</label>
    <select name="layanan" id="layanan">
        <option value="Cuci Kering">Cuci Kering</option>
        <option value="Cuci Setrika">Cuci Setrika</option>
        <option value="Express">Express</option>
    </select>
    <label>Berat Laundry (Kg)</label>
    <input type="number" name="berat" id="berat" required>
    <label>Status Laundry</label>
    <select name="status">
        <option value="Proses">Proses</option>
        <option value="Selesai">Selesai</option>
        <option value="Sudah Diambil">Sudah Diambil</option>
    </select>
    <label>Total Harga</label>
    <input type="text" name="total" id="total" readonly>
    <button type="button" class="btn" onclick="hitungHarga()">
        Hitung Harga
    </button>
    <button type="submit" class="btn">
        Simpan Transaksi
    </button>
</form>
</div>
<script>
function hitungHarga(){
    let berat = document.getElementById('berat').value;
    let layanan = document.getElementById('layanan').value;
    let harga = 0;
    if(layanan == 'Cuci Kering'){
        harga = 5000;
    }else if(layanan == 'Cuci Setrika'){
        harga = 7000;
    }else{
        harga = 10000;
    }
    let total = berat * harga;
    document.getElementById('total').value =
        'Rp ' + total.toLocaleString('id-ID');
}
</script>
</body>
</html>
