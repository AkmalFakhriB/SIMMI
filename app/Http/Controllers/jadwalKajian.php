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
        $data->Hari = $request->Hari;
        $data->Waktu = '0'.$request->WaktuMulai.'.00 - 0'.$request->WaktuSelesai.'.00';
        $data->Uraian = $request->Uraian;
        $data->Pengisi = $request->Pengisi;
        $data->PenanggungJawab = $request->PJ;
        $data->save();
        return view('jadwalKajian/insert');
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
