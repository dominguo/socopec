<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\probleme;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problemes = probleme::where('active', 1);
        $problemes_top_5 = probleme::where('active', 1)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();     
        return view('home', ['problemes' => $problemes,'problemes_top_5' => $problemes_top_5]);
    }
}
