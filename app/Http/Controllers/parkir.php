<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parkirModel;

class parkir extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parkir/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihatPendaftar()
    {
        $data = parkirModel::where('StatusValidasi', '0')->get();
        return view('parkir/daftar', ['data'=>$data]);
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
        $data = new parkirModel;
        $data->Name = $request->Name;
        $data->NoKTP = $request->NoKTP;
        $data->NoHP = $request->NoHP;
        $data->NoPol = $request->NoPol;
        $data->StatusValidasi = '0';
        $success = 'Submit Data Berhasil dilakukan';
        $data->save();
        return view('parkir/index', ['success'=>$success]);
    }

    public function validasi(Request $request)
    {
        // echo $request->id; die();
        parkirModel::where('id', $request->id)
        ->update(['StatusValidasi'=>'1']);
        return redirect('parkir/pendaftar')->with('status', 'Validasi telah berhasil di lakukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function show(parkir $parkir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function edit(parkir $parkir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parkir $parkir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function destroy(parkir $parkir)
    {
        //
    }
}
