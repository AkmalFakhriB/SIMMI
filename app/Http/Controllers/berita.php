<?php

namespace App\Http\Controllers;

use App\beritaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class berita extends Controller
{
    public function index()
    {
        $data = beritaModel::where('post_status', '0')->get();
        return view('welcome', ['data'=>$data]);
    }

    public function create()
    {
        return view('berita/insert');
    }

    public function store(Request $request)
    {
        $data = new beritaModel;
        $data->id_user = Auth::user()->id;
        $data->post_title = $request->post_title;
        $data->post_date = $request->post_date;
        $data->post_content = $request->post_content;
        $data->post_status = '0';
        $data->coment_status = '0';
        $data->guid = '0';
        $data->post_type = $request->post_type;
        $data->comment_count = '0';
        $success = 'Submit Data Berhasil dilakukan';
        $data->save();
        return view('berita/insert', ['success'=>$success]);
    }

    public function daftar()
    {
        $data = beritaModel::where('post_status', '0')->get();
        return view('berita/daftar', ['data'=>$data]);
    }

    public function edit(Request $request)
    {
        $data = beritaModel::where('id_berita', $request->id_berita)->firstorfail();
        return view('berita/update', ['data'=>$data]);
    }

    public function update(Request $request)
    {
        beritaModel::where('id_berita', $request->id_berita)
        ->update([
            'post_title' => $request->post_title,
            'post_date' => $request->post_date,
            'post_content' => $request->post_content,
            'post_type' => $request->post_type,
        ]);
        return redirect('berita/daftar')->with('status', 'Update telah berhasil dilakukan');
    }
}
