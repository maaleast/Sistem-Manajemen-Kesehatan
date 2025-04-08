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
                <h3 class="card-title">Form Periksa</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea class="form-control" id="keluhan" rows="3" placeholder="Masukkan keluhan"></textarea>
                </div>
                <div class="form-group">
                    <label for="dokter">Pilih Dokter</label>
                    <select class="form-control" id="dokter">
                        <option>Dr. Andi</option>
                        <option>Dr. Budi</option>
                        <option>Dr. Cinta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Periksa</label>
                    <input type="date" class="form-control" id="tanggal">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection