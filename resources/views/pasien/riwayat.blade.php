@extends('layouts.app')

@section('content')
<div class="container-fluid px-5">
    <div class="d-flex justify-content-between align-items-center mb-5 py-4">
        <h1 class="h2 font-weight-600 text-dark">Riwayat Pemeriksaan Pasien</h1>
        <a href="{{ route('pasien.periksa') }}" class="btn btn-primary px-4 py-3 shadow-sm">
            <i class="fas fa-plus-circle mr-2"></i> Pemeriksaan Baru
        </a>
    </div>

    <div class="card shadow-lg rounded-xl border-0">
        <div class="card-header bg-primary-gradient py-4 rounded-top-xl">
            <h5 class="m-0 font-weight-600 text-white">Daftar Riwayat Medis</h5>
        </div>
        <div class="card-body p-4">
            @if($riwayat->isEmpty())
                <div class="alert alert-light-primary text-center rounded-lg border-3 border-primary p-5">
                    <i class="fas fa-file-medical fa-3x text-primary mb-4"></i>
                    <h3 class="h4 font-weight-600 text-dark mb-3">Riwayat Pemeriksaan Kosong</h3>
                    <p class="text-secondary mb-4">Mulai lakukan pemeriksaan kesehatan Anda sekarang</p>
                    <a href="{{ route('pasien.periksa') }}" class="btn btn-primary px-5 py-3">
                        <i class="fas fa-plus mr-2"></i>Mulai Pemeriksaan
                    </a>
                </div>
            @else
                <div class="table-responsive rounded-lg">
                    <table class="table table-hover table-borderless" id="riwayatTable">
                        <thead class="bg-primary-soft">
                            <tr>
                                <th class="text-center border-0 rounded-start">No</th>
                                <th class="border-0">Tanggal</th>
                                <th class="border-0">Dokter</th>
                                <th class="border-0">Keluhan</th>
                                <th class="border-0">Status</th>
                                <th class="text-center border-0 rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($riwayat as $index => $periksa)
                            <tr class="bg-hover-light-primary">
                                <td class="text-center font-weight-600">{{ $index + 1 }}</td>
                                <td class="text-dark">{{ $periksa->tgl_periksa->format('d M Y') }}</td>
                                <td class="text-dark">{{ $periksa->dokter->nama }}</td>
                                <td class="text-secondary">{{ Str::limit($periksa->keluhan, 50) }}</td>
                                <td>
                                    <span class="badge badge-pill py-2 px-3 status-badge status-{{ Str::slug($periksa->status) }}">
                                        {{ $periksa->status }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('pasien.periksa.detail', $periksa->id) }}" 
                                       class="btn btn-outline-primary btn-sm px-4 rounded-pill">
                                        <i class="fas fa-eye mr-2"></i>Detail
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>

@push('styles')
<style>
    :root {
        --primary-color: #151d2f;
        --secondary-color: #2d3a5e;
    }

    .bg-primary-gradient {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color)) !important;
    }

    .btn-primary {
        background-color: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(21, 29, 47, 0.3);
    }

    .bg-primary-soft {
        background-color: rgba(21, 29, 47, 0.05) !important;
    }

    .bg-hover-light-primary:hover {
        background-color: rgba(21, 29, 47, 0.03) !important;
    }

    .status-badge {
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }

    .status-belum-diperiksa {
        background-color: #ffedd5;
        color: #ea580c;
    }

    .status-selesai {
        background-color: #dcfce7;
        color: #16a34a;
    }

    .status-dalam-proses {
        background-color: #dbeafe;
        color: #2563eb;
    }

    .rounded-xl {
        border-radius: 1.5rem !important;
    }

    .rounded-top-xl {
        border-top-left-radius: 1.5rem !important;
        border-top-right-radius: 1.5rem !important;
    }

    .rounded-pill {
        border-radius: 50px !important;
    }

    .table-borderless th {
        font-weight: 600;
        color: var(--primary-color) !important;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
    }

    .shadow-lg {
        box-shadow: 0 8px 30px rgba(21, 29, 47, 0.1) !important;
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        $('#riwayatTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
            },
            "dom": '<"row"<"col-md-6"l><"col-md-6"f>>rt<"row"<"col-md-6"i><"col-md-6"p>>',
            "columnDefs": [
                { "orderable": false, "targets": [0, 5] }
            ],
            "order": [[1, 'desc']],
            "pageLength": 10,
            "drawCallback": function(settings) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
    });
</script>
@endpush
@endsection