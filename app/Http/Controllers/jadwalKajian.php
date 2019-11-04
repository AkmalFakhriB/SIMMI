<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalKajian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jadwalKajian/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function show(jadwalKajian $jadwalKajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwalKajian $jadwalKajian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwalKajian $jadwalKajian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jadwalKajian  $jadwalKajian
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwalKajian $jadwalKajian)
    {
        //
    }
}
