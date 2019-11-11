@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menambah Jadwal Kajian</div>
                <div class="card-body">
                    <form action="submit" method="POST">
                        @csrf
                        <select name="Hari">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                        <br>
                        <input type="number" name="WaktuMulai" placeholder="Waktu Mulai Kegiatan" min="8" max="20">
                        <br>
                        <input type="number" name="WaktuSelesai" placeholder="Waktu Selesai Kegiatan" min="9" max="21">
                        <br>
                        <input type="text" name="Uraian" placeholder="Detail Acara">
                        <br>
                        <input type="text" name="Pengisi" placeholder="Pengisi Acara">
                        <br>
                        <input type="text" name="PJ" placeholder="Penanggung Jawab">
                        <br>
                        <button type="submit">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection