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
                <div class="card-header">Menambah Rekap Keuangan</div>
                <div class="card-body">
                    <form action="{{route('keuanganSubmit')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3" for="sel1">Bulan</label>
                                <div class="col-md-6">
                                    <select class="form-control " id="sel1" name="bulan">
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="rekap">
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