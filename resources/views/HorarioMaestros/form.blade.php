<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->


<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_Maestro">{{'Nombre Maestro'}}</label>
<input  class="form-control" type="text" name="Nombre_Maestro" id="Nombre_Maestro" value="{{isset ($maestro->Nombre_Maestro)?$maestro->Nombre_Maestro:''}}">

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="dia">{{'Dia'}}</label>
<input  class="form-control"  type="text" name="dia" id="dia" value="{{isset ($maestro->dia)?$maestro->dia:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="hora">{{'Hora'}}</label>
<input  class="form-control"  type="text" name="hora" id="hora" value="{{isset ($maestro->hora)?$maestro->hora:''}}" >
</div>
</div>

<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionmaestros'?'Agregar Maestro':'Modificar Maestro'}}">