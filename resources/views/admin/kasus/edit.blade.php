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
                <div class="form-group">
                <label for="">Pilih Rw</label>
               <select name="id_rw" class="form-control">
               @foreach($rw as $data)
               <option value="{{$data->id}}">{{$data->nama_rw}}</option>
               @endforeach
               </select>
               </div>
               <div class="form-group">
               <label for="">Positif</label>
               <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" required>
               </div>
               <div class="form-group">
               <label for="">Sembuh</label>
               <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" required>
               </div>
               <div class="form-group">
               <label for="">Meninggal</label>
               <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" required>
               </div>
               <div class="form-group">
               <label for="">Tanggal</label>
               <input type="date" name="tanggal" value="{{$kasus->tanngal}}" class="form-control" required>
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