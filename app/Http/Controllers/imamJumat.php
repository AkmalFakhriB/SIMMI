<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\imamJumatModel;
use DateTime;
use DateTimeZone;

class imamJumat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
        $tanggal_sekarang = $dateTime->format("Y-m-d");
        // var_dump($tanggal_sekarang); die();
        $imam=imamJumatModel::where('status', '0')->where('tanggal', '>=', $tanggal_sekarang)->get();
        return view('imamJumat/index', ['imam'=>$imam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imamJumat/insert');
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
        $imam = new imamJumatModel;
        $imam->tanggal = $request->tanggal;
        $imam->nama_imam = $request->imam;
        $imam->muadzin = $request->muadzin;
        $imam->status = '0';
        if (imamJumatModel::where('tanggal', '=', $request->tanggal)->exists()) 
        {
            $failure = 'Tanggal tersebut sudah terjadwal';
            return view('imamJumat/insert', ['failure'=>$failure]);
        } 
        else 
        {
            $success = 'Insert data berhasil dilakukan';
            $imam->save();
            return view('imamJumat/insert', ['success'=>$success]);
        }
    }

    public function delete(Request $request)
    {
        imamJumatModel::where('id_imam_jumat', $request->id_imam_jumat)
        ->update(['status'=>'1']);
        return redirect('imamJumat')->with('status', 'Delete telah berhasil dilakukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = imamJumatModel::where('id_imam_jumat', $request->id_imam_jumat)->firstorfail();
        return view('imamJumat/update', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->JumatKe);
        imamJumatModel::where('id_imam_jumat', $request->id_imam_jumat)
        ->update([
            'tanggal'=> $request->tanggal,
            'nama_imam'=> $request->imam,
            'muadzin'=> $request->muadzin
        ]);
        return redirect('imamJumat')->with('status', 'Update telah berhasil dilakukan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
