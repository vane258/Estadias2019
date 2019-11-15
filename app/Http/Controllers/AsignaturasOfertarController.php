<?php

namespace App\Http\Controllers;

use App\AsignaturasOfertar;
use Illuminate\Http\Request;

class AsignaturasOfertarController extends Controller
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
        $nombre_Materia=$request->get('Nombre_Materia');
        // se le pasa el arreglo de todos los datos a la vista de la Bd y se ordenan ascendentemente 

    $datos['asignaturas']= AsignaturasOfertar::orderBy('Nombre_alumno','ASC')
    ->nombre_Materia($nombre_Materia)
        //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index

    ->paginate(5);
    return view('AsignaturasOfertar.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        //regresa la vista o formulario de crear

        return view ('/AsignaturasOfertar.create');
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
        'clave_materia' =>'required|string|max:100',
         'Nombre_alumno' =>'required|string|max:100',
         'Nombre_Materia' =>'required|string|max:100',
         'Generacion' =>'required|string|max:100',
         'plan_estudios'=>'required|string|max:100',
         'sede'=>'required|string|max:100',
         'cursando_cuatrimestre'=>'required|string|max:100'
         
        
       ];
              // es eu variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir

       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $asignaturas=request()->except('_token','_method');
        AsignaturasOfertar::insert($asignaturas);
        return redirect('AsignaturasOfertar')->with('Mensaje','Asignatura agregadacon exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AsignaturasOfertar $asignaturasOfertar
     * @return \Illuminate\Http\Response
     */
    public function show(AsignaturasOfertar $asignaturasOfertar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsignaturasOfertar $asignaturasOfertar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                // es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar

        $asignaturas=AsignaturasOfertar::findorfail($id);
        return view('AsignaturasOfertar.edit',compact('asignaturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsignaturasOfertar  $asignaturasOfertar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
        // el parametro para decidir es el id 
        $asignaturas=request()->except(['_token','_method']);
        AsignaturasOfertar::where('id','=',$id)->update($asignaturas);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('AsignaturasOfertar')->with('Mensaje','Asignatura modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AsignaturasOfertar $asignaturasOfertar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // funcion que elimina completamente toda la informacion referente a un id o fila 
        // segun le hayamos dado la instruccion.
        $asignaturas=AsignaturasOfertars::findorfail($id);
        AsignaturasOfertar::destroy($id);
        return redirect('AsignaturasOfertar')->with('Mensaje','Asignatura Eliminada con Exito');
        //
    }
}