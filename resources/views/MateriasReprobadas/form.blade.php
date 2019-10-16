<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->
<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre Alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($materias->Nombre_alumno)?$materias->Nombre_alumno:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="nombre_Materia">{{'Nombre Materia'}}</label>
<input   class="form-control" type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($materias->Nombre_Materia)?$materias->Nombre_Materia:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'Plan Estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($materias->plan_estudios)?$materias->plan_estudios:''}}" >

<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionalumnos'?'Agregar Alumnos':'Modificar alumno'}}">

