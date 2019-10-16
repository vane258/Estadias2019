<?php

namespace App\Http\Controllers;

use App\AspirantesGrafica;
use Illuminate\Http\Request;


class AspirantesGraficaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // es la funcion que ayudara a mostrar la informacion o la funcion que es llamada al momento
    // de que se ejecutab la vista de la grafica 
    public function index()
    { // mediante esto se declara cuales son los campos que se van a seleccionar mediante la consulta
        // de una tabla en especifico.
        $pastel=\DB::table('aspirantes')
        ->select(['Nombre_alumno','prom'])
     // se obtienen los datos mediante el metodo get 

        ->get();

// retorna la vista donde se mostrara la grafica y se le pasan los datos que se trajeron
// desde la bd  a la vista que nosotros tengamos para la misma.
    return view('AspirantesGrafica',['pastel'=>$pastel]);
    
    }

}