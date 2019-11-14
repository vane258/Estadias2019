<!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  border-collapse: collapse;
  width:100%;
}
td,th{
  border:1px solid #dddddd;
  <text-align:center></text-align:center>;
  padding:8px;
}

tr:nth-child(even){
  background-color:#dddddd;
}

h2.center{
  text-align: center;
  
}
h3.center{
  text-align: center;
}

.cuadrado {
  border:1px solid #070707;
  width:15%;
  height:0;
  padding-top:10%;
  position:left;
  background:white;
}
@page { margin: 200px 60px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT; }
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT;}
    #footer .page:after { content: counter(page, upper-roman); }

table {
margin: auto;
}
</style>
</head>
<!--son los div que van en la cabecera del reporte en formato pdf -->

<div id="header">
<table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logoG.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoS.png" width="50" height="30"></td>
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Departamento de Servicios Escolares</h3>
<p style="text-align:center">FICHA DE REGISTRO- NUEVO INGRESO</p>
</tr >
</table>
</div>

<br>

<!-- es el formato del reporte divido en forms para que 
quede con buen estilo-->
<form style="border:1px solid #070707">
<h3 class="center" style="text-align:left">DATOS DE INGRESO</h3>
<p>
<label for="nombre_alumno" id="nombre_alumno">Programa Academico. <b>{{$alumno->programa}} </b> </label>
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Periodo de ingreso: <b> {{$alumno->Periodo}}</b></label>
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno" style="align:left">sede: <b>{{$alumno->sede}}</b></label> 
 <label style="align:center"> Matricula <b>{{$alumno->Matricula}}</b></label> 
 <label style="align:right"> Generacion: <b>{{$alumno->generacion}}</b></label>
</p>
</form>
<br>
<form style="border:1px solid #070707">
<h3 class="center" style="text-align:left">DATOS PERSONALES</h3>
<p>
<label for="nombre_alumno" id="nombre_alumno">Alumno: <b>{{$alumno->Nombre_alumno}}</b> .</label>
<label for="nombre_alumno" id="nombre_alumno" style="text-align:left">Fecha de Nacimiento: <b>{{$alumno->f_nac}}</b></label>
<br>
<br>
  <label style="text-align:center"> Edad: <b>{{$alumno->edad}}</b></label>
 
   <label style="text-align:right"> Curp: <b>{{$alumno->Curp}}</b></label>

   <label style="text-align:right"> Sexo: <b>{{$alumno->sexo}}</b></label>
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Lugar de Nacimiento: <b>{{$alumno->LugarN}}</b></label>
<label for="nombre_alumno" id="nombre_alumno">Estado Civil: <b>{{$alumno->estadoC}}</b></label>
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Domicilio: <b>{{$alumno->dom}}</b></label>
</p>

<p>
<label for="nombre_alumno" id="nombre_alumno">Correo Electronico: <b>{{$alumno->email}}</b></label>

<label for="nombre_alumno" id="nombre_alumno">IFE: <b>{{$alumno->ife}}</b></label>
</p>
<p>
<h3 class="center" style="text-align:left">REFERENCIAS</h3>
<label for="nombre_alumno" id="nombre_alumno">  <b>{{$alumno->referencias}}</b></label>

</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Actualmente trabaja?( )SI ( ) NO:</label> <label for="nombre_alumno" id="nombre_alumno">Lugar y horario laboral</label>
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Tiene hijos?( )SI ( ) NO:</label> 
</P>
<p>
<label for="nombre_alumno" id="nombre_alumno">Presenta alguna discapacidad?( )SI ( ) NO:</label> </label> <label for="nombre_alumno" id="nombre_alumno">Describa</label>
</P>
<p>
<h3 class="center" style="text-align:left">DATOS DE ESCOLARIDAD</h3>
<label for="nombre_alumno" id="nombre_alumno">Institucion de procedencia : <b>{{$alumno->escp}}</b></label>
<br>
<label for="nombre_alumno" id="nombre_alumno">Domicilio de la institucion: <b>{{$alumno->domesc}}</b></label>

</p>

<p>
<label for="nombre_alumno" id="nombre_alumno">Anio de egreso : <b>{{$alumno->egreso}}</b></label>
<br>
<label for="nombre_alumno" id="nombre_alumno">Area de egreso: <b>{{$alumno->area}}</b></label>

</p>
<p style="text-align:center">

<br>
<label for="nombre_alumno" id="nombre_alumno" style="text-align: center">Firma de Alumno</label>

</p>
<div id="footer">
<table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logo.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoU.png" width="50" height="30"></td>
</tr >
</table>
</div>
</div>

   </body>
   </html>