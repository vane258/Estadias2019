<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaAsistencia extends Model
{
    //funcion de scope que ayuda a el filtrado y la busqueda busca deacuerdo a lo que se introduzca en la 
//vista y muestra las coincidencias que se encuentren dependiendo el campo por el que tu desees buscar.
    protected $fillable=['Nombre_maestro'];

    public function scopeNombre_maestro($query ,$Nombre_maestro){
        if($Nombre_maestro)
        return $query->where('Nombre_maestro','LIKE',"%$Nombre_maestro%");

    }
}
