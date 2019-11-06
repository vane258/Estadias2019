<?php

namespace App\Http\Controllers;

use App\AlumnosBaja;
use Illuminate\Http\Request;

class AlumnosBajaController extends Controller
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
    // se le pasa el arreglo de todos los datos a la vista de la Bd y se ordenan ascendentemente 
    $datos['baja']= AlumnosBaja::orderBy('Nombre_alumno','ASC')
    ->nombre_alumno($nombre_alumno) 
    //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
    ->paginate(5);
    return view('AlumnosBaja.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //regresa la vista o formulario de crear
        return view ('/AlumnosBaja.create');
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
         'Estatus'=>'required|string|max:100',
         'Motivo'=>'required|string|max:100',
         'Anotaciones'=>'required|string|max:100'
         
        
       ];
       // es eu variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir
       $Mensaje=["required"=> 'El :attribute es requerido'];
       // se validan cada uno de los campos y el mensaje
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $baja=request()->except('_token','_method');
        // instruccion para insertar todos los datos del fromulario de la vista create en la bd y muestre 
        // un mensaje para saber que se introducieron correctamente
        AlumnosBaja::insert($baja);
        return redirect('AlumnosBaja')->with('Mensaje','Alumno agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AlumnosBaja $alumnosBaja
     * @return \Illuminate\Http\Response
     */
    public function show(AlumnosBaja $alumnosBaja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AlumnosBaja $alumnosBaja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar
        $baja=AlumnosBaja::findorfail($id);
        return view('AlumnosBaja.edit',compact('baja'));
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
        $baja=request()->except(['_token','_method']);
        AlumnosBaja::where('id','=',$id)->update($baja);
       
        return redirect('AlumnosBaja')->with('Mensaje','Alumno modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlumnosBaja $alumnosBaja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // funcion que elimina completamente toda la informacion referente a un id o fila 
        // segun le hayamos dado la instruccion.
        $baja=AlumnosBaja::findorfail($id);
        AlumnosBaja::destroy($id);
        return redirect('AlumnosBaja')->with('Mensaje','Alumno Eliminada con Exito');
        //
    }
}