@extends('layouts.app')

@section('content')
<div class="row" style="padding-left: 1%;padding-right: 1%">
    <div class="column" style="width:25%;">
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
            <div class="card-header">{{$datas->post_title}}</div>
            
        </div>   
        @endforeach
    </div>

    <div class="column" style="width:25%">
        <p style="text-align: center;"><iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=265" frameborder="0" width="400" height="400"></iframe></p>
    </div>
</div>
@endsection