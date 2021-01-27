@extends('layouts.admin')
@section('content')
<div class ="container-fluid">
    <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
               <div class ="card-header">
                Data Kasus
                <a href="{{route('rw.create')}}"
                class="btn btn-primary float-right">
                Tambah
                </a>
               </div>
            <div class="card-body">
            <div class="teble-responsive">
            <table class="table">
            <tr>
            <th>No</th>
            <th>Nama Desa</th>
            <th>Rw</th>
            <th>Aksi</th>
            </tr>
            @php $no=1; @endphp
            @foreach($rw as $data)
            <form action="{{route('rw.destroy', $data->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <tr>
            <td>{{$no++}}</td>
            <td>{{$data->desa->nama_desa}}</td>
            <td>{{$data->nama_rw}}</td>
            <td>
            <a href="{{route('rw.edit',$data->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('rw.show',$data->id)}}" class="btn btn-info">Show</a>
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