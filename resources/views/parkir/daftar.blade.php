@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%;background-color:#f2f2f2">
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
                    <th>Nama</th>
                    <th>Merk Motor</th>
                    <th>Plat Nomor</th>
                    <th>Warna Motor</th>
                    <th>Validasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                    <tr>
                        <td>{{strtoupper($datas->name)}}</td>
                        <td>{{strtoupper($datas->merk_motor)}}</td>
                        <td>{{strtoupper($datas->plat_nomor)}}</td>
                        <td>{{strtoupper($datas->warna_motor)}}</td>
                        <td>
                            <form action="{{route('parkirValidate')}}" method="POST">
                                @csrf
                                <input type="text" value="{{$datas->id_parkir}}" name="id_parkir" hidden>
                                <button class="btn btn-success" type="submit">Validate</button>
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