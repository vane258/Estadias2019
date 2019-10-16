<?php

namespace App\Http\Controllers;

use App\AspirantesGraficaGenero;
use Illuminate\Http\Request;


class AspirantesGraficaGeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {// es la funcion que ayudara a mostrar la informacion o la funcion que es llamada al momento
    // de que se ejecutab la vista de la grafica 

        $pastel=\DB::table('aspirantes')
       ->select (['Nombre_alumno','pts_ceneval'])
       // se obtienen los datos mediante el metodo get 
       ->get();
   

   // retorna la vista donde se mostrara la grafica y se le pasan los datos que se trajeron
  // desde la bd  a la vista que nosotros tengamos para la misma.
    return view('AspirantesGraficaGenero',['pastel'=>$pastel]);
    
    }

}