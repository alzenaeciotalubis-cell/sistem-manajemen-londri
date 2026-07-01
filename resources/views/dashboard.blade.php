@extends('layouts.app')
@section('isi')

    <div class="navbar-custom">
        <div>
            <h3>Dashboard Admin</h3>
            <p>Kelola layanan laundry Anda dengan mudah dan cepat.</p>
        </div>
        <div class="profile">
            <i class="fas fa-bell"></i>
            <div class="avatar">AD</div>
        </div>
    </div>

    <div class="row card-dashboard">
        <div class="col-md-4">
            <div class="stat-card card1">
                <h6>Pendapatan Bulan Ini</h6>
                <h2>Rp108.000</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card card2">
                <h6>Pendapatan Bersih</h6>
                <h2>Rp6.276.327</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card card3">
                <h6>Total Keuntungan</h6>
                <h2>Rp6.276.327</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="content-box">
                <h4 class="mb-4">Grafik Pendapatan</h4>
                <canvas id="pendapatanChart" height="110"></canvas>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="content-box">
                <h4 class="mb-4">Performa Transaksi</h4>
                <canvas id="statusChart"></canvas>
            </div>
        </div>
    </div>

    <div class="content-box">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Transaksi Terbaru</h4>
            <button class="btn btn-success">Lihat Semua</button>
        </div>
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Paket</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Zena</td>
                    <td>Cuci Kering</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>Rp50.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rai</td>
                    <td>Cuci Setrika</td>
                    <td><span class="badge bg-warning text-dark">Diproses</span></td>
                    <td>Rp75.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Gabi</td>
                    <td>Setrika</td>
                    <td><span class="badge bg-primary">Diambil</span></td>
                    <td>Rp40.000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ayu</td>
                    <td>Express</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>Rp90.000</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@push('skrip')
<script>
const ctx = document.getElementById('pendapatanChart');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
        datasets: [{
            label: 'Pendapatan',
            data: [10,20,18,30,45,60],
            borderColor: '#0b7f62',
            backgroundColor: 'rgba(11,127,98,.15)',
            fill: true,
            tension: .4
        }]
    }
});

const pie = document.getElementById('statusChart');
new Chart(pie, {
    type: 'doughnut',
    data: {
        labels: ['Selesai','Diproses','Diambil'],
        datasets: [{
            data: [60,25,15],
            backgroundColor: ['#0b7f62','#ffc107','#0d6efd']
        }]
    }
});
</script>
@endpush
