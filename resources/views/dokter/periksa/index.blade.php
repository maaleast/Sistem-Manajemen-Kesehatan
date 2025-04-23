@extends('layouts.app')

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="h4 font-weight-600 text-dark mb-0">
                <i class="fas fa-clipboard-list text-primary mr-2"></i>Daftar Pemeriksaan
            </h2>
            <p class="text-muted mb-0">Manajemen data pemeriksaan pasien</p>
        </div>
        <div class="d-flex">
            <div class="input-group mr-3" style="width: 300px;">
                <span class="input-group-text bg-light border-end-0">
                    <i class="fas fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-start-0" id="searchInput" placeholder="Cari pasien...">
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-lg shadow-sm">
            <div class="d-flex align-items-center">
                <i class="fas fa-check-circle mr-3"></i>
                <div>{{ session('success') }}</div>
                <button type="button" class="close ml-auto" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            </div>
        </div>
    @endif

    <div class="card shadow-lg rounded-xl border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="periksaTable">
                    <thead class="bg-primary-soft text-dark">
                        <tr>
                            <th class="border-0 font-weight-600">No</th>
                            <th class="border-0 font-weight-600">Pasien</th>
                            <th class="border-0 font-weight-600">Tanggal</th>
                            <th class="border-0 font-weight-600">Catatan</th>
                            <th class="border-0 font-weight-600">Biaya</th>
                            <th class="border-0 font-weight-600 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periksas as $index => $periksa)
                            <tr class="bg-hover-light-primary">
                                <td class="align-middle">{{ $index + 1 }}</td>
                                <td class="align-middle font-weight-500">{{ $periksa->pasien->nama }}</td>
                                <td class="align-middle">{{ \Carbon\Carbon::parse($periksa->tgl_periksa)->format('d M Y') }}</td>
                                <td class="align-middle text-truncate" style="max-width: 200px;" title="{{ $periksa->catatan }}">
                                    {{ $periksa->catatan }}
                                </td>
                                <td class="align-middle text-success font-weight-600">
                                    Rp{{ number_format($periksa->biaya_periksa, 0, ',', '.') }}
                                </td>
                                <td class="align-middle text-right">
                                    <a href="{{ route('dokter.periksa.edit', $periksa->id) }}" 
                                       class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1">
                                        <i class="fas fa-pencil-alt mr-1"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .bg-primary-soft {
        background-color: rgba(21, 29, 47, 0.05) !important;
    }
    
    .bg-hover-light-primary:hover {
        background-color: rgba(21, 29, 47, 0.03) !important;
    }
    
    .table-hover tbody tr {
        transition: all 0.2s ease;
    }
    
    .rounded-xl {
        border-radius: 1rem !important;
    }
    
    .card {
        border: none;
    }
    
    .alert {
        border-left: 4px solid #28a745;
    }
    
    .text-truncate {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .btn-outline-primary {
        border-color: #151d2f;
        color: #151d2f;
        transition: all 0.3s ease;
    }
    
    .btn-outline-primary:hover {
        background-color: #151d2f;
        color: white;
    }
</style>
@endpush

@push('scripts')
<script>
    document.getElementById("searchInput").addEventListener("keyup", function() {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll("#periksaTable tbody tr");
        
        rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });
</script>
@endpush
@endsection