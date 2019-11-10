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
        $inventaris->Uraian = $request->Uraian;
        $inventaris->Satuan = 'Buah';
        $inventaris->Kuantitas = $request->Kuantitas;
        $inventaris->Kondisi = 'Baik';
        $inventaris->save();
        return view('inventarisMasjid/insert');
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
    public function edit(inventarisMasjid $inventarisMasjid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inventarisMasjid  $inventarisMasjid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventarisMasjid $inventarisMasjid)
    {
        //
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
