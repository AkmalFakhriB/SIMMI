<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangTertinggalModel;

class barangTertinggal extends Controller
{
    public $path;
    public $dimensions;

    public function __construct()
    {
        $this->path_gambar_barang = public_path('gambar_barang');
        $this->dimension = '500';
    }

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
        $data->image = '0';
        $data->status = '0';
        $success = 'Insert data berhasil dilakukan';
        $data->save();

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $fileName = $data->id . '.' . $ext;
        $tujuan_upload = $this->path_gambar_barang;
        $file->move($tujuan_upload, $fileName);
        barangTertinggalModel::where('id_tertinggal', $data->id)->update([
            'image' => $data->id
        ]);

        return view('barangTertinggal/insert', ['success'=>$success]);
    }
}
