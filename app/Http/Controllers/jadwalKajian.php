<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwalKajianModel;

class jadwalKajian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jadwalKajianModel::all();
        return view('jadwalKajian/index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwalKajian/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        // if ($data->WaktuMulai == $data->WaktuSelesai) 
        // {
        //     $alert = 'Minimal Durasi Kajian 1 Jam';
        //     return view('jadwalKajian/insert', ['alert'=>$alert]);
        // } 
        // elseif ($data->WaktuMulai > $data->WaktuSelesai)
        // {
        //     $alert = 'Waktu Mulai Harus Lebih Kecil dari Waktu Selesai';
        //     return view('jadwalKajian/insert', ['alert'=>$alert]);
        // } 
        // else 
        // {
            $success = 'Submit Data Berhasil dilakukan';
            $data->save();
            return view('jadwalKajian/insert', ['success'=>$success]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function show(jadwalKajian $jadwalKajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwalKajian $jadwalKajian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwalKajian $jadwalKajian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwalKajian $jadwalKajian)
    {
        //
    }
}
