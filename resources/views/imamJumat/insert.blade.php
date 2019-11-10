@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menambah Jadwal Imam</div>
                <div class="card-body">
                    <form action="submit" method="POST">
                        @csrf
                        <input type="text" name="JumatKe" placeholder="Jumat Ke-">
                        <br>
                        <input type="date" name="Tanggal" placeholder="Tanggal">
                        <br>
                        <input type="text" name="Imam" placeholder="Nama Imam">
                        <br>
                        <input type="text" name="Asal" placeholder="Asal Imam">
                        <br>
                        <input type="text" name="Muadzin" placeholder="Nama Muadzin">
                        <br>
                        <button type="submit">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection