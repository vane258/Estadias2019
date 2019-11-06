<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->
 
<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Matricula">{{'Matricula'}}</label>
<input  class="form-control" type="text" name="Matricula" id="Matricula" value="{{isset ($baja->Matricula)?$baja->Matricula:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($baja->Nombre_alumno)?$baja->Nombre_alumno:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="fecha">{{'Fecha'}}</label>
<input   class="form-control" type="text" name="fecha" id="fecha" value="{{isset ($baja->fecha)?$baja->fecha:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Estatus">{{'Estatus'}}</label>
<input  class="form-control"  type="text" name="Estatus" id="Estatus" value="{{isset ($baja->Estatus)?$baja->Estatus:''}}" >
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Motivo">{{'Motivo'}}</label>
<input  class="form-control"  type="text" name="Motivo" id="Motivo" value="{{isset ($baja->Motivo)?$baja->Motivo:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Anotaciones">{{'Anotaciones'}}</label>
<input  class="form-control"  type="text" name="Anotaciones" id="Anotaciones" value="{{isset ($baja->Anotaciones)?$baja->Anotaciones:''}}" >
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionalumnos'?'Agregar Asignatura':'Modificar Asignatura'}}">
</div>
</div>
