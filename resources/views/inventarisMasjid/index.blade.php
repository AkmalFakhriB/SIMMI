@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
        <div class="column" style="width:25%;background-color:#f2f2f2">
            Column 1
            @guest
    
            @else
                <a href="{{route('inventarisMasjidCreate')}}">insert data baru</a>
            @endguest
        </div>
    
        <div class="column" style="width:50%; height:100%; background-color:white">
            <table id="tabel-imam">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Uraian</th>
                        <th>Satuan</th>
                        <th>Kuantitas</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventaris as $inventariss)
                        <tr>
                            <td>{{$inventariss->id}}</td>
                            <td>{{$inventariss->Uraian}}</td>
                            <td>{{$inventariss->Satuan}}</td>
                            <td>{{$inventariss->Kuantitas}}</td>
                            <td>{{$inventariss->Kondisi}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
    
        <div class="column" style="width:25%">Column 3</div>
    </div>

@endsection