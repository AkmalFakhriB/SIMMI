@extends('layouts.app')

@section('content')
<section class="banner-one" style="margin-top:-220px">
<img src="images/banner-icon-1-1.png" alt="Awesome Image" class="bubble-1" />
        <img src="images/banner-icon-1-3.png" alt="Awesome Image" class="bubble-2" />
        <img src="images/banner-icon-1-2.png" alt="Awesome Image" class="bubble-3" />
        <img src="images/banner-icon-1-4.png" alt="Awesome Image" class="bubble-4" />
        <img src="images/banner-icon-1-5.png" alt="Awesome Image" class="bubble-5" style="margin-top:300px"/>
        <img src="images/banner-icon-1-6.png" alt="Awesome Image" class="bubble-6" />

<div class="row" style="padding-left: 1%;padding-right: 1%">
        <div class="column" style="width:25%;background-color:#fcfcfc">
        </div>
    
        <div class="column" style="width:50%; height:100%; background-color:white;border:1px solid rgba(0, 0, 0, 0.125);border-radius: 0.25rem">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="header" style="background-color:#ffc107 ;padding:.75rem 1.25rem;color:white;text-align:center">
                    <h3 class="card-title">Inventaris Masjid</h3>
                </div>
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
    
        <div class="column" style="width:25%"></div>
    </div>
</section>
@endsection