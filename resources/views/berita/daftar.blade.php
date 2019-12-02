@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
        <div class="column" style="width:25%;">
        </div>
    
        <div class="column" style="width:50%; height:100%; background-color:white">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                    <div class="card-header">Menambah Berita</div>
            <table id="tabel-imam" class="cell-border compact hover">
                <thead>
                    <tr>
                        <th>Judul Berita</th>
                        <th>Tanggal Berita</th>
                        <th>Tipe Berita</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                        <tr>
                            <td>{{$datas->post_title}}</td>
                            <td>{{$datas->post_date}}</td>
                            <td>{{$datas->post_type}}</td>
                            <td>
                                <form action="{{route('beritaEdit')}}" method="POST">
                                    @csrf
                                    <input type="text" value="{{$datas->id_berita}}" name="id_berita" hidden>
                                    <button class="btn btn-success" type="submit">Edit</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>   
        </div>
    
        <div class="column" style="width:25%"></div>
    </div>

@endsection