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
                <div class="card-header">Menambah Jadwal Kajian</div>
                <div class="card-body">
                    <form action="{{route('jadwalKajianSubmit')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                        <label class="col-md-4" for="sel1">Pilih Hari</label>
                            <div class="col-md-3">
                                <select class="form-control" id="sel1" name="Hari">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Waktu Mulai Kegiatan</label>
                            <div class="col-md-2">
                                <input type="number" class="form-control" name="WaktuMulai" min="8" max="20" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Waktu Selesai Kegiatan</label>
                            <div class="col-md-2">
                                <input type="number" class="form-control" name="WaktuSelesai" min="9" max="21" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Keterangan Kegiatan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Uraian" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Pengisi Acara</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Pengisi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Penanggung Jawab</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="PJ" required>
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