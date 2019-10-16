<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->

<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre Alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($kar->Nombre_alumno)?$kar->Nombre_alumno:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="carrera">{{'Carrera'}}</label>
<input  class="form-control"  type="text" name="carrera" id="carrera" value="{{isset ($kar->carrera)?$kar->carrera:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'Plan de Estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($kar->plan_estudios)?$kar->plan_estudios:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="promedio_gral">{{'Promedio General'}}</label>
<input  class="form-control"  type="text" name="promedio_gral" id="promedio_gral" value="{{isset ($kar->promedio_gral)?$kar->promedio_gral:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="creditos">{{'Creditos'}}</label>
<input  class="form-control"  type="text" name="creditos" id="promedio_gral" value="{{isset ($kar->creditos)?$kar->creditos:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="porcentaje_avance">{{'Porcentaje de Avance'}}</label>
<input  class="form-control"  type="text" name="porcentaje_avance" id="porcentaje_avance" value="{{isset ($kar->porcentaje_avance)?$kar->porcentaje_avance:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="id_Materia">{{'Clave de Materia'}}</label>
<input  class="form-control"  type="text" name="id_Materia" id="id_Materia" value="{{isset ($kar->id_Materia)?$kar->id_Materia:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_Materia">{{'Nombre de Materia'}}</label>
<input  class="form-control"  type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($kar->Nombre_Materia)?$kar->Nombre_Materia:''}}" >
</div>
<div class="form-group" style="color:#ffffff" >
<label class="control-label" for="Cal">{{'Calificacion'}}</label>
<input  class="form-control"  type="text" name="Cal" id="Cal" value="{{isset ($kar->Cal)?$kar->Cal:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Resultado">{{'Resultado'}}</label>
<input  class="form-control"  type="text" name="Resultado" id="Resultado" value="{{isset ($kar->Resultado)?$kar->Resultado:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="curso">{{'Curso'}}</label>
<input  class="form-control"  type="text" name="curso" id="curso" value="{{isset ($kar->curso)?$kar->curso:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="creditos_materia">{{'Creditos Materia'}}</label>
<input  class="form-control"  type="text" name="creditos_materia" id="creditos_materia" value="{{isset ($kar->creditos_materia)?$kar->creditos_materia:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="periodo">{{'Periodo'}}</label>
<input  class="form-control"  type="text" name="periodo" id="periodo" value="{{isset ($kar->periodo)?$kar->periodo:''}}" >
</div>


<a class="btn btn-primary" href="{{url('home')}}" >Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionkardex'?'Agregar Alumno':'Modificar Alumno'}}">