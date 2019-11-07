<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->


<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="clave_aula">{{'Clave Aula'}}</label>
<input  class="form-control" type="text" name="clave_aula" id="clave_aula" value="{{isset ($aula->clave_aula)?$aula->clave_aula:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_aula">{{'Nombre Aula'}}</label>
<input  class="form-control" type="text" name="Nombre_aula" id="Nombre_aula" value="{{isset ($aula->Nombre_aula)?$aula->Nombre_aula:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="dia">{{'Dia'}}</label>
<input  class="form-control"  type="text" name="dia" id="dia" value="{{isset ($aula->dia)?$aula->dia:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="hora">{{'Hora'}}</label>
<input  class="form-control"  type="text" name="hora" id="hora" value="{{isset ($aula->hora)?$aula->hora:''}}" >
</div>
</div>

<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionaulas'?'Agregar Aulas':'Modificar Aula'}}">

