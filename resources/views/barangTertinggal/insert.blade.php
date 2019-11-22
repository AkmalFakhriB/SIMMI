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
                <div class="card-header">Menambah Daftar Barang Tertinggal</div>
                <div class="card-body">
                    <form action="{{route('barangTertinggalSubmit')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Barang</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="barang" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Lokasi ditemukan</label>
                            <div class="col-md-6">
                                <input type="string" class="form-control" name='lokasi' required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="textarea1" class="col-md-4 col-form-label text-md-left">Keterangan</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="textarea1" name="uraian" rows="5" maxlength="250"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        </div>
                        <div class="form-group row">
                        <button class="btn btn-primary" type="submit">Submit data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection