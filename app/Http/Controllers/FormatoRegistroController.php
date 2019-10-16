<?php

namespace App\Http\Controllers;

use App\FormatoRegistro;
use Illuminate\Http\Request;

class FormatoRegistroController extends Controller
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

    $datos['reg']= FormatoRegistro::orderBy('Nombre_alumno','ASC')
    ->nombre_alumno($nombre_alumno)
//con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
    ->paginate(5);
    //regresa la vista donde se visualizan los datos
    return view('FormatoRegistro.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    //retorna a la vista create.blade.php dentro de la carpeta de este reporte 
    {
        return view ('/FormatoRegistro.create');
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
        'id'=>'required|string|max:100',
         'Nombre_alumno'=>'required|string|max:100',
         'f_nac'=>'required|string|max:100',
         'edad'=>'required|string|max:100',
         'curp'=>'required|string|max:100',
         'sexo'=>'required|string|max:100',
         'LugarN'=>'required|string|max:100',
         'mpio'=>'required|string|max:100',
         'edo'=>'required|string|max:100',
         'estadoC'=>'required|string|max:100',
         'email'=>'required|string|max:100',
         'referencias'=>'required|string|max:100',
         'escp'=>'required|string|max:100',
         'domesc'=>'required|string|max:100',
         'area'=>'required|string|max:100',
         'prom'=>'required|string|max:100',
         'tel'=>'required|string|max:100',
         
       ];
       // es una variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $reg=request()->except('_token','_method');
        FormatoRegistro::insert($reg);
        return redirect('FormatoRegistro')->with('Mensaje','Alumno agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormatoRegistro $c
     * @return \Illuminate\Http\Response
     */
    public function show(FormatoRegistro $FormatoRegistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormatoRegistro $FormatoRegistro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar

        $reg=FormatoRegistro::findorfail($id);
        return view('.edit',compact('reg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormatoRegistro $FormatoRegistro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
        // el parametro para decidir es el id.
        $reg=request()->except(['_token','_method']);
        FormatoRegistro::where('id','=',$id)->update($reg);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('FormatoRegistro')->with('Mensaje','Alumno modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormatoRegistro $FormatoRegistro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // funcion que elimina completamente toda la informacion referente a un id o fila 
     // segun le hayamos dado la instruccion.
        $reg=FormatoRegistro::findorfail($id);
        FormatoRegistro::destroy($id);
        return redirect('FormatoRegistro')->with('Mensaje','Alumno Eliminada con Exito');
        //
    }
}