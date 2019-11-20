<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\imamJumatModel;

class imamJumat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imam=imamJumatModel::where('StatusDelete', '0')->get();
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
        $imam->JumatKe = $request->JumatKe;
        $imam->Tanggal = $request->Tanggal;
        $imam->Imam = $request->Imam;
        $imam->Asal = $request->Asal;
        $imam->Muadzin = $request->Muadzin;
        $imam->StatusDelete = '0';
        $success = 'Insert data berhasil dilakukan';
        $imam->save();
        return view('imamJumat/insert', ['success'=>$success]);
    }

    public function delete(Request $request)
    {
        imamJumatModel::where('id', $request->id)
        ->update(['StatusDelete'=>'1']);
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
        $data = imamJumatModel::where('id', $request->id)->firstorfail();
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
        imamJumatModel::where('id', $request->id)
        ->update([
            'JumatKe'=> $request->JumatKe,
            'Tanggal'=> $request->Tanggal,
            'Imam'=> $request->Imam,
            'Asal'=> $request->Asal,
            'Muadzin'=> $request->Muadzin
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
