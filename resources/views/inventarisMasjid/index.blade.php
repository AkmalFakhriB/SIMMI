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
                        <th>Uraian</th>
                        <th>Satuan</th>
                        <th>Kuantitas</th>
                        <th>Kondisi</th>
                        @auth
                            @if (Auth::user()->isAdmin())
                                <th>Update</th>
                                {{-- <th>Delete</th> --}}
                            @endif    
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventaris as $inventariss)
                        <tr>
                            <td>{{$inventariss->uraian}}</td>
                            <td>{{$inventariss->satuan}}</td>
                            <td>{{$inventariss->kuantitas}}</td>
                            <td>{{$inventariss->kondisi}}</td>
                            @auth
                                @if (Auth::user()->isAdmin())
                                <td>
                                    <form action="{{route('inventarisMasjidEdit')}}" method="POST">
                                        @csrf
                                        <input type="text" value="{{$inventariss->id_inventaris}}" name="id_inventaris" hidden>
                                        <button class="btn btn-success" type="submit">Edit</button>
                                    </form>
                                </td>
                                {{-- <td>
                                    <form action="{{route('imamJumatDelete')}}" method="POST">
                                        @csrf
                                        <input type="text" value="{{$imams->id_imam_jumat}}" name="id_imam_jumat" hidden>
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td> --}}
                                @endif
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
    
        <div class="column" style="width:25%">Column 3</div>
    </div>

@endsection