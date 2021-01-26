@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Desa</div>
                <div class="card-body">
                    <div class="form-group">
                    <label>Nama Kecamatan</label>
                    <input type="text" name="id_kecamatan" value="{{$desa->kecamatan->nama_kecamatan}}" class="form-control" readonly>
                    <label>Nama Kecamatan</label>
                    <input type="text" name="nama_desa" value="{{$desa->nama_desa}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection 