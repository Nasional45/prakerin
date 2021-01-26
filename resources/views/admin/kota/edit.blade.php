@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kota</div>

                <div class="card-body">
                <form action="{{route('kota.update', $kota->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                <label for="">Pilih Provinsi</label>
               <select name="id_provinsi" class="form-control">
               @foreach($provinsi as $data)
               <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
               @endforeach
               </select>
               </div>
               <div class="form-group">
               <label for="">Kode Kota</label>
               <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" required>
               </div>
               <div class="form-group">
               <label for="">Nama Kota</label>
               <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" required>
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