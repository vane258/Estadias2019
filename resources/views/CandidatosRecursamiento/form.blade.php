<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->

<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre_alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($recursamiento->Nombre_alumno)?$recursamiento->Nombre_alumno:''}}">

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'plan_estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($recursamiento->plan_estudios)?$recursamiento->plan_estudios:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="campus">{{'campus'}}</label>
<input  class="form-control"  type="text" name="campus" id="campus" value="{{isset ($recursamiento->campus)?$recursamiento->campus:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="nombre_Materia">{{'Nombre_Materia'}}</label>
<input   class="form-control" type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($recursamiento->Nombre_Materia)?$recursamiento->Nombre_Materia:''}}">
</div>
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_maestro">{{'Nombre_maestro'}}</label>
<input  class="form-control"  type="text" name="Nombre_maestro" id="Nombre_maestro" value="{{isset ($recursamiento->Nombre_maestro)?$recursamiento->Nombre_maestro:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Total_unidades">{{'Total_unidades'}}</label>
<input  class="form-control"  type="text" name="Total_unidades" id="Total_unidades" value="{{isset ($recursamiento->Total_unidades)?$recursamiento->Total_unidades:''}}" >
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacioncandidatos'?'Agregar Candidato':'Modificar Candidato'}}">

