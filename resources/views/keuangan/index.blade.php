@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%">
        Column 1
    </div>

    <div class="column" style="width:50%; height:100%">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{route('keuanganDownload')}}" method="POST">
            @csrf
            <input type="text" class="form-control" name="bulan" value="November" hidden>
            <button class="btn btn-primary" type="submit">Bulan November</button>
        </form>
        <br>
        <form action="{{route('keuanganDownload')}}" method="POST">
            @csrf
            <input type="text" class="form-control" name="bulan" value="Desember" hidden>
            <button class="btn btn-primary" type="submit">Bulan Desember</button>
        </form>
    </div>

    <div class="column" style="width:25%">Column 3</div>
</div>
@endsection