@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%">
        Column 1
    </div>

    <div class="column" style="width:50%; height:100%; background-color:white">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @foreach ($data as $datas)
            <div class="card">
                <div class="card-header">{{$datas->barang}}</div>
                <div class="card-body">
                    <img src="../public/gambar_barang/<?php echo $datas->image; ?>.png" >
                </div>
            </div>
        @endforeach  
    </div>

    <div class="column" style="width:25%">Column 3</div>
</div>
@endsection