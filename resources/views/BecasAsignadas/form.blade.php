<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->


<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre_alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($beca->Nombre_alumno)?$beca->Nombre_alumno:''}}">

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'plan_estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($beca->plan_estudios)?$beca->plan_estudios:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="carrera">{{'Carrera'}}</label>
<input  class="form-control"  type="text" name="carrera" id="carrera" value="{{isset ($beca->carrera)?$beca->carrera:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="sede">{{'Sede'}}</label>
<input   class="form-control" type="text" name="sede" id="sede" value="{{isset ($beca->sede)?$beca->sede:''}}">
</div>
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="genero">{{'Genero'}}</label>
<input  class="form-control"  type="text" name="genero" id="genero" value="{{isset ($beca->genero)?$beca->genero:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="generacion">{{'Generacion'}}</label>
<input  class="form-control"  type="text" name="generacion" id="generacion" value="{{isset ($beca->generacion)?$beca->generacion:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="tipo_beca">{{'Tipo de Beca'}}</label>
<input  class="form-control"  type="text" name="tipo_beca" id="tipo_beca" value="{{isset ($beca->tipo_beca)?$beca->tipo_beca:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="periodo_beca">{{'Periodo de Beca'}}</label>
<input  class="form-control"  type="text" name="periodo_beca" id="periodo_beca" value="{{isset ($beca->periodo_beca)?$beca->periodo_beca:''}}" >
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionbecas'?'Agregar Becas':'Modificar Becas'}}">

