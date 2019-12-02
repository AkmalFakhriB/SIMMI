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
                <div class="card-header">Upload Berkas</div>
                <div class="card-body">
                    <form action="{{route('userKegiatanSubmit')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">File Berkas</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="berkas">
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