@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Desa</div>

                <div class="card-body">
                <form action="{{route('desa.update', $desa->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                <label for="">Pilih Kecamatan</label>
               <select name="id_kecamatan" class="form-control">
               @foreach($kecamatan as $data)
               <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
               @endforeach
               </select>
               </div>
               <div class="form-group">
               <label for="">Nama Desa</label>
               <input type="text" name="nama_desa" value="{{$desa->nama_desa}}" class="form-control" required>
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