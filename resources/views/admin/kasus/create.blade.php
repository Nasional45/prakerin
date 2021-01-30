@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="{{route('kasus.store')}}" class="form-horizontal m-t-30" method="post">
                @csrf
                <div class="row">
                            <div class="col">
                                @livewire('livewire')
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Jumlah Reaktif</label>
                                    <input type="text" name="reaktif" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Positif</label>
                                    <input type="text" name="positif" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Sembuh</label>
                                    <input type="text" name="sembuh" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Meninggal</label>
                                    <input type="text" name="meninggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                            </div>
                        </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection