<?php

namespace App\Http\Controllers;

use App\constancias;
use Illuminate\Http\Request;

class constanciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)


    {
     // esto pide una respuesta a la vista del tipo get para obtener el campo por el cual
    //nosotros deseamos hacer la busqueda.
    $nombre_alumno=$request->get('Nombre_alumno');
     // se le pasa el arreglo de todos los datos a la vista de la Bd y se ordenan ascendentemente 
    $datos['cons']= constancias::orderBy('Nombre_alumno','ASC')
    ->nombre_alumno($nombre_alumno)
        //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index

    ->paginate(5);
      //regresa la vista donde se visualizan los datos

    return view('constancias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna a la vista create.blade.php dentro de la carpeta de este reporte 
        return view ('/constancias.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $campos=[
         // se hace un array con todos los campos que se van a insertar en la bd y se le pone
        // una condicion de require para que se obligatorio introducir valores en todos los campos del
        // formulario
         'Nombre_alumno' =>'required|string|max:100',
         'Materias'=>'required|string|max:100',
         'Cal'=>'required|string|max:100',
         'Fecha'=>'required|string|max:100'
         
        
       ];
              // es una variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir

       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $cons=request()->except('_token','_method');
        constancias::insert($cons);
        return redirect('constancias')->with('Mensaje','Alumno agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AlumnosBaja $alumnosBaja
     * @return \Illuminate\Http\Response
     */
    public function show(constancias $constancias)
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
 $cons=constancias::findorfail($id);
return view('constancias.edit',compact('cons'));
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
        // el parametro para decidir es el id.
        $cons=request()->except(['_token','_method']);
        constancias::where('id','=',$id)->update($cons);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('constancias')->with('Mensaje','Alumno modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\constancias $constancias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     // funcion que elimina completamente toda la informacion referente a un id o fila 
     // segun le hayamos dado la instruccion.
        $cons=constancias::findorfail($id);
        constancias::destroy($id);
        return redirect('constancias')->with('Mensaje','Alumno Eliminada con Exito');
        //
    }
}