@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Kasus</div>
                <div class="card-body">
                @livewireScripts
                @livewire('livewire',['selectedRw' => $kasus->id_rw,'id' => $kasus->id])
                @livewireStyles
                <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection 