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
                <div class="card-header">Mengedit Berita</div>
                <div class="card-body">
                    <form action="{{route('beritaUpdate')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="id_berita" value="{{$data->id_berita}}" hidden>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Judul Berita</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="post_title" maxlength="50" value="{{$data->post_title}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">Tanggal Berita</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name='post_date' value="{{$data->post_date}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="textarea1" class="col-md-4 col-form-label text-md-left">Keterangan Berita</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="textarea1" name="post_content" rows="5" maxlength="250">{{$data->post_content}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-4" for="sel1">Tipe Berita</label>
                                    <div class="col-md-6">
                                        <select class="form-control " id="sel1" name="post_type" value="{{$data->post_type}}">
                                            <option value="Uncategorized">Uncategorized</option>
                                            <option value="Wawasan">Wawasan</option>
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