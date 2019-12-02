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
            <div class="card-header">List Kajian Acara</div>
        <table id="tabel-imam" class="cell-border compact hover">
            <thead>
                <tr>
                    <th>Nama Kajian</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Pengisi</th>
                    <th>Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                    <tr>
                        <td>{{$datas->nama_kajian}}</td>
                        <td>{{$datas->tanggal_kajian}}</td>
                        <td>{{$datas->waktu_awal}} - {{$datas->waktu_akhir}}</td>
                        <td>{{$datas->pengisi}}</td>
                        <td>{{$datas->penanggung_jawab}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
    </div>

    <div class="column" style="width:25%"></div>
</div>
@endsection