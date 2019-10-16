<?php

namespace App\Http\Controllers;

use App\HorarioAulas;
use Illuminate\Http\Request;


class HorarioAulasController extends Controller
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
    $nombre_aula=$request->get('Nombre_aula');
    // se le pasa el arreglo de todos los datos a la vista de la Bd y se ordenan ascendentemente 
    $datos['aula']= HorarioAulas::orderBy('Nombre_aula','ASC')
    ->nombre_aula($nombre_aula)
     //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
    ->paginate(5);
   //regresa la vista donde se visualizan los datos
   return view('HorarioAulas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //retorna a la vista create.blade.php dentro de la carpeta de este reporte 
         return view ('/HorarioAulas.create');
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
        'Nombre_aula'=>'required|string|max:100',
         'dia' =>'required|string|max:100',
         'hora' =>'required|string|max:100',
        
       ];
       // es una variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $aula=request()->except('_token','_method');
        HorarioAulas::insert($aula);
        return redirect('HorarioAulas')->with('Mensaje','candidato agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HorarioAula  $HorarioAula
     * @return \Illuminate\Http\Response
     */
    public function show(HorarioAulas $HorarioAulas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HorarioAulas  $HorarioAulas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {// es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar
        $aula=HorarioAulas::findorfail($id);
        return view('HorarioAulas.edit',compact('aula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HorarioAula  $HorarioAula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {// es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
        // el parametro para decidir es el id.
        $aula=request()->except(['_token','_method']);
        HorarioAulas::where('id','=',$id)->update($aula);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('HorarioAulas')->with('Mensaje','Aula modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HorarioAulas $ HorarioAulas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     // funcion que elimina completamente toda la informacion referente a un id o fila 
     // segun le hayamos dado la instruccion.
        $aula=HorarioAulas::findorfail($id);
        HorarioAulas::destroy($id);
        return redirect('HorarioAulas')->with('Mensaje','Aula Eliminada con Exito');
        //
    }
}
