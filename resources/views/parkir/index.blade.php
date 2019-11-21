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
        @isset($error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endisset
            <div class="card">
                <div class="card-header">Mendaftar Kartu Parkir</div>
                <div class="card-body">
                    <form action="{{route('parkirSubmit')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-left">Merk Motor</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="merk_motor" autofocus style="text-transform:uppercase" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-left">Plat Nomor Motor</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="plat_nomor" maxlength="16" autofocus style="text-transform:uppercase" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-left">Warna Motor</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="warna_motor" maxlength="15" autofocus style="text-transform:uppercase" required>
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