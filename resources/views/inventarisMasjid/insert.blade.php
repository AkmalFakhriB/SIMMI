@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @isset($success)
            <div class="alert alert-success">
                {{$success}}
            </div>
        @endisset
            <div class="card">
                <div class="card-header">Menambah Data Inventaris</div>
                <div class="card-body">
                    <form action="submit" method="POST">
                        @csrf
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Barang</label>
                            <div class="col-md-6">
                                <input type="Text" class="form-control" name="Uraian" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Jumlah Barang</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="Kuantitas" min="1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4" for="sel1">Pilih Kondisi</label>
                            <div class="col-md-6">
                                <select class="form-control " id="sel1" name="Kondisi">
                                    <option value="Baik">Baik</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
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