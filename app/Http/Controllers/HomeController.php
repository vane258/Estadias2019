<?php

namespace App\Http\Controllers;
use App\Aspirantes;
use App\kardex;
use App\Historial;
use App\Certificado;
use App\MateriasReprobadas;

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
    //esta funcion es la que se mandara llamar y la que dice
    // que es lo que se muestra en el home o en la vista al momento de 
    // ingresar al sistema y/o modulo 
    public function index()
    {
        //hace el conteo de los registros en cada vista y los muestra en la vista home
        // esta funcion se manda llamar el home.blade que es la vista que consume este controlador
        $countAspirantes = Aspirantes::count();
        $countkardex = kardex::count();
        $countHistorial = Historial::count();
        $countCertificado = Certificado::count(); 
        $countMateriasReprobadas = MateriasReprobadas::count();
       
        return view('dashboard',compact(['countAspirantes','countkardex', 'countHistorial','countCertificado','countMateriasReprobadas']));
       
    }
}
