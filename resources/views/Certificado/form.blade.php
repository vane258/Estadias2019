<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->


<div class="container" >
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Matricula">{{'Matricula'}}</label>
<input  class="form-control" type="text" name="Matricula" id="Matricula" value="{{isset ($cer->Matricula)?$cer->Matricula:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($cer->Nombre_alumno)?$cer->Nombre_alumno:''}}">

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Clave_Materia">{{'Clave Materia'}}</label>
<input  class="form-control"  type="text" name="Clave_Materia" id="Clave_Materia" value="{{isset ($cer->Clave_Materia)?$cer->Clave_Materia:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="nombre_Materia">{{'Nombre Materia'}}</label>
<input   class="form-control" type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($cer->Nombre_Materia)?$cer->Nombre_Materia:''}}">
</div>
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nd">{{'Nivel de dominio con Letra'}}</label>
<input  class="form-control"  type="text" name="Nd" id="Nd" value="{{isset ($cer->Nd)?$cer->Nd:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="cal">{{'Calificacion'}}</label>
<input  class="form-control"  type="text" name="cal" id="cal" value="{{isset ($cer->cal)?$cer->cal:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="creditos">{{'Creditos'}}</label>
<input  class="form-control"  type="text" name="creditos" id="creditos" value="{{isset ($cer->creditos)?$cer->creditos:''}}" >
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="cuatrimestre">{{'Cuatrimestre'}}</label>
<input  class="form-control"  type="text" name="cuatrimestre" id="cuatrimestre" value="{{isset ($cer->cuatrimestre)?$cer->cuatrimestre:''}}" >
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="carrera">{{'Carrera'}}</label>
<input  class="form-control"  type="text" name="carrera" id="carrera" value="{{isset ($cer->carrera)?$cer->carrera:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="periodo">{{'Periodo'}}</label>
<input  class="form-control"  type="text" name="periodo" id="periodo" value="{{isset ($cer->periodo)?$cer->periodo:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="mes">{{'Mes'}}</label>
<input  class="form-control"  type="text" name="mes" id="mes" value="{{isset ($cer->mes)?$cer->mes:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="porcentaje">{{'Porcentaje Avance'}}</label>
<input  class="form-control"  type="text" name="porcentaje" id="porcentaje" value="{{isset ($cer->porcentaje)?$cer->porcentaje:''}}" >
</div>

<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacioncer'?'Agregar Alumno':'Modificar Alumno'}}">

