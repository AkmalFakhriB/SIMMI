<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwalKajianModel;
use DateTime;
use DateTimeZone;

class jadwalKajian extends Controller
{
    public function index()
    {
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $tanggal_sekarang = $dateTime->format("Y-m-d");
        $data = jadwalKajianModel::where('tanggal_kajian', '>=', $tanggal_sekarang)->get();
        return view('jadwalKajian/index', ['data'=>$data]);
    }

    public function create()
    {
        return view('jadwalKajian/insert');
    }

    public function store(Request $request)
    {
        // print_r($request->input());
        $data = new jadwalKajianModel;
        $data->nama_kajian = $request->nama_kajian;
        $data->tanggal_kajian = $request->tanggal_kajian;
        $data->waktu_awal = $request->waktu_awal;
        $data->waktu_akhir = $request->waktu_akhir;
        $data->uraian = $request->uraian;
        $data->pengisi = $request->pengisi;
        $data->penanggung_jawab = $request->penanggung_jawab;
        $data->status = '0';
        if ($data->waktu_awal == $data->waktu_akhir) 
        {
            $failure = 'Minimal Durasi Kajian 1 jam';
            return view('jadwalKajian/insert', ['failure'=>$failure]);
        }
        else if ($data->waktu_awal > $data->waktu_akhir)
        {
            $failure = 'Waktu Mulai Harus Lebih Kecil dari Waktu Selesai';
            return view('jadwalKajian/insert', ['failure'=>$failure]);
        } 
        else if (jadwalKajianModel::where('tanggal_kajian', '=', $request->tanggal_kajian)->exists()) 
        {
            $failure = 'Tanggal tersebut sudah terjadwal';
            return view('jadwalKajian/insert', ['failure'=>$failure]);
        }
        else 
        {
            $success = 'Submit Data Berhasil dilakukan';
            $data->save();
            return view('jadwalKajian/insert', ['success'=>$success]);
        }
    }

    public function edit(Request $request)
    {
        $data = jadwalKajianModel::where('id_kajian_acara', $request->id_kajian_acara)->firstorfail();
        return view('jadwalKajian/update', ['data'=>$data]);
    }

    public function update(Request $request)
    {
        jadwalKajianModel::where('id_kajian_acara', $request->id_kajian_acara)
        ->update([
            'nama_kajian' => $request->nama_kajian,
            'tanggal_kajian' => $request->tanggal_kajian,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir,
            'uraian' => $request->uraian,
            'pengisi' => $request->pengisi,
            'penanggung_jawab' => $request->penanggung_jawab
        ]);
        return redirect('jadwalKajian')->with('status', 'Update telah berhasil dilakukan');
    }
}
