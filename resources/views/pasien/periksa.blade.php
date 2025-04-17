@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Formulir Pemeriksaan</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ route('pasien.periksa.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_pasien" class="font-weight-bold">Nama Pasien</label>
                    <input type="text" id="nama_pasien" class="form-control" value="{{ auth()->user()->nama }}" disabled>
                </div>

                <div class="form-group">
                    <label for="id_dokter" class="font-weight-bold">Pilih Dokter</label>
                    <select name="id_dokter" id="id_dokter" class="form-control select2" required>
                        <option value="">-- Pilih Dokter --</option>
                        @foreach($dokters as $dokter)
                            <option value="{{ $dokter->id }}">{{ $dokter->nama }} - {{ $dokter->spesialis }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="keluhan" class="font-weight-bold">Keluhan</label>
                    <textarea name="keluhan" id="keluhan" class="form-control" rows="5" 
                              placeholder="Jelaskan keluhan Anda secara detail..." required></textarea>
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="fas fa-save mr-2"></i>Simpan Pemeriksaan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container .select2-selection--single {
        height: 38px;
        padding-top: 5px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 36px;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "-- Pilih Dokter --",
            allowClear: true
        });
    });
</script>
@endpush