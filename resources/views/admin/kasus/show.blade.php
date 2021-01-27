@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Rw</div>
                <div class="card-body">
                    <div class="form-group">
                    <label>Rw</label>
                    <input type="text" name="id_rw" value="{{$kasus->rw->nama_rw}}" class="form-control" readonly>
                    <div class="form-group">
                    <label>Positif</label>
                    <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <label>Sembuh</label>
                    <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <label>Meninggal</label>
                    <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" readonly>
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