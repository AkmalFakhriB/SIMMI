<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
