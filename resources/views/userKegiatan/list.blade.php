@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%;">
        Column 1
    </div>

    <div class="column" style="width:50%; height:100%; background-color:white">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table id="tabel-imam" class="cell-border compact hover">
            <thead>
                <tr>
                    <th>Nama Kajian</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Pengisi</th>
                    <th>Penanggung Jawab</th>
                    <th>Daftar</th>
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
                        <td>
                            <form action="{{route('userKegiatanDaftar')}}" method="POST">
                                @csrf
                                <input type="text" value="{{$datas->id_kajian_acara}}" name="id_kajian_acara" hidden>
                                <button class="btn btn-success" type="submit">Daftar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>   
    </div>

    <div class="column" style="width:25%">Column 3</div>
</div>
@endsection