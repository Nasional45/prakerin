@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kasus</div>

                <div class="card-body">
                <form action="{{route('kasus.update', $kasus->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="row">
                            <div class="col">
                                @livewire('livewire',['selectedRw'=>$kasus->id_rw,'selectedDesa'=>$kasus->rw->id_desa,
                                            'selectedDesa'=>$kasus->rw->desa->id_kecamatan,
                                            'selectedKota'=>$kasus->rw->desa->kecamatan->id_kota,
                                            'selectedProvinsi'=>$kasus->rw->desa->kecamatan->kota->id_provinsi])
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Reaktif</label>
                                    <input type="text" name="reaktif" class="form-control" value="{{$kasus->reaktif}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Positif</label>
                                    <input type="text" name="positif" class="form-control" value="{{$kasus->positif}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Sembuh</label>
                                    <input type="text" name="sembuh" class="form-control" value="{{$kasus->sembuh}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Meninggal</label>
                                    <input type="text" name="meninggal" class="form-control" value="{{$kasus->meninggal}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" value="{{$kasus->tanggal}}" required>
                                </div>
                            </div>
                        </div>
                     <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection