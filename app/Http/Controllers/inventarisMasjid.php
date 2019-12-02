<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventarisMasjidModel;

class inventarisMasjid extends Controller
{
    public function index()
    {
        $inventaris = inventarisMasjidModel::all();
        return view('inventarisMasjid/index', ['inventaris'=>$inventaris]);
    }

    public function create()
    {
        return view('inventarisMasjid/insert');
    }

    public function store(Request $request)
    {
        // print_r($request->input());
        $inventaris = new inventarisMasjidModel;
        $inventaris->uraian = $request->uraian;
        $inventaris->satuan = 'Buah';
        $inventaris->kuantitas = $request->kuantitas;
        $inventaris->kondisi = $request->kondisi;
        $success = 'Submit Data Berhasil dilakukan';
        $inventaris->save();
        return view('inventarisMasjid/insert', ['success'=>$success]);
    }

    public function edit(Request $request)
    {
        $data = inventarisMasjidModel::where('id_inventaris', $request->id_inventaris)->firstorfail();
        return view('inventarisMasjid/update', ['data'=>$data]);
    }

    public function update(Request $request)
    {
        inventarisMasjidModel::where('id_inventaris', $request->id_inventaris)
        ->update([
            'uraian' => $request->uraian,
            'satuan' => $request->satuan,
            'kuantitas' => $request->kuantitas,
            'kondisi' => $request->kondisi
        ]);
        return redirect('inventarisMasjid')->with('status', 'Update telah berhasil dilakukan');
    }

}
