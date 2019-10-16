<!-- comienza el doc HTML dentro del cual va el diseno de la vista del reporte -->
<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial;
  border-collapse: black 10px;
  width:100%;
}
td,th{
  border:1px solid #070707;
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
.oval {
   width: 90px;
    height: 160px;
     background:white;
     border-radius: 45px;
     border:#070707;
     
            }


table {
margin: auto;
}
</style>
</head>
<body>

<!--son los div que van en la cabecera del reporte en formato pdf -->
<h2 class="center"  >Universidad Politecnica de Victoria</h2>

<p style="text-align:center">
<label for="nombre_alumno" id="nombre_alumno">CERTIFICADO N.- :</label>
<br>

<label for="nombre_alumno" id="nombre_alumno"> FECHA:</label>
<br>
<div class="oval" style="border:1px solid #070707"></div>
<P> Certifica que la(el)C. <<input class="form-control" type="text" name="">
<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
acredito el <input  type="text" name="Nombre_alumno" id="Nombre_alumno">% de las asignaturas
que integran el plan de estudios de la carrera de:<input  type="text" name="Nombre_alumno" id="Nombre_alumno">
consta del archivo escolar,en el periodo del mes de <input  type="text" name="Nombre_alumno" id="Nombre_alumno">
al mes de <input  type="text" name="Nombre_alumno" id="Nombre_alumno"> obteniendo los resultados que a continuacion se indican.
</p>


<!--inicia la tabla de donde se cargan los datos de la bd -->

<table cellspacing="0" cellpadding="8" >
<tr>
   <th>Id Aula</th>
   <th>Nombre Materia</th>
   <th>Nivel de dominio con letra</th>
   <th>Calificacion</th>
   <th>Creditos</th>
   <th>Cuatrimestre</th>
   </tr>
   <!--ciclo que recorre toda la tabla  y muestra cada uno de los registros
   de la bd en la tabla del reporte -->

   @foreach($baja AS $c)
   <tr>
   <td>{{$c->id}}</td>
   <td>{{$c->Nombre_Materia}}</td>
   <td>{{$c->Nd}}</td>
   <td>{{$c->cal}}</td>

   <td>{{$c->creditos}}</td>
   <td>{{$c->cuatrimestre}}</td>

    </tr>
    @endforeach
 
   </table>

   <p style="text-align:center">
<label for="nombre_alumno" id="nombre_alumno">FIRMA DEL ALUMNO</label>
</p>
<BR>
<p style="text-align:center">
<label for="nombre_alumno" id="nombre_alumno">MATRICULA</label>

</p>

   </body>
   </html>