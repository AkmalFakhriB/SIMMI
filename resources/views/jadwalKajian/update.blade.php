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
                <div class="card-header">Edit Jadwal Kajian</div>
                <div class="card-body">
                    <form action="{{route('jadwalKajianUpdate')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="id_kajian_acara" value="{{$data->id_kajian_acara}}" hidden>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Kajian</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_kajian" maxlength="50" value="{{$data->nama_kajian}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Tanggal</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="tanggal_kajian" value="{{$data->tanggal_kajian}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Waktu Mulai Kegiatan</label>
                            <div class="col-md-3">
                                <input type="time" class="form-control" name="waktu_awal" value="{{$data->waktu_awal}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Waktu Selesai Kegiatan</label>
                            <div class="col-md-3">
                                <input type="time" class="form-control" name="waktu_akhir" value="{{$data->waktu_akhir}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="textarea1" class="col-md-4 col-form-label text-md-left">Keterangan Kegiatan</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="textarea1" name="uraian" rows="5" maxlength="250" >{{$data->uraian}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Pengisi Acara</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pengisi" maxlength="25" value="{{$data->pengisi}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Penanggung Jawab</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="penanggung_jawab" maxlength="25" value="{{$data->penanggung_jawab}}" required>
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