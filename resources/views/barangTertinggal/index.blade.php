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
    <div class="column" style="width:25%">
        Column 1
    </div>

    <div class="column" style="width:50%; height:100%; background-color:white; ;border:1px solid rgba(0, 0, 0, 0.125);border-radius: 0.25rem">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="header" style="background-color:#dc3545 ;padding:.75rem 1.25rem;color:white;text-align:center">
                <h3 class="card-title">Barang Tertinggal</h3>
            </div>
        @foreach ($data as $datas)
            <div class="card">
                <div class="card-header">{{$datas->barang}}</div>
                <div class="card-body">
                    <img src="../public/gambar_barang/<?php echo $datas->image; ?>.png" >
                </div>
            </div>
        @endforeach  
    </div>

    <div class="column" style="width:25%"></div>
</div>
</section>
@endsection