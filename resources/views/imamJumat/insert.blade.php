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
            @isset($failure)
            <div class="alert alert-danger">
                {{$failure}}
            </div>
            @endisset
            <div class="card">
                <div class="card-header">Menambah Jadwal Imam</div>
                <div class="card-body">
                    <form action="submit" method="POST">
                        @csrf
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Tanggal</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Imam</label>
                            <div class="col-md-6">
                                <input type="Text" class="form-control" name="imam" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Nama Muadzin</label>
                            <div class="col-md-6">
                                <input type="Text" class="form-control" name="muadzin" required>
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