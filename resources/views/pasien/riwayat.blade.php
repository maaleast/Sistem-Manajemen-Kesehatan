@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Riwayat Periksa</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat Pemeriksaan</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Periksa</th>
                            <th>Dokter</th>
                            <th>Tanggal Periksa</th>
                            <th>Catatan</th>
                            <th>Obat</th>
                            <th>Biaya Periksa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>P003</td>
                            <td>Anti</td>
                            <td>24-03-2025</td>
                            <td>Perlu banyak istirahat</td>
                            <td>Obat tidur</td>
                            <td>170000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>P002</td>
                            <td>Anti</td>
                            <td>26-03-2025</td>
                            <td>Perlu banyak olahraga</td>
                            <td>Vitamin</td>
                            <td>200000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection