@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Periksa Pasien</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pasien Perlu Diperiksa</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Tanggal Periksa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Budi Santoso</td>
                            <td>Sakit kepala</td>
                            <td>28-03-2025</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Periksa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ani Wijaya</td>
                            <td>Demam</td>
                            <td>29-03-2025</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Periksa</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection