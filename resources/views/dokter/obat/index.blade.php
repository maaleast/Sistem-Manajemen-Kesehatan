@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h4 class="text-dark-blue fw-bold mb-0">Manajemen Obat</h4>
        <button class="btn btn-primary-gradient rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="fas fa-plus me-2"></i>Tambah Obat
        </button>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Card Table -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-dark-blue text-white">
                        <tr>
                            <th class="ps-4">No</th>
                            <th>Nama Obat</th>
                            <th>Kemasan</th>
                            <th>Harga</th>
                            <th class="text-end pe-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($obat as $key => $item)
                        <tr class="border-bottom">
                            <td class="ps-4">{{ $key + 1 }}</td>
                            <td class="fw-semibold">{{ $item->nama_obat }}</td>
                            <td>{{ $item->kemasan }}</td>
                            <td class="text-success fw-semibold">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td class="text-end pe-4">
                                <!-- Edit -->
                                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 me-1" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $item->id }}">
                                    <i class="fas fa-pen fa-sm me-1"></i> Edit
                                </button>

                                <!-- Hapus -->
                                <form action="{{ route('dokter.obat.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus obat ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                        <i class="fas fa-trash fa-sm me-1"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1" aria-labelledby="editLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="{{ route('dokter.obat.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-content border-0 shadow-lg rounded-3">
                                        <div class="modal-header bg-dark-blue text-white border-0 rounded-top-3">
                                            <h5 class="modal-title">Edit Obat</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body py-4">
                                            <div class="mb-3">
                                                <label class="form-label text-secondary">Nama Obat</label>
                                                <input type="text" class="form-control rounded-3 border-2 py-2" name="nama_obat" value="{{ $item->nama_obat }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-secondary">Kemasan</label>
                                                <input type="text" class="form-control rounded-3 border-2 py-2" name="kemasan" value="{{ $item->kemasan }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label text-secondary">Harga</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light border-2 rounded-start-3">Rp</span>
                                                    <input type="number" class="form-control rounded-end-3 border-2 py-2" name="harga" value="{{ $item->harga }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                                            <button class="btn btn-primary-gradient rounded-pill px-4">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('dokter.obat.store') }}" method="POST">
            @csrf
            <div class="modal-content border-0 shadow-lg rounded-3">
                <div class="modal-header bg-dark-blue text-white border-0 rounded-top-3">
                    <h5 class="modal-title">Tambah Obat Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="mb-3">
                        <label class="form-label text-secondary">Nama Obat</label>
                        <input type="text" class="form-control rounded-3 border-2 py-2" name="nama_obat" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-secondary">Kemasan</label>
                        <input type="text" class="form-control rounded-3 border-2 py-2" name="kemasan" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-secondary">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-2 rounded-start-3">Rp</span>
                            <input type="number" class="form-control rounded-end-3 border-2 py-2" name="harga" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary-gradient rounded-pill px-4">Simpan Obat</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    :root {
        --dark-blue: #151d2f;
        --primary-gradient: linear-gradient(135deg, #151d2f 0%, #2a3a6a 100%);
    }
    
    body {
        background-color: #f8f9fa;
    }
    
    .bg-dark-blue {
        background-color: var(--dark-blue);
    }
    
    .text-dark-blue {
        color: var(--dark-blue);
    }
    
    .btn-primary-gradient {
        background: var(--primary-gradient);
        color: white;
        border: none;
        transition: all 0.3s;
    }
    
    .btn-primary-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(21, 29, 47, 0.2);
    }
    
    .card {
        border: none;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }
    
    .table th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
        padding: 1rem;
    }
    
    .table td {
        padding: 1rem;
        vertical-align: middle;
    }
    
    .form-control {
        border-color: #e0e0e0;
    }
    
    .form-control:focus {
        border-color: var(--dark-blue);
        box-shadow: 0 0 0 0.25rem rgba(21, 29, 47, 0.1);
    }
    
    .modal-content {
        overflow: hidden;
    }
    
    .rounded-4 {
        border-radius: 1rem;
    }
</style>
@endpush