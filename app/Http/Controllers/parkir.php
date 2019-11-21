<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parkirModel;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $data = DB::table('parkir')
        ->join('users', 'parkir.id_parkir', '=', 'users.id_parkir')
        ->select('parkir.*', 'users.name')
        ->where('parkir.status', '=', '0')
        ->get();
        // $data = parkirModel::where('status', '0')->get();
        // dd($data);
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
        // print_r(Auth::user()->id);
        if (is_null(Auth::user()->id_parkir)) {
            $data = new parkirModel;
            $data->id_user = Auth::user()->id;
            $data->merk_motor = $request->merk_motor;
            $data->plat_nomor = $request->plat_nomor;
            $data->warna_motor = $request->warna_motor;
            $data->status = '0';
            $success = 'Submit Data Berhasil dilakukan';
            $data->save();
            $user = Auth::user();
            $user->id_parkir = $data->id;
            $user->save();
            return view('parkir/index', ['success'=>$success]);
        } else {
            $error = 'Anda sudah mendaftarkan kartu parkir anda';
            return view('parkir/index', ['error'=>$error]);
        }
        
        $data = new parkirModel;
        $data->id_user = Auth::user()->id;
        $data->merk_motor = $request->merk_motor;
        $data->plat_nomor = $request->plat_nomor;
        $data->warna_motor = $request->warna_motor;
        $data->status = '0';
        $success = 'Submit Data Berhasil dilakukan';
        $data->save();
        $user = Auth::user();
        $user->id_parkir = $data->id;
        $user->save();
        return view('parkir/index', ['success'=>$success]);
    }

    public function validasi(Request $request)
    {
        // echo $request->id; die();
        parkirModel::where('id_parkir', $request->id_parkir)
        ->update(['status'=>'1']);
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
