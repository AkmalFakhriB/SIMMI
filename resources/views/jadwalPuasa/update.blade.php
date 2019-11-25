@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @isset($alert)
            <div class="alert alert-danger">
                {{$alert}}
            </div>
        @endisset
        @isset($success)
            <div class="alert alert-success">
                {{$success}}
            </div>
        @endisset
            <div class="card">
                <div class="card-header">Menambah Jadwal Puasa Sunnah</div>
                <div class="card-body">
                    <form action="{{route('jadwalPuasaUpdate')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="id_puasa" maxlength="50" value="{{$data->id_puasa}}" hidden required>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Puasa</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_puasa" maxlength="50" value="{{$data->nama_puasa}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Tanggal</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection