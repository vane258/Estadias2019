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
</tr >
</table>
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Departamento de Servicios Escolares</h3>
<p style="text-align:center">FICHA DE REGISTRO- NUEVO INGRESO</p>
</div>
<br>
<!-- es el formato del reporte divido en forms para que 
quede con buen estilo-->
<form style="border:1px solid #070707">
<h3 class="center" style="text-align:left">DATOS DE INGRESO</h3>
<p>
<label for="nombre_alumno" id="nombre_alumno">PROGRAMA ACADEMICO .- </label>
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Periodo de ingreso :</label>
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno" style="text-align:left">sede:</label> 
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
 <label style="text-align:center"> Matricula</label> 
 <input  type="text" name="Nombre_alumno" id="Nombre_alumno">
 <label style="text-align:right"> Generacion</label>

</p>
</form>
<br>
<form style="border:1px solid #070707">
<h3 class="center" style="text-align:left">DATOS PERSONALES</h3>
<p>
<label for="nombre_alumno" id="nombre_alumno">Alumno .-</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno" style="text-align:left">Fecha de Nacimiento:</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
  <label style="text-align:center"> Edad:</label>
  <input  type="text" name="Nombre_alumno" id="Nombre_alumno">
  <br>
   <label style="text-align:right"> Curp:</label>
   <input  type="text" name="Nombre_alumno" id="Nombre_alumno">
   <label style="text-align:right"> Sexo</label>
   <input  type="text" name="Nombre_alumno" id="Nombre_alumno">

</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Lugar de Nacimiento:</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
<label for="nombre_alumno" id="nombre_alumno">Estado Civil</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Domicilio:</label>
</p>

<p>
<label for="nombre_alumno" id="nombre_alumno">Correo Electronico:</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">IFE:</label>
</p>
<p>
<h3 class="center" style="text-align:left">REFERENCIAS</h3>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Actualmente trabaja?( )SI ( ) NO:</label> <label for="nombre_alumno" id="nombre_alumno">Lugar y horario laboral</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
</p>
<p>
<label for="nombre_alumno" id="nombre_alumno">Tiene hijos?( )SI ( ) NO:</label> 
</P>
<p>
<label for="nombre_alumno" id="nombre_alumno">Presenta alguna discapacidad?( )SI ( ) NO:</label> </label> <label for="nombre_alumno" id="nombre_alumno">Describa</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
</P>
<p>
<h3 class="center" style="text-align:left">DATOS DE ESCOLARIDAD</h3>
<label for="nombre_alumno" id="nombre_alumno">Institucion de procedencia</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
<label for="nombre_alumno" id="nombre_alumno">Domicilio de la institucion</label>

</p>

<p>
<label for="nombre_alumno" id="nombre_alumno">Anio de egreso</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
<label for="nombre_alumno" id="nombre_alumno">Area de egreso</label>
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
<br>
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