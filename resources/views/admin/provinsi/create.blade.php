@extends('layouts.admin')
@section('content')
<div class="container">
        <div class="col-md-12">
            <div class ="card">
               <div class ="card-header">
               Tambah Data Provinsi
               </div>
               <div class="card-body">
               <form action="{{route('provinsi.store')}}" method="post">
               @csrf
               <div class="form-group">
               Kode Provinsi
               <input type="text" name="kode_provinsi" class="form-control" required>
               @if($errors->has('kode_provinsi'))
               <span class="text-danger">{{ $errors->first('kode_provinsi')}}</span>
               @endif
               </div>
               Nama Provinsi
               <input type="text" name="nama_provinsi" class="form-control" required>
               @if($errors->has('nama_provinsi'))
               <span class="text-danger">{{ $errors->first('nama_provinsi')}}</span>
               @endif
               <div class="form-group">
               <button type="submit" class="btn btn-primary btn-black">Simpan</button>
               </div>
               </form>
</div>
</div>
</div>
</div>
</div>
@endsection