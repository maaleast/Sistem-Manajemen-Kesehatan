@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Pasien</h1>
    </div>

    <!-- Row 1: 4 Cards -->
    <div class="row">
        <!-- Card 1: Perlu Periksa -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow rounded-lg bg-gradient-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Perlu Periksa</div>
                            <div class="h2 mb-0 font-weight-bold text-white">4</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-check fa-3x text-white-50"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-primary-light border-0 py-2">
                    <a href="#" class="text-white small">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Card 2: Dokter Aktif -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow rounded-lg bg-gradient-success h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Dokter Aktif</div>
                            <div class="h2 mb-0 font-weight-bold text-white">12</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-md fa-3x text-white-50"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-success-light border-0 py-2">
                    <a href="#" class="text-white small">Lihat Dokter <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Card 3: Obat Tersedia -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow rounded-lg bg-gradient-warning h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Obat Tersedia</div>
                            <div class="h2 mb-0 font-weight-bold text-white">25</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-pills fa-3x text-white-50"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-warning-light border-0 py-2">
                    <a href="#" class="text-white small">Lihat Stok <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Card 4: Kunjungan -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow rounded-lg bg-gradient-info h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Kunjungan</div>
                            <div class="h2 mb-0 font-weight-bold text-white">300</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-procedures fa-3x text-white-50"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-info-light border-0 py-2">
                    <a href="#" class="text-white small">Lihat Riwayat <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2: Charts -->
    <div class="row">
        <!-- Chart 1: Riwayat Pemeriksaan -->
        <div class="col-xl-6 col-lg-6 mb-4">
            <div class="card border-0 shadow rounded-lg h-100">
                <div class="card-header bg-white border-0 py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Pemeriksaan Bulan Ini</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="riwayatChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart 2: Aktivitas Terkini -->
        <div class="col-xl-6 col-lg-6 mb-4">
            <div class="card border-0 shadow rounded-lg h-100">
                <div class="card-header bg-white border-0 py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Aktivitas Terkini</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="aktivitasChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Konsultasi
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Pengobatan
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Pemeriksaan
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Riwayat Pemeriksaan Chart
    var ctx = document.getElementById('riwayatChart').getContext('2d');
    var riwayatChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
            datasets: [{
                label: 'Jumlah Pemeriksaan',
                data: [3, 5, 2, 6],
                backgroundColor: 'rgba(78, 115, 223, 0.5)',
                borderColor: 'rgba(78, 115, 223, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Aktivitas Terkini Chart
    var ctx2 = document.getElementById('aktivitasChart').getContext('2d');
    var aktivitasChart = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Konsultasi', 'Pengobatan', 'Pemeriksaan'],
            datasets: [{
                data: [35, 30, 35],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            cutout: '70%',
        },
    });
</script>
@endpush

@push('styles')
<style>
    .bg-gradient-primary {
        background: linear-gradient(45deg, #4e73df, #224abe);
    }
    .bg-gradient-success {
        background: linear-gradient(45deg, #1cc88a, #13855c);
    }
    .bg-gradient-warning {
        background: linear-gradient(45deg, #f6c23e, #dda20a);
    }
    .bg-gradient-info {
        background: linear-gradient(45deg, #36b9cc, #258391);
    }
    .bg-primary-light {
        background-color: rgba(78, 115, 223, 0.2);
    }
    .bg-success-light {
        background-color: rgba(28, 200, 138, 0.2);
    }
    .bg-warning-light {
        background-color: rgba(246, 194, 62, 0.2);
    }
    .bg-info-light {
        background-color: rgba(54, 185, 204, 0.2);
    }
    .rounded-lg {
        border-radius: 1rem !important;
    }
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15) !important;
    }
    .chart-area {
        position: relative;
        height: 300px;
    }
    .chart-pie {
        position: relative;
        height: 250px;
    }
</style>
@endpush
@endsection