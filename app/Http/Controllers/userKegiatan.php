<?php

namespace App\Http\Controllers;

use App\jadwalKajianModel;
use App\pendaftaranModel;
use App\User;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userKegiatan extends Controller
{
    public $path;
    public $dimensions;

    public function __construct()
    {
        $this->path_bukti_verifikasi = public_path('bukti_verifikasi');
        $this->dimension = '500';
    }

    public function list()
    {
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $tanggal_sekarang = $dateTime->format("Y-m-d");
        $data = jadwalKajianModel::where('tanggal_kajian', '>=', $tanggal_sekarang)->get();
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

    public function upload()
    {
        return view('userKegiatan/upload');
    }

    public function store(Request $request)
    {
        $file = $request->file('berkas');
        $ext = $file->getClientOriginalExtension();
        $fileName = Auth::user()->id . '.' . $ext;
        $tujuan_upload = $this->path_bukti_verifikasi;
        $file->move($tujuan_upload, $fileName);
        User::where('id', Auth::user()->id)->update([
            'status' => '1'
        ]);

        $success = 'Insert data berhasil dilakukan';
        return view('userKegiatan/upload', ['success'=>$success]);
    }
}
