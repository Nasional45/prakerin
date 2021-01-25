@extends('layouts.admin')
@section('content')
<div class ="container-fluid">
    <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
               <div class ="card-header">
                Data Kota
                <a href="{{route('kota.create')}}"
                class="btn btn-primary float-right">
                Tambah
                </a>
               </div>
            <div class="card-body">
            <div class="teble-responsive">
            <table class="table">
            <tr>
            <th>No</th>
            <th>Kode Kota</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Aksi</th>
            </tr>
            @php $no=1; @endphp
            @foreach($kota as $data)
            <form action="{{route('kota.destroy', $data->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <tr>
            <td>{{$no++}}</td>
            <td>{{$data->kode_kota}}</td>
            <td>{{$data->nama_kota}}</td>
            <td>{{$data->provinsi->nama_provinsi}}</td>
            <td>
            <a href="{{route('kota.edit',$data->id)}}" class="btn btn-warning">Edit</a>
            <a href="{{route('kota.show',$data->id)}}" class="btn btn-warning">Show</a>
            <button type="submit" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Delete</button>
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