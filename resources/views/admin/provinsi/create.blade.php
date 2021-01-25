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
               </div>
               Nama Provinsi
               <input type="text" name="nama_provinsi" class="form-control" required>
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