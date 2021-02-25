@extends('layouts.admin')
@section('content')
<div class ="container-fluid">
    <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
               <div class ="card-header">
                Data Kecamatan
                <a href="{{route('kecamatan.create')}}"
                class="btn btn-primary float-right">
                Tambah
                </a>
               </div>
            <div class="card-body">
            <div class="teble-responsive">
            <table class="table">
            <tr>
            <th>No</th>
            <th>Nama Kota</th>
            <th>Nama Kecamatan</th>
            <th>Aksi</th>
            </tr>
            @php $no=1; @endphp
            @foreach($kecamatan as $data)
            <form action="{{route('kecamatan.destroy', $data->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <tr>
            <td>{{$no++}}</td>
            <td>{{$data->kota->nama_kota}}</td>
            <td>{{$data->nama_kecamatan}}</td>
            <td>
            <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <button type="submit" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </form>
            </td>
            </tr>
            @endforeach
            </table>
            </div>
            </div>
            </div>
           </div>
      </div>
</div>
@endsection