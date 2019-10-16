<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->
<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre_alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($base->Nombre_alumno)?$base->Nombre_alumno:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="plan_estudios">{{'Plan estudios'}}</label>
<input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($base->plan_estudios)?$base->plan_estudios:''}}" >
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="carrera">{{'Carrera'}}</label>
<input   class="form-control" type="text" name="carrera" id="carrera" value="{{isset ($base->carrera)?$base->carrera:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="campus">{{'campus'}}</label>
<input   class="form-control" type="text" name="campus" id="campus" value="{{isset ($base->campus)?$base->campus:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="genero">{{'genero'}}</label>
<input   class="form-control" type="text" name="genero" id="genero" value="{{isset ($base->genero)?$base->genero:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="generacion">{{'generacion'}}</label>
<input   class="form-control" type="text" name="generacion" id="generacion" value="{{isset ($base->generacion)?$base->generacion:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edoNacimiento">{{'Estado deNacimiento'}}</label>
<input   class="form-control" type="text" name="edoNacimiento" id="edoNacimiento" value="{{isset ($base->edoNacimiento)?$base->edoNacimiento:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Curp">{{'Curp'}}</label>
<input   class="form-control" type="text" name="Curp" id="Curp" value="{{isset ($base->Curp)?$base->Curp:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="nss">{{'nss'}}</label>
<input   class="form-control" type="text" name="nss" id="nss" value="{{isset ($base->nss)?$base->nss:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="f_nac">{{'Fecha de Nacimiento'}}</label>
<input   class="form-control" type="text" name="f_nac" id="f_nac" value="{{isset ($base->f_nac)?$base->f_nac:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="mc">{{'Municipio'}}</label>
<input   class="form-control" type="text" name="mc" id="mc" value="{{isset ($base->mc)?$base->mc:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edescp">{{'Edo. Escuela de Procedencia'}}</label>
<input   class="form-control" type="text" name="edescp" id="edescp" value="{{isset ($base->edescp)?$base->edescp:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="escp">{{'Escuela de Procedencia'}}</label>
<input   class="form-control" type="text" name="escp" id="escp" value="{{isset ($base->escp)?$base->escp:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edad">{{'Edad'}}</label>
<input   class="form-control" type="text" name="edad" id="edad" value="{{isset ($base->edad)?$base->edad:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Cursando">{{'Cursando'}}</label>
<input   class="form-control" type="text" name="Cursando" id="Cursando" value="{{isset ($base->Cursando)?$base->Cursando:''}}">
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionreportebase'?'Agregar Alumno':'Modificar Reporte'}}">


