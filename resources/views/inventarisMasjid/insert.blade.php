@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menambah Data Inventaris</div>
                <div class="card-body">
                    <form action="submit" method="POST">
                        @csrf
                        <input type="text" name="Uraian" placeholder="Nama Barang">
                        <br>
                        <input min="1" type="number" name="Kuantitas" placeholder="Jumlah Barang">
                        <br>
                        <button type="submit">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection