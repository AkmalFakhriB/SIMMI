<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class keuangan extends Controller
{
    
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
    
    public function create()
    {
        return view('keuangan/insert');
    }

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
}
