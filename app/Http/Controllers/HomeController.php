<?php

namespace App\Http\Controllers;

use App\beritaModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = beritaModel::where('post_status', '0');
        return view('home', ['data'=>$data]);
    }
}
