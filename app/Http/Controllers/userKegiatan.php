<?php

namespace App\Http\Controllers;

use App\jadwalKajianModel;
use App\pendaftaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userKegiatan extends Controller
{
    public function list()
    {
        $data = jadwalKajianModel::where('id_user', '!=', Auth::user()->id);
        return view('userKegiatan/list', ['data'=>$data]);
    }

    public function daftar(Request $request)
    {
        $data = new pendaftaranModel;
        $data->id_user = Auth::user()->id;
        $data->id_kajian_acara = $request->id_kajian_acara;
        $data->save();
        return redirect('userKegiatan/list')->with('status', 'Berhasil mendaftar kajian tersebut!!!');
    }

    public function index()
    {
        $data = DB::table('pendaftaran')
        ->join('users', 'pendaftaran.id_user', '=', 'users.id')
        ->join('kajian_acara', 'pendaftaran.id_kajian_acara', '=', 'kajian_acara.id_kajian_acara')
        ->select('kajian_acara.*')
        ->where('pendaftaran.id_user', '=', Auth::user()->id)
        ->get();
        return view('userKegiatan/index', ['data'=>$data]);
    }
}
