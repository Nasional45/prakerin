@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Rw</div>

                <div class="card-body">
                <form action="{{route('rw.update', $rw->id)}}" method="POST">
                @method('put')
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
               <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" required>
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