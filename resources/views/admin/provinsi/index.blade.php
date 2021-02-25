@extends('layouts.admin')
@section('content')
<div class ="container-fluid">
    <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
               <div class ="card-header">
                Data Provinsi
                <a href="{{route('provinsi.create')}}"
                class="btn btn-primary float-right">
                Tambah
                </a>
               </div>
            <div class="card-body">
            <div class="teble-responsive">
            <table class="table">
            <tr>
            <th>No</th>
            <th>Kode Provinsi</th>
            <th>Provinsi</th>
            <th>Aksi</th>
            </tr>
            @php $no=1; @endphp
            @foreach($provinsi as $data)
            <form action="{{route('provinsi.destroy', $data->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <tr>
            <td>{{$no++}}</td>
            <td>{{$data->kode_provinsi}}</td>
            <td>{{$data->nama_provinsi}}</td>
            <td>
            <a href="{{route('provinsi.edit',$data->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="{{route('provinsi.show',$data->id)}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
