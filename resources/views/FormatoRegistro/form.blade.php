<!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->


<div class="container">
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Matricula">{{'Matricula'}}</label>
<input  class="form-control" type="text" name="Matricula" id="Matricula" value="{{isset ($reg->Matricula)?$reg->Matricula:''}}">

<div class="form-group"style="color:#ffffff">
<label class="control-label" for="Nombre_alumno">{{'Nombre alumno'}}</label>
<input  class="form-control" type="text" name="Nombre_alumno" id="Nombre_alumno" value="{{isset ($reg->Nombre_alumno)?$reg->Nombre_alumno:''}}">


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="f_nac">{{'Fecha Nacimiento'}}</label>
<input  class="form-control"  type="text" name="f_nac" id="f_nac" value="{{isset ($reg->f_nac)?$reg->f_nac:''}}" >
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edad">{{'Edad'}}</label>
<input  class="form-control"  type="text" name="edad" id="edad" value="{{isset ($reg->edad)?$reg->edad:''}}" >
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Curp">{{'CURP'}}</label>
<input   class="form-control" type="text" name="Curp" id="Curp" value="{{isset ($reg->Curp)?$reg->Curp:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="sexo">{{'Sexo'}}</label>
<input   class="form-control" type="text" name="sexo" id="sexo" value="{{isset ($reg->sexo)?$reg->sexo:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="LugarN">{{'Lugar Nacimiento'}}</label>
<input   class="form-control" type="text" name="LugarN" id="LugarN" value="{{isset ($reg->LugarN)?$reg->LugarN:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="mpio">{{'Municipio Procedencia'}}</label>
<input   class="form-control" type="text" name="mpio" id="mpio" value="{{isset ($reg->mpio)?$reg->mpio:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="edo">{{'Estado Procedencia'}}</label>
<input   class="form-control" type="text" name="edo" id="edo" value="{{isset ($reg->edo)?$reg->edo:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="estadoC">{{'Estado Civil'}}</label>
<input   class="form-control" type="text" name="estadoC" id="estadoC" value="{{isset ($reg->estadoC)?$reg->estadoC:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="email">{{'Correo'}}</label>
<input   class="form-control" type="text" name="email" id="email" value="{{isset ($reg->email)?$reg->email:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="referencias">{{'Referencias'}}</label>
<input   class="form-control" type="text" name="referencias" id="referencias" value="{{isset ($reg->referencias)?$reg->referencias:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="escp">{{'Escuela de Procedencia'}}</label>
<input   class="form-control" type="text" name="escp" id="escp" value="{{isset ($reg->escp)?$reg->escp:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="domesc">{{'Domicilio Escuela'}}</label>
<input   class="form-control" type="text" name="domesc" id="domesc" value="{{isset ($reg->domesc)?$reg->domesc:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="area">{{'Area egreso'}}</label>
<input   class="form-control" type="text" name="area" id="area" value="{{isset ($reg->area)?$reg->area:''}}">
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="prom">{{'Promedio'}}</label>
<input   class="form-control" type="text" name="prom" id="prom" value="{{isset ($reg->prom)?$reg->prom:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="tel">{{'Telefono'}}</label>
<input   class="form-control" type="text" name="tel" id="tel" value="{{isset ($reg->tel)?$reg->tel:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="Periodo">{{'Periodo'}}</label>
<input   class="form-control" type="text" name="Periodo" id="Periodo" value="{{isset ($reg->Periodo)?$reg->Periodo:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="programa">{{'Programa Academico'}}</label>
<input   class="form-control" type="text" name="programa" id="programa" value="{{isset ($reg->programa)?$reg->programa:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="sede">{{'Sede'}}</label>
<input   class="form-control" type="text" name="sede" id="sede" value="{{isset ($reg->sede)?$reg->sede:''}}">
</div>
<div class="form-group" style="color:#ffffff">
<label class="control-label" for="generacion">{{'Generacion egreso'}}</label>
<input   class="form-control" type="text" name="generacion" id="generacion" value="{{isset ($reg->generacion)?$reg->generacion:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="dom">{{'Domicilio Personal'}}</label>
<input   class="form-control" type="text" name="dom" id="dom" value="{{isset ($reg->dom)?$reg->dom:''}}">
</div>


<div class="form-group" style="color:#ffffff">
<label class="control-label" for="ife">{{'No. de Identificacion'}}</label>
<input   class="form-control" type="text" name="ife" id="dom" value="{{isset ($reg->ife)?$reg->ife:''}}">
</div>

<div class="form-group" style="color:#ffffff">
<label class="control-label" for="egreso">{{'Año de Egreso'}}</label>
<input   class="form-control" type="text" name="egreso" id="egreso" value="{{isset ($reg->egreso)?$reg->egreso:''}}">
</div>







<a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
<input type="submit" class="btn btn-success " value ="{{$Modo=='creacionfor'?'Agregar Alumno':'Modificar Alumno'}}">