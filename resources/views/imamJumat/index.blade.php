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
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table id="tabel-imam" class="cell-border compact hover">
            <thead>
                <tr>
                    <th>Jumat Ke-</th>
                    <th>Tanggal</th>
                    <th>Imam</th>
                    <th>Asal</th>
                    <th>Muadzin</th>
                    @guest

                    @else
                        <th>Update</th>
                        <th>Delete</th>
                    @endguest
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
                        @guest

                        @else
                            <td>
                                <form action="{{route('imamJumatEdit')}}" method="POST">
                                    @csrf
                                    <input type="text" value="{{$imams->id}}" name="id" hidden>
                                    <button class="btn btn-success" type="submit">Update</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('imamJumatDelete')}}" method="POST">
                                    @csrf
                                    <input type="text" value="{{$imams->id}}" name="id" hidden>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        @endguest
                    </tr>
                @endforeach
            </tbody>
        </table>   
    </div>

    <div class="column" style="width:25%">Column 3</div>
</div>
@endsection


