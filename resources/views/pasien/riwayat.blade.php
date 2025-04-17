@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Riwayat Pemeriksaan</h4>
        </div>
        <div class="card-body">
            @if($riwayat->isEmpty())
                <div class="alert alert-info">
                    <i class="fas fa-info-circle mr-2"></i> Anda belum memiliki riwayat pemeriksaan.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Dokter</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($riwayat as $index => $periksa)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $periksa->dokter->nama }}</td>
                                    <td>{{ $periksa->tgl_periksa->isoFormat('LLL') }}</td>
                                    <td>
                                        @if(empty($periksa->catatan) && empty($periksa->obat))
                                            <span class="badge badge-warning p-2">
                                                <i class="fas fa-clock mr-1"></i> Belum
                                            </span>
                                        @else
                                            <span class="badge badge-success p-2">
                                                <i class="fas fa-check-circle mr-1"></i> Sudah
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pasien.periksa.detail', $periksa->id) }}" 
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye mr-1"></i> Detail
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
@endsection