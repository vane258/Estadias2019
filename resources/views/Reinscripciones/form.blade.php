<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->
<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="matricula">{{'Matricula'}}</label>
<input  class="form-control" type="text" name="matricula" id="matricula" value="{{isset ($reis->matricula)?$reis->matricula:''}}">
</div>

<div class="form-group" style="color:#ffffff" >
<label class="control-label" for="carrera">{{'Carrera'}}</label>
<input  class="form-control" type="text" name="carrera" id="carrera" value="{{isset ($reis->carrera)?$reis->carrera:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'plan_estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($reis->plan_estudios)?$reis->plan_estudios:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre Alumno'}}</label>
<input  class="form-control"  type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($reis->Nombre_alumno)?$reis->Nombre_alumno:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="campus">{{'Campus'}}</label>
<input  class="form-control"  type="text" name="campus" id="campus" value="{{isset ($reis->campus)?$reis->campus:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="up">{{'Ultimo Promedio Obtenido'}}</label>
<input  class="form-control"  type="text" name="up" id="up" value="{{isset ($reis->up)?$reis->up:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="per">{{'Periodo'}}</label>
<input  class="form-control"  type="text" name="per" id="per" value="{{isset ($reis->per)?$reis->per:''}}" >
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionreis'?'Agregar Alumnos':'Modificar alumno'}}">

