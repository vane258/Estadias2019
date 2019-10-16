<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportMaestrosController extends Controller
{
    //
    public function _construct(){
        $this->middleware('guest');
    }
    
    //esta funcion se encarga de pasar todos los datos de la bd (campos de una tabla especifica)  a la vista que
    //le hayamos indicado en $view la palabra make refiere a que se haga la vista con los datos que estamos seleccionando
    // con el select o mas bien que deposite esos datos dentro de la tabla en la vista que nosostros indiquemos
    
    public function generar(){
    $maestros=\DB::table('maestros_materias')
        ->select(['id','Nombre_maestro','plan_estudios','Nombre_Materia','capacidad','Total_alumnos','Recursamiento'])
        // obtiene los datos mediante el metodo get
        ->get();
        // carga la vista y pasa los parametros a la misma
       $view= \View::make('ReportMaestro',compact('maestros'))->render();
       $pdf1=\App::make('dompdf.wrapper');
       $pdf1->loadHTML($view);
       // retorna la vista
       return $pdf1->stream('informeMaestros','.pdf');
    
    }
    }
?>



