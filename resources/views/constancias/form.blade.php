<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->

<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Matricula">{{'Matricula'}}</label>
<input  class="form-control" type="text" name="Matricula" id="Matricula" value="{{isset ($cons->Matricula)?$cons->Matricula:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($cons->Nombre_alumno)?$cons->Nombre_alumno:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Materias">{{'Materias'}}</label>
<input  class="form-control"  type="text" name="Materias" id="Materias" value="{{isset ($cons->Materias)?$cons->Materias:''}}" >
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Cal">{{'Calificacion'}}</label>
<input  class="form-control"  type="text" name="Cal" id="CaL" value="{{isset ($cons->Cal)?$cons->Cal:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Fecha">{{'Fecha'}}</label>
<input   class="form-control" type="text" name="Fecha" id="Fecha" value="{{isset ($cons->Fecha)?$cons->Fecha:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="carrera">{{'Carrera'}}</label>
<input   class="form-control" type="text" name="carrera" id="carrera" value="{{isset ($cons->carrera)?$cons->carrera:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="ciclo">{{'Ciclo escolar'}}</label>
<input   class="form-control" type="text" name="ciclo" id="ciclo" value="{{isset ($cons->ciclo)?$cons->ciclo:''}}">
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacioncons'?'Agregar Alumno':'Modificar Alumno'}}">