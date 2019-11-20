@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%;background-color:#f2f2f2">
        Column 1
    </div>

    <div class="column" style="width:50%; height:100%; background-color:white">
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

    <div class="column" style="width:25%">Column 3</div>
</div>

<script>
    $(document).ready(function(){
        $('#tabel-imam').DataTable();
    });
</script>
@endsection