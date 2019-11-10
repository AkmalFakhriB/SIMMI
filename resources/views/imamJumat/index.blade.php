@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%;background-color:#f2f2f2">
        Column 1
        @guest

        @else
            <a href="{{route('imamJumatCreate')}}">insert data baru</a>
        @endguest
    </div>

    <div class="column" style="width:50%; height:100%; background-color:white">
        <table id="tabel-imam">
            <thead>
                <tr>
                    <th>Jumat Ke-</th>
                    <th>Tanggal</th>
                    <th>Imam</th>
                    <th>Asal</th>
                    <th>Muadzin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imam as $imams)
                    <tr>
                        <td>{{$imams->JumatKe}}</td>
                        <td>{{$imams->Tanggal}}</td>
                        <td>{{$imams->Imam}}</td>
                        <td>{{$imams->Asal}}</td>
                        <td>{{$imams->Muadzin}}</td>
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


