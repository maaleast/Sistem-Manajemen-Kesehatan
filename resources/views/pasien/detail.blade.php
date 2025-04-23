@extends('layouts.app')

@section('content')
<div class="container-fluid px-lg-4">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="text-blue mb-0">Detail Konsultasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('pasien.riwayat') }}" class="text-blue">Riwayat</a></li>
                    <li class="breadcrumb-item active text-blue-50" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('pasien.riwayat') }}" class="btn btn-light rounded-pill px-4">
            <i class="fas fa-chevron-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card glass-card border-0 overflow-hidden">
        <div class="card-header bg-gradient-primary py-4">
            <h3 class="mb-0 text-white"><i class="fas fa-file-medical mr-2"></i> ID Konsultasi: #{{ $periksa->id }}</h3>
        </div>
        <div class="card-body p-4">
            <div class="row g-4">
                <!-- Informasi Utama -->
                <div class="col-12">
                    <div class="info-section">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-item">
                                    <h6 class="text-primary"><i class="fas fa-calendar-check mr-2"></i>Tanggal</h6>
                                    <p class="text-white">{{ $periksa->tgl_periksa->format('d M Y H:i') }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <h6 class="text-primary"><i class="fas fa-user-md mr-2"></i>Dokter</h6>
                                    <p class="text-white">{{ $periksa->dokter->nama }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <h6 class="text-primary"><i class="fas fa-info-circle mr-2"></i>Status</h6>
                                    <span class="badge status-badge bg-{{ $periksa->status_color }}">
                                        {{ $periksa->status }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Keluhan & Catatan -->
                <div class="col-md-6">
                    <div class="glass-card-inner h-100">
                        <h5 class="section-title"><i class="fas fa-comment-medical mr-2"></i>Keluhan Pasien</h5>
                        <div class="content-box">
                            {!! nl2br(e($periksa->keluhan)) !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="glass-card-inner h-100">
                        <h5 class="section-title"><i class="fas fa-clipboard mr-2"></i>Catatan Dokter</h5>
                        @if($periksa->catatan)
                            <div class="content-box">
                                {!! nl2br(e($periksa->catatan)) !!}
                            </div>
                        @else
                            <div class="empty-state">
                                <i class="fas fa-comment-slash text-muted"></i>
                                <p class="text-muted mt-2">Belum ada catatan dokter</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Biaya & Resep -->
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="glass-card-inner">
                                <h5 class="section-title"><i class="fas fa-receipt mr-2"></i>Ringkasan Biaya</h5>
                                <div class="price-summary">
                                    <div class="price-item">
                                        <span>Biaya Konsultasi</span>
                                        <span>Rp {{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</span>
                                    </div>
                                    @if($periksa->obats->isNotEmpty())
                                    <div class="price-item">
                                        <span>Biaya Obat</span>
                                        <span>Rp {{ number_format($periksa->obats->sum('harga'), 0, ',', '.') }}</span>
                                    </div>
                                    <div class="price-total">
                                        <span>Total</span>
                                        <span>Rp {{ number_format($periksa->biaya_periksa + $periksa->obats->sum('harga'), 0, ',', '.') }}</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if($periksa->obats->isNotEmpty())
                        <div class="col-lg-8">
                            <div class="glass-card-inner">
                                <h5 class="section-title"><i class="fas fa-prescription mr-2"></i>Resep Obat</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Obat</th>
                                                <th>Kemasan</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($periksa->obats as $obat)
                                            <tr>
                                                <td>{{ $obat->nama_obat }}</td>
                                                <td>{{ $obat->kemasan }}</td>
                                                <td>Rp {{ number_format($obat->harga, 0, ',', '.') }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .glass-card {
        background: rgba(21, 29, 47, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .glass-card-inner {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 0.75rem;
        padding: 1.5rem;
        height: 100%;
    }

    .bg-gradient-primary {
        background: linear-gradient(45deg, #151D2F, #1A2746);
    }

    .section-title {
        color: #6c7ae0;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }

    .content-box {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 0.5rem;
        padding: 1rem;
        color: #e0e0e0;
        line-height: 1.6;
    }

    .price-summary {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 0.5rem;
        padding: 1rem;
    }

    .price-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        color: #e0e0e0;
    }

    .price-total {
        display: flex;
        justify-content: space-between;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-weight: 600;
        color: #6c7ae0;
    }

    .status-badge {
        font-size: 0.85rem;
        padding: 0.35rem 1rem;
        border-radius: 1rem;
    }
</style>
@endpush
@endsection