@extends('layouts.app')

@section('content')
<div class="container-fluid px-lg-4">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="display-5 fw-bold text-dark mb-0">Formulir Pemeriksaan Digital</h1>
            <p class="text-muted mb-0">Isi formulir dengan lengkap untuk pemeriksaan lebih cepat</p>
        </div>
        <a href="{{ route('pasien.riwayat') }}" class="btn btn-outline-primary rounded-pill px-4 py-2">
            <i class="fas fa-history me-2"></i>Lihat Riwayat
        </a>
    </div>

    <div class="card border-0 neo-shadow">
        <div class="card-header bg-gradient-primary text-white py-4 rounded-top">
            <h3 class="mb-0 fw-semibold"><i class="fas fa-file-medical me-2"></i>Permohonan Pemeriksaan Baru</h3>
        </div>
        <div class="card-body p-5">
            @if(session('success'))
                <div class="alert alert-success border-0 d-flex align-items-center shadow-sm">
                    <i class="fas fa-check-circle fa-2x me-3"></i>
                    <div class="flex-grow-1">
                        <h5 class="mb-1">Berhasil Dikirim!</h5>
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('pasien.periksa.store') }}" method="POST" class="form-validate">
                @csrf
                <div class="row g-4 mb-4">
                    <div class="col-xl-6">
                        <div class="form-floating">
                            <input type="text" class="form-control bg-light" id="nama_pasien" 
                                   value="{{ auth()->user()->nama }}" disabled>
                            <label for="nama_pasien" class="text-muted">
                                <i class="fas fa-user me-2"></i>Nama Pasien
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-floating">
                            <select name="id_dokter" id="id_dokter" class="form-select select-dokter" required>
                                <option value="">Pilih Dokter...</option>
                                @foreach($dokters as $dokter)
                                    <option value="{{ $dokter->id }}">{{ $dokter->nama }} {{ $dokter->spesialis }}</option>
                                @endforeach
                            </select>
                            <label for="id_dokter" class="text-muted">
                                <i class="fas fa-user-md me-2"></i>Pilih Dokter
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-5">
                    <textarea name="keluhan" id="keluhan" class="form-control bg-light" 
                              style="height: 150px" placeholder="Deskripsi keluhan" required></textarea>
                    <label for="keluhan" class="text-muted">
                        <i class="fas fa-comment-medical me-2"></i>Deskripsi Keluhan
                    </label>
                    <div class="form-text">Jelaskan keluhan Anda secara detail (minimal 100 karakter)</div>
                </div>

                <div class="d-flex justify-content-end gap-3">
                    <button type="reset" class="btn btn-lg btn-outline-primary rounded-pill px-5">
                        <i class="fas fa-undo me-2"></i>Reset
                    </button>
                    <button type="submit" class="btn btn-lg btn-primary rounded-pill px-5">
                        <span class="submit-text">Ajukan Sekarang</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
<style>
    :root {
        --primary-color: #151D2F;
        --gradient-primary: linear-gradient(135deg, #151D2F 0%, #2A3A5E 100%);
    }
    
    .neo-shadow {
        box-shadow: 0 1rem 2.5rem rgba(21,29,47,0.1);
        border-radius: 1.5rem;
        overflow: hidden;
    }
    
    .select-dokter .select2-selection {
        height: 58px;
        border: 1px solid #dee2e6;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
    }
    
    .form-validate .form-control {
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
    }
    
    .form-validate .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(21,29,47,0.1);
    }
    
    .bg-gradient-primary {
        background: var(--gradient-primary);
    }
    
    .btn-primary {
        background: var(--primary-color);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(21,29,47,0.2);
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        $('.select-dokter').select2({
            theme: "bootstrap-5",
            placeholder: "Pilih Dokter...",
            minimumResultsForSearch: 3,
            templateResult: formatDokter,
            templateSelection: formatDokter
        });
    });

    function formatDokter(dokter) {
        if (!dokter.id) return dokter.text;
        return $('<div class="d-flex align-items-center"><div class="avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"><i class="fas fa-user-md"></i></div><span>' + dokter.text + '</span></div>');
    }
</script>
@endpush
@endsection