@extends('layouts.admin')
@section('content')
<div class ="container-fluid">
    <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
               <div class ="card-header">
                Data Rw
                <a href="{{route('kasus.create')}}"
                class="btn btn-primary float-right">
                Tambah
                </a>
               </div>
            <div class="card-body">
            <div class="teble-responsive">
            <table class="table">
            <tr>
            <th>No</th>
            <th>Rw</th>
            <th>Positif</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
            <th>Tanggal</th>
            <th>Aksi</th>
            </tr>
            @php $no=1; @endphp
            @foreach($kasus as $data)
            <form action="{{route('kasus.destroy', $data->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <tr>
            <td>{{$no++}}</td>
            <td>{{$data->rw->nama_rw}}</td>
            <td>{{$data->positif}}</td>
            <td>{{$data->sembuh}}</td>
            <td>{{$data->meninggal}}</td>
            <td>{{$data->tanggal}}</td>
            <td>
            <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('kasus.show',$data->id)}}" class="btn btn-info">Show</a>
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