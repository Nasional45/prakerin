@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Rw</div>
                <div class="card-body">
                    <div class="form-group">
                    <label>Nama Desa</label>
                    <input type="text" name="id_desa" value="{{$rw->desa->nama_desa}}" class="form-control" readonly>
                    <label>Rw</label>
                    <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" readonly>
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