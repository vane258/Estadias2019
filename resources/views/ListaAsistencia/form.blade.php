<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->

  
<div id= "app" class="container" >
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="clave">{{'Clave Maestro'}}</label>
<input  class="form-control" type="text" name="clave" id="clave" value="{{isset ($lista->clave)?$lista->clave:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_Maestro">{{'Nombre Maestro'}}</label>
<input  class="form-control" type="text" name="Nombre_Maestro" id="Nombre_Maestro" value="{{isset ($lista->Nombre_Maestro)?$lista->Nombre_Maestro:''}}">
</div>
<div id= "app" class="container" >
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="clave_materia">{{'Clave Materia'}}</label>
<input  class="form-control" type="text" name="clave_materia" id="clave_materia" value="{{isset ($lista->clave_materia)?$lista->clave_materia:''}}">
</div>
<div  id= "app" class="form-group" style="color:#ffffff">
<label  id= "app" class="control-label" for="Nombre_Materia">{{'Nombre Materia'}}</label>
<input  class="form-control"  type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($lista->Nombre_Materia)?$lista->Nombre_Materia:''}}" >
</div>
<div id= "app"  class="form-group" style="color:#ffffff">
<label class="control-label" for="curso">{{'Curso'}}</label>
<input  class="form-control"  type="text" name="curso" id="curso" value="{{isset ($lista->curso)?$lista->curso:''}}" >
</div>
<div  id= "app" class="form-group" style="color:#ffffff">
<label class="control-label" for="Periodo">{{'Periodo'}}</label>
<input  class="form-control"  type="text" name="Periodo" id="Periodo" value="{{isset ($lista->Periodo)?$lista->Periodo:''}}" >
</div>
<div  id= "app" class="form-group" style="color:#ffffff">
<label class="control-label" for="Grupo">{{'Grupo'}}</label>
<input  class="form-control"  type="text" name="Grupo" id="Grupo" value="{{isset ($lista->Grupo)?$lista->Grupo:''}}" >
</div>
<div id= "app"  class="form-group" style="color:#ffffff">
<label class="control-label" for="matricula">{{'Matricula'}}</label>
<input  class="form-control"  type="text" name="matricula" id="matricula" value="{{isset ($lista->matricula)?$lista->matricula:''}}" >
</div>
<div id= "app"  class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre Alumno'}}</label>
<input  class="form-control"  type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($lista->Nombre_alumno)?$lista->Nombre_alumno:''}}" >
</div>
</div>

<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionlista'?'Agregar lista':'Modificar lista'}}">




