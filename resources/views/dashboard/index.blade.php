@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<h2>Dashboard Plantify</h2>

<div style="display:flex; gap:20px; margin-bottom:30px;">

    <div class="card" style="flex:1; text-align:center;">
        <h3>Total Tanaman</h3>
        <p style="font-size:28px; font-weight:bold; color:#2e7d32;">{{ $totalTanaman }}</p>
    </div>

    <div class="card" style="flex:1; text-align:center;">
        <h3>Total Kategori</h3>
        <p style="font-size:28px; font-weight:bold; color:#2e7d32;">{{ $totalKategori }}</p>
    </div>

    <div class="card" style="flex:1; text-align:center;">
        <h3>Banyaknya Tanaman</h3>
        <p style="font-size:28px; font-weight:bold; color:#2e7d32;">{{ $totalStok }}</p>
    </div>

</div>

<div class="card" style="padding:20px; margin-bottom:20px;">
    <h3>Jumlah Tanaman per Kategori</h3>
    <canvas id="pieChart"></canvas>
</div>

<div class="card" style="padding:20px;">
    <h3>Total Stok per Kategori</h3>
    <canvas id="barChart"></canvas>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Data dari controller (Laravel ke JavaScript)
const kategori = @json($kategori);
const jumlah = @json($jumlah);
const stok = @json($stokKategori);

// PIE CHART (Jumlah tanaman per kategori)
new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
        labels: kategori,
        datasets: [{
            data: jumlah,
            backgroundColor: ['#66bb6a', '#43a047', '#2e7d32', '#1b5e20', '#81c784']
        }]
    }
});

// BAR CHART (Stok tanaman per kategori)
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: kategori,
        datasets: [{
            label: 'Total Stok',
            data: stok,
            backgroundColor: '#4caf50'
        }]
    }
});
</script>

@endsection
