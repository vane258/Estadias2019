<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->



<div class="container">
<div class="form-group">

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="matricula">{{'Matricula'}}</label>
<input  class="form-control" type="text" name="matricula" id="matricula" value="{{isset ($asignaturas->matricula)?$asignaturas->matricula:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre Alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($asignaturas->Nombre_alumno)?$asignaturas->Nombre_alumno:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_Materia">{{'Nombre Materia'}}</label>
<input  class="form-control" type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($asignaturas->Nombre_Materia)?$asignaturas->Nombre_Materia:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Generacion">{{'Generacion'}}</label>
<input   class="form-control" type="text" name="Generacion" id="Generacion" value="{{isset ($asignaturas->Generacion)?$asignaturas->Generacion:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'plan_estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($asignaturas->plan_estudios)?$asignaturas->plan_estudios:''}}" >
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="sede">{{'sede'}}</label>
<input  class="form-control"  type="text" name="sede" id="sede" value="{{isset ($asignaturas->sede)?$asignaturas->sede:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="cursando_cuatrimestre">{{'cursando_cuatrimestre'}}</label>
<input  class="form-control"  type="text" name="cursando_cuatrimestre" id="cursando_cuatrimestre" value="{{isset ($asignaturas->cursando_cuatrimestre)?$asignaturas->cursando_cuatrimestre:''}}" >
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionasignaturas'?'Agregar Asignatura':'Modificar Asignatura'}}">

</div>
</div>
</div>