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
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>No HP</th>
                    <th>No Pol</th>
                    <th>Validasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                    <tr>
                        <td>{{$datas->Name}}</td>
                        <td>{{$datas->NoKTP}}</td>
                        <td>{{$datas->NoHP}}</td>
                        <td>{{$datas->NoPol}}</td>
                        <td>
                            <form action="{{route('parkirValidate')}}" method="POST">
                                @csrf
                                <input type="text" value="{{$datas->NoKTP}}" name="NoKTP" hidden>
                                <button type="submit">Validate</button>
                            </form>
                        </td>
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