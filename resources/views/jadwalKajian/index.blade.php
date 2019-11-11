@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%;background-color:#f2f2f2">
        Column 1
        @guest

        @else
            <a href="{{route('jadwalKajianCreate')}}">insert data baru</a>
        @endguest
    </div>

    <div class="column" style="width:50%; height:100%; background-color:white">
        <table id="tabel-imam">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>Uraian</th>
                    <th>Pengisi</th>
                    <th>Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                    <tr>
                        <td>{{$datas->Hari}}</td>
                        <td>{{$datas->Waktu}}</td>
                        <td>{{$datas->Uraian}}</td>
                        <td>{{$datas->Pengisi}}</td>
                        <td>{{$datas->PenanggungJawab}}</td>
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