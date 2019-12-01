<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class keuangan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->path_rekap_bulanan = public_path('rekap_bulanan');
        $this->dimension = '500';
    }

    public function index()
    {
        return view('keuangan/index');
    }

    public function Download(Request $request)
    {
        $file = public_path('rekap_bulanan') . '\\'. $request->bulan . '.pdf';
        // var_dump($file); die();
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'Rekap Keuangan Bulan '. $request->bulan .'.pdf',$headers);
        return redirect('keuangan')->with('status', 'File rekap tidak di temukan');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keuangan/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bulan = $request->bulan;
        $file = $request->file('rekap');
        $ext = $file->getClientOriginalExtension();
        $fileName = $bulan . '.' . $ext;
        $tujuan_upload = $this->path_rekap_bulanan;
        $file->move($tujuan_upload, $fileName);

        $success = 'Insert data berhasil dilakukan';
        return view('keuangan/insert', ['success'=>$success]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function show(keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(keuangan $keuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keuangan $keuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(keuangan $keuangan)
    {
        //
    }
}
