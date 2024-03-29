<?php

namespace App\Http\Controllers;

use App\Aspirantes;
use Illuminate\Http\Request;

class AspirantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)


    {
        // esto pide una respuesta a la vista del tipo get para obtener el campo por el cual
        //nosotros deseamos hacer la busqueda
    
    $nombre_alumno=$request->get('Nombre_alumno');
            //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index

    $datos['aspirante']= Aspirantes::orderBy('Nombre_alumno','ASC')
    ->nombre_alumno($nombre_alumno)
    ->paginate(5);
    return view('Aspirantes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             //regresa la vista o formulario de crear

        return view ('/Aspirantes.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           // se hace un array con todos los campos que se van a insertar en la bd y se le pone
        // una condicion de require para que se obligatorio introducir valores en todos los campos del
        // formulario
       $campos=[
         'Matricula' =>'required|string|max:100',
         'Nombre_alumno' =>'required|string|max:100',
         'carrera'=>'required|string|max:100',
         'f_nac'=>'required|string|max:100',
         'edad'=>'required|string|max:100',
         'folio_ceneval'=>'required|string|max:100',
         'pts_ceneval'=>'required|string|max:100',
         'genero'=>'required|string|max:100',
         'edoNacimiento'=>'required|string|max:100',
         'telefono'=>'required|string|max:100',
         'mpio'=>'required|string|max:100',
         'escp'=>'required|string|max:100',
         'mescp'=>'required|string|max:100',
         'edo'=>'required|string|max:100',
         
        
       ];
                     // es eu variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir

       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $aspirante=request()->except('_token','_method');
        Aspirantes::insert($aspirante);
        return redirect('Aspirantes')->with('Mensaje','Aspirante agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aspirantes $Aspirantes
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirantes $Aspirantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aspirantes $Aspirantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
// es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar

        $aspirante=Aspirantes::findorfail($id);
        return view('Aspirantes.edit',compact('aspirante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlumnosBaja $AlumnosBaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
          // es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
        // el parametro para decidir es el id 
        $aspirante=request()->except(['_token','_method']);
        Aspirantes::where('id','=',$id)->update($aspirante);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('Aspirantes')->with('Mensaje','Aspirante modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aspirantes $Aspirantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // funcion que elimina completamente toda la informacion referente a un id o fila 
        // segun le hayamos dado la instruccion.
        $aspirante=Aspirantes::findorfail($id);
        Aspirantes::destroy($id);
        return redirect('Aspirantes')->with('Mensaje','Aspirante Eliminado con Exito');
        //
    }
}