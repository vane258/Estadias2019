<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturasOfertar extends Model
{
    //funcion de scope que ayuda a el filtrado y la busqueda busca deacuerdo a lo que se introduzca en la 
//vista y muestra las coincidencias que se encuentren dependiendo el campo por el que tu desees buscar.
    protected $fillable=['Nombre_Materia'];

    public function scopeNombre_Materia($query ,$Nombre_Materia){
        if($Nombre_Materia)
        return $query->where('Nombre_Materia','LIKE',"%$Nombre_Materia%");

    }
}
