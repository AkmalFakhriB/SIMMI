<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventarisMasjidModel;

class inventarisMasjid extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = inventarisMasjidModel::all();
        return view('inventarisMasjid/index', ['inventaris'=>$inventaris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventarisMasjid/insert');
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
        $inventaris = new inventarisMasjidModel;
        $inventaris->uraian = $request->uraian;
        $inventaris->satuan = 'Buah';
        $inventaris->kuantitas = $request->kuantitas;
        $inventaris->kondisi = $request->kondisi;
        $success = 'Submit Data Berhasil dilakukan';
        $inventaris->save();
        return view('inventarisMasjid/insert', ['success'=>$success]);
    }

    public function delete(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inventarisMasjid  $inventarisMasjid
     * @return \Illuminate\Http\Response
     */
    public function show(inventarisMasjid $inventarisMasjid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inventarisMasjid  $inventarisMasjid
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = inventarisMasjidModel::where('id_inventaris', $request->id_inventaris)->firstorfail();
        return view('inventarisMasjid/update', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inventarisMasjid  $inventarisMasjid
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inventarisMasjid  $inventarisMasjid
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventarisMasjid $inventarisMasjid)
    {
        //
    }
}
