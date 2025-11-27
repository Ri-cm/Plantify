@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="container-fluid py-4 dashboard-bg">

    {{-- HEADER --}}
    <div class="text-center mb-5" data-aos="fade-down">
        <img src="https://cdn-icons-png.flaticon.com/512/2906/2906270.png" 
             width="110" class="mb-3 header-icon animate-float">
        <h2 class="fw-bold mb-1 display-6">Dashboard Plantify</h2>
        <p class="text-muted lead">Pantau perkembangan tanaman dan kategori dengan visualisasi modern</p>
    </div>

    {{-- STATISTICS --}}
    <div class="row g-4 mb-5">

        <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card shadow stat-card glass-card text-center p-4 position-relative">
                <img src="https://cdn-icons-png.flaticon.com/512/765/765612.png" class="deco-img">
                <div class="icon-wrapper bg-success">
                    <i class="fas fa-seedling"></i>
                </div>
                <h5 class="fw-semibold mt-3">Total Tanaman</h5>
                <p class="stat-value">{{ $totalTanaman }}</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="card shadow stat-card glass-card text-center p-4 position-relative">
                <img src="https://cdn-icons-png.flaticon.com/512/4024/4024425.png" class="deco-img">
                <div class="icon-wrapper bg-primary">
                    <i class="fas fa-list-alt"></i>
                </div>
                <h5 class="fw-semibold mt-3">Total Kategori</h5>
                <p class="stat-value">{{ $totalKategori }}</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card shadow stat-card glass-card text-center p-4 position-relative">
                <img src="https://cdn-icons-png.flaticon.com/512/2906/2906206.png" class="deco-img">
                <div class="icon-wrapper bg-warning">
                    <i class="fas fa-leaf"></i>
                </div>
                <h5 class="fw-semibold mt-3">Total Stok Tanaman</h5>
                <p class="stat-value">{{ $totalStok }}</p>
            </div>
        </div>

    </div>


    {{-- PIE CHART --}}
    <div class="card shadow chart-card glass-card p-4 mb-4" data-aos="zoom-in">
        <div class="d-flex justify-content-center mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/3659/3659898.png" width="60" class="chart-icon">
        </div>
        <h5 class="fw-bold mb-3 text-center chart-title">Jumlah Tanaman per Kategori</h5>
        <div class="chart-wrapper">
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    {{-- BAR CHART --}}
    <div class="card shadow chart-card glass-card p-4 mb-4" data-aos="zoom-in-up">
        <div class="d-flex justify-content-center mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149101.png" width="60" class="chart-icon">
        </div>
        <h5 class="fw-bold mb-3 text-center chart-title">Total Stok per Kategori</h5>
        <div class="chart-wrapper">
            <canvas id="barChart"></canvas>
        </div>
    </div>

</div>


{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const kategori = @json($kategori);
const jumlah   = @json($jumlah);
const stok     = @json($stokKategori);

// PIE CHART
new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
        labels: kategori,
        datasets: [{
            data: jumlah,
            backgroundColor: [
                '#81c784','#66bb6a','#43a047','#2e7d32','#1b5e20'
            ],
            borderWidth: 0
        }]
    },
    options: {
        maintainAspectRatio: false,
        plugins: { legend: { position: 'bottom' } }
    }
});

// BAR CHART
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: kategori,
        datasets: [{
            label: 'Total Stok',
            data: stok,
            backgroundColor: '#43a047',
            borderRadius: 8,
        }]
    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
        scales: { 
            y: { beginAtZero: true } 
        },
        plugins: { 
            legend: { display: false } 
        }
    }
});
</script>

@endsection
