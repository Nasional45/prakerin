@extends('layouts.admin')
@section('content')
<div class="container">
        <div class="col-md-12">
            <div class ="card">
               <div class ="card-header">
               Tambah Data Rw
               </div>
               <div class="card-body">
               <form action="{{route('rw.store')}}" method="post">
               @csrf
               <div class="form-group">
               <label for="">Pilih Desa</label>
               <select name="id_desa" class="form-control">
               @foreach($desa as $data)
               <option value="{{$data->id}}">{{$data->nama_desa}}</option>
               @endforeach
               </select>
               </div>
               <div class="form-group">
               <label for="">Rw</label>
               <input type="text" name="nama_rw" class="form-control" required>
               @if($errors->has('nama_rw'))
               <span class="text-danger">{{ $errors->first('nama_rw')}}</span>
               @endif
               </div>
               <button type="submit" class="btn btn-primary btn-black">Simpan</button>
               </div>
               </form>
</div>
</div>
</div>
</div>
</div>
@endsection