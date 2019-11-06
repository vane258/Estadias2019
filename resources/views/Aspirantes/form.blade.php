<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->


<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Matricula">{{'Matricula'}}</label>
<input  class="form-control" type="text" name="Matricula" id="Matricula" value="{{isset ($aspirante->Nombre_alumno)?$aspirante->Matricula:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre Alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($aspirante->Nombre_alumno)?$aspirante->Nombre_alumno:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="carrera">{{'carrera'}}</label>
<input   class="form-control" type="text" name="carrera" id="carrera" value="{{isset ($aspirante->carrera)?$aspirante->carrera:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="f_nac">{{'Fecha de Nacimiento'}}</label>
<input   class="form-control" type="text" name="f_nac" id="f_nac" value="{{isset ($aspirante->f_nac)?$aspirante->f_nac:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edad">{{'Edad'}}</label>
<input   class="form-control" type="text" name="edad" id="edad" value="{{isset ($aspirante->edad)?$aspirante->edad:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="folio_ceneval">{{'Folio Ceneval'}}</label>
<input   class="form-control" type="text" name="folio_ceneval" id="folio_ceneval" value="{{isset ($aspirante->folio_ceneval)?$aspirante->folio_ceneval:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="pts_ceneval">{{'Puntos Ceneval'}}</label>
<input   class="form-control" type="text" name="pts_ceneval" id="pts_ceneval" value="{{isset ($aspirante->pts_ceneval)?$aspirante->pts_ceneval:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="genero">{{'Genero'}}</label>
<input   class="form-control" type="text" name="genero" id="genero" value="{{isset ($aspirante->genero)?$aspirante->genero:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edoNacimiento">{{'Estado de Nacimiento'}}</label>
<input   class="form-control" type="text" name="edoNacimiento" id="edoNacimiento" value="{{isset ($aspirante->edoNacimiento)?$aspirante->edoNacimiento:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="telefono">{{'Telefono'}}</label>
<input   class="form-control" type="text" name="telefono" id="telefono" value="{{isset ($aspirante->telefono)?$aspirante->telefono:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="mpio">{{'Municipio'}}</label>
<input   class="form-control" type="text" name="mpio" id="mc" value="{{isset ($aspirante->mpio)?$aspirante->mpio:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="escp">{{'Escuela de Procedencia'}}</label>
<input   class="form-control" type="text" name="escp" id="escp" value="{{isset ($aspirante->escp)?$aspirante->escp:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="mescp">{{'Municipio Escuela Procedencia'}}</label>
<input   class="form-control" type="text" name="mescp" id="mescp" value="{{isset ($aspirante->mescp)?$aspirante->mescp:''}}">
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edo">{{'Estado Bachillerato'}}</label>
<input   class="form-control" type="text" name="edo" id="edo" value="{{isset ($aspirante->edo)?$aspirante->edo:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="prom">{{'Promedio'}}</label>
<input   class="form-control" type="text" name="prom" id="prom" value="{{isset ($aspirante->prom)?$aspirante->prom:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="area">{{'Area de Egreso'}}</label>
<input   class="form-control" type="text" name="area" id="area" value="{{isset ($aspirante->area)?$aspirante->area:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="email">{{'Email'}}</label>
<input   class="form-control" type="text" name="email" id="email" value="{{isset ($aspirante->email)?$aspirante->email:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="sede">{{'Sede'}}</label>
<input   class="form-control" type="text" name="sede" id="sede" value="{{isset ($aspirante->sede)?$aspirante->sede:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="fexamen">{{'Fecha de Examen'}}</label>
<input   class="form-control" type="text" name="fexamen" id="fexamen" value="{{isset ($aspirante->fexamen)?$aspirante->fexamen:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="resultados">{{'Resultados'}}</label>
<input   class="form-control" type="text" name="resultados" id="resultados" value="{{isset ($aspirante->resultados)?$aspirante->resultados:''}}">
</div>
<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionaspirantes'?'Agregar Aspirante':'Modificar Aspirante'}}">

