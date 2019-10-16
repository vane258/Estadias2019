<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->

<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($cons->Nombre_alumno)?$cons->Nombre_alumno:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="carrera">{{'Carrera'}}</label>
<input  class="form-control"  type="text" name="carrera" id="carrera" value="{{isset ($his->carrera)?$his->carrera:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'Plan de estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($his->plan_estudios)?$his->plan_estudios:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Prom_general">{{'Promedio General'}}</label>
<input  class="form-control"  type="text" name="Prom_general" id="Prom_general" value="{{isset ($his->Prom_general)?$his->prom_general:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="modalidad">{{'Modalidad'}}</label>
<input  class="form-control"  type="text" name="modalidad" id="modalidad" value="{{isset ($his->modalidad)?$his->modalidad:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="creditos">{{'Creditos Totales'}}</label>
<input  class="form-control"  type="text" name="creditos" id="creditos" value="{{isset ($his->creditos)?$his->creditos:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_Materia">{{'Materia'}}</label>
<input  class="form-control"  type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($his->Nombre_Materia)?$his->Nombre_Materia:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Clave_Materia">{{'Clave Materia'}}</label>
<input  class="form-control"  type="text" name="Clave_Materia" id="Clave_Materia" value="{{isset ($his->Clave_Materia)?$his->Clave_Materia:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="cuatrimestre">{{'Cuatrimestre'}}</label>
<input  class="form-control"  type="text" name="cuatrimestre" id="cuatrimestre" value="{{isset ($his->cuatrimestre)?$his->cuatrimestre:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="calificacion">{{'Calificacion'}}</label>
<input  class="form-control"  type="text" name="calificacion" id="calificacion" value="{{isset ($his->calificacion)?$his->calificacion:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="resultado">{{'Resultado'}}</label>
<input   class="form-control" type="text" name="resultado" id="resultado" value="{{isset ($his->resultado)?$his->resultado:''}}">
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="curso">{{'Curso'}}</label>
<input   class="form-control" type="text" name="curso" id="curso" value="{{isset ($his->curso)?$his->curso:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="creditos_materia">{{'Creditos Materia'}}</label>
<input  class="form-control"  type="text" name="creditos_materia" id="creditos_materia" value="{{isset ($his->creditos_materia)?$his->creditos_materia:''}}" >
</div>

<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionhis'?'Agregar Alumno':'Modificar Alumno'}}">