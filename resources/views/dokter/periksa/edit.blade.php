@extends('layouts.app')

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="card shadow-lg rounded-xl border-0 overflow-hidden">
        <div class="card-header bg-primary-gradient py-4">
            <h4 class="m-0 font-weight-600 text-white">
                <i class="fas fa-notes-medical mr-2"></i>Pemeriksaan Pasien
            </h4>
        </div>
        <div class="card-body p-5">
            <form action="{{ route('dokter.periksa.update', $periksa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-4">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="form-label text-dark font-weight-600">Nama Pasien</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-user text-primary"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 bg-light" value="{{ $periksa->pasien->nama }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark font-weight-600">Tanggal Pemeriksaan</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-calendar text-primary"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 bg-light" value="{{ $periksa->tgl_periksa->format('d F Y') }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label text-dark font-weight-600">Keluhan Pasien</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light align-items-start pt-2">
                            <i class="fas fa-comment-medical text-primary"></i>
                        </span>
                        <textarea class="form-control border-start-0 bg-light" rows="3" readonly>{{ $periksa->keluhan }}</textarea>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label text-dark font-weight-600">Catatan Dokter <span class="text-danger">*</span></label>
                    <textarea name="catatan" class="form-control border-2" rows="5" required
                        placeholder="Masukkan diagnosis dan catatan medis...">{{ old('catatan', $periksa->catatan) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label text-dark font-weight-600">Resep Obat <span class="text-danger">*</span></label>
                    <select name="obat[]" class="form-control select2" multiple="multiple" required style="width: 100%">
                        @foreach ($obats as $obat)
                            <option value="{{ $obat->id }}" 
                                {{ $periksa->obats->contains($obat->id) ? 'selected' : '' }}
                                data-price="{{ $obat->harga }}">
                                {{ $obat->nama_obat }} - {{ $obat->kemasan }} (Rp {{ number_format($obat->harga, 0, ',', '.') }})
                            </option>
                        @endforeach
                    </select>
                    <small class="text-muted">Tekan backspace untuk menghapus pilihan</small>
                </div>

                <div class="mb-4">
                    <label class="form-label text-dark font-weight-600">Biaya Pemeriksaan <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-light">Rp</span>
                        <input type="number" name="biaya_periksa" class="form-control" 
                            value="{{ old('biaya_periksa', $periksa->biaya_periksa) }}" required>
                    </div>
                </div>

                <div class="d-flex justify-content-between pt-3">
                    <a href="{{ route('dokter.periksa.index') }}" class="btn btn-outline-secondary px-4 py-2">
                        <i class="fas fa-arrow-left mr-2"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary-gradient px-5 py-2">
                        <i class="fas fa-save mr-2 text-white"></i> <p class="text-white">Simpan Perubahan</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-selection--multiple {
        border: 2px solid #dee2e6;
        border-radius: 0.5rem;
        padding: 0.375rem 0.75rem;
        min-height: 45px;
    }
    
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #151d2f;
        border-color: #151d2f;
        color: white;
        border-radius: 0.25rem;
    }
    
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #151d2f;
    }
    
    .card {
        border: none;
    }
    
    .bg-primary-gradient {
        background: linear-gradient(45deg, #151d2f, #2d3a5e);
    }
    
    .btn-primary-gradient {
        background: linear-gradient(45deg, #151d2f, #2d3a5e);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(21, 29, 47, 0.3);
    }
    
    .form-control:focus {
        border-color: #151d2f;
        box-shadow: 0 0 0 0.25rem rgba(21, 29, 47, 0.25);
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Pilih obat...",
            allowClear: true,
            width: 'resolve'
        });
    });
</script>
@endpush
@endsection