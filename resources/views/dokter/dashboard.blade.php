@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @php
            $cards = [
                [
                    'title' => 'Pasien Hari Ini',
                    'color' => 'bg-gradient-primary',
                    'icon' => 'fas fa-user-injured',
                    'value' => '12',
                    'footer' => '3 pasien menunggu'
                ],
                [
                    'title' => 'Stok Obat',
                    'color' => 'bg-gradient-success',
                    'icon' => 'fas fa-pills',
                    'value' => '48',
                    'footer' => '5 obat hampir habis'
                ],
                [
                    'title' => 'Jadwal Konsultasi',
                    'color' => 'bg-gradient-info',
                    'icon' => 'fas fa-calendar-check',
                    'value' => '7',
                    'footer' => '2 konsultasi online'
                ]
            ];
        @endphp

        @foreach ($cards as $card)
            <div class="col-md-4 mb-4">
                <div class="card text-white {{ $card['color'] }} shadow-lg">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="card-title mb-1">{{ $card['title'] }}</h5>
                                <h2 class="mb-0">{{ $card['value'] }}</h2>
                            </div>
                            <i class="{{ $card['icon'] }} fa-3x opacity-50"></i>
                        </div>
                        <hr class="bg-white my-2">
                        <small class="opacity-75">{{ $card['footer'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Statistik Kunjungan Pasien (Minggu Ini)</h5>
                </div>
                <div class="card-body">
                    <canvas id="patientChart" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Resep Obat Terbaru</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Nama Pasien</th>
                                    <th>Obat</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Budi Santoso</td>
                                    <td>Amoxicillin</td>
                                    <td>12 Apr 2025</td>
                                </tr>
                                <tr>
                                    <td>Ani Wijaya</td>
                                    <td>Paracetamol</td>
                                    <td>11 Apr 2025</td>
                                </tr>
                                <tr>
                                    <td>Rina Melati</td>
                                    <td>Vitamin C</td>
                                    <td>10 Apr 2025</td>
                                </tr>
                                <tr>
                                    <td>Dodi Pratama</td>
                                    <td>Omeprazole</td>
                                    <td>9 Apr 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Patient Visit Chart
    const ctx = document.getElementById('patientChart').getContext('2d');
    const patientChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            datasets: [{
                label: 'Jumlah Kunjungan',
                data: [5, 7, 10, 8, 12, 6, 3],
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 2
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
@endsection

@endsection