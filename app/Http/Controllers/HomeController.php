<?php

namespace App\Http\Controllers;
use App\Aspirantes;
use App\kardex;
use App\Historial;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $countAspirantes = Aspirantes::count();
        $countkardex = kardex::count();
        $countHistorial = Historial::count();
       
        return view('dashboard',compact(['countAspirantes','countkardex', 'countHistorial']));
       
    }
}
