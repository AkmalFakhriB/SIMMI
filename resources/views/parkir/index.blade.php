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
                <div class="card-header">Mendaftar Kartu Parkir</div>
                <div class="card-body">
                    <form action="{{route('parkirSubmit')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-left">Nama Kamu</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Name" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-left">No KTP Kamu</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="NoKTP" maxlength="16" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-left">No HP Kamu</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="NoHP" maxlength="15" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-left">No Polisi Motor Kamu</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="NoPol" maxlength="10" autofocus required>
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