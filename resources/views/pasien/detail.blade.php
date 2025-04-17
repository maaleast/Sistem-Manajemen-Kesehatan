@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Pemeriksaan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <th class="w-25">Dokter</th>
                            <td>{{ $periksa->dokter->nama }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Pemeriksaan</th>
                            <td>{{ $periksa->tgl_periksa->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <th>Keluhan</th>
                            <td>{{ $periksa->keluhan }}</td>
                        </tr>
                        <tr>
                            <th>Catatan Dokter</th>
                            <td>{{ $periksa->catatan ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Obat</th>
                            <td>{{ $periksa->obat ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Biaya Pemeriksaan</th>
                            <td class="font-weight-bold">Rp {{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-right mt-4">
                <a href="{{ route('pasien.riwayat') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali ke Riwayat
                </a>
            </div>
        </div>
    </div>
</div>
@endsection