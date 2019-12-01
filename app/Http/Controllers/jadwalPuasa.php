<?php

namespace App\Http\Controllers;

use App\puasaModel;
use Illuminate\Http\Request;

class jadwalPuasa extends Controller
{
    public function index()
    {
        $data = puasaModel::where('status', '0')->get();
        return view('jadwalPuasa/index', ['data'=>$data]);
    }

    public function create()
    {
        return view('jadwalPuasa/insert');
    }

    public function store(Request $request)
    {
        $data = new puasaModel;
        $data->nama_puasa = $request->nama_puasa;
        $data->tanggal = $request->tanggal;
        if(puasaModel::where('tanggal', '=', $request->tanggal)->exists())
        {
            $failure = 'Tanggal tersebut sudah terjadwal';
            return view('jadwalPuasa/insert', ['failure'=>$failure]);
        }
        else
        {
            $success = 'Submit Data Berhasil dilakukan';
            $data->save();
            return view('jadwalPuasa/insert', ['success'=>$success]);
        }
    }

    public function edit(Request $request)
    {
        $data = puasaModel::where('id_puasa', $request->id_puasa)->firstorfail();
        return view('jadwalPuasa/update', ['data'=>$data]);
    }

    public function update(Request $request)
    {
        puasaModel::where('id_puasa', $request->id_puasa)
        ->update([
            'nama_puasa'=> $request->nama_puasa,
            'tanggal'=> $request->tanggal
        ]);
        return redirect('jadwalPuasa')->with('status', 'Update telah berhasil dilakukan');
    }

    public function delete(Request $request)
    {
        puasaModel::where('id_puasa', $request->id_puasa)
        ->update(['status'=>'1']);
        return redirect('jadwalPuasa')->with('status', 'Delete telah berhasil dilakukan');
    }
}
