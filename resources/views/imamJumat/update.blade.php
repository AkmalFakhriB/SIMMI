@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Imam Jumat</div>
                <div class="card-body">
                    <form action="{{route('imamJumatUpdate')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="id_imam_jumat" value="{{$data->id_imam_jumat}}" hidden>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Tanggal</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Imam</label>
                            <div class="col-md-6">
                                <input type="Text" class="form-control" name="imam" value="{{$data->nama_imam}}">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Muadzin</label>
                            <div class="col-md-6">
                                <input type="Text" class="form-control" name="muadzin" value="{{$data->muadzin}}">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection