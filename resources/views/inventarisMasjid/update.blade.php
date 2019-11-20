@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Inventaris Masjid</div>
                <div class="card-body">
                    <form action="{{route('inventarisMasjidUpdate')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="id_inventaris" value="{{$data->id_inventaris}}" hidden>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Barang</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="uraian" value="{{$data->uraian}}">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Satuan Barang</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="satuan" value="{{$data->satuan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Jumlah Barang</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="kuantitas" min="1" value="{{$data->kuantitas}}">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left" for="sel1">Kondisi Barang</label>
                            <div class="col-md-6">
                                <select class="form-control " id="sel1" name="kondisi" value="{{$data->kondisi}}">
                                    <option value="Baik">Baik</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
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