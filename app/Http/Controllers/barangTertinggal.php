<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangTertinggalModel;

class barangTertinggal extends Controller
{
    public function index()
    {
        $data = barangTertinggalModel::all();
        return view ('barangTertinggal/index', ['data'=>$data]);
    }

    public function create()
    {
        return view('barangTertinggal/insert');
    }

    public function store(Request $request)
    {
        // return $request;
        $data = new barangTertinggalModel;
        $data->barang = $request->barang;
        $data->lokasi = $request->lokasi;
        $data->uraian = $request->uraian;
        $data->image = base64_encode($request->image);
        dd(base64_encode(file_get_contents($request->image)));
        $data->status = '0';
        $success = 'Insert data berhasil dilakukan';
        $data->save();
        return view('barangTertinggal/insert', ['success'=>$success]);
    }
}
