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
    height: 140px;
     background:black;
     border-radius: 45px;
     border:#070707;
     
            }



            table {
margin: auto;
}
@page { margin: 200px 60px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT; }
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT;}
    #footer .page:after { content: counter(page, upper-roman); }
</style>
</head>
<body>

<!--son los div que van en la cabecera del reporte en formato pdf -->
<div id="header">
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
</div>
<p> <div class="oval"></div>  <P> Certifica que la(el)C. <b>{{$alumno->Nombre_alumno}}</b>
acredito el <b>{{$alumno->porcentaje}}%</b> de las asignaturas
que integran el plan de estudios de la carrera de:<b>{{$alumno->carrera}}</b>
 consta del archivo escolar,en el periodo del mes de, <b>{{$alumno->periodo}}</b>
 al mes de <b>{{$alumno->mes}} </b>obteniendo los resultados que a continuacion se indican.</p></p>



<!--inicia la tabla de donde se cargan los datos de la bd -->

<table cellspacing="0" cellpadding="8" >
<tr>
   
   <th>Nombre Materia</th>
   <th>Nivel de dominio con letra</th>
   <th>Calificacion</th>
   <th>Creditos</th>
   <th>Cuatrimestre</th>
   </tr>
   <!--ciclo que recorre toda la tabla  y muestra cada uno de los registros
   de la bd en la tabla del reporte -->

   @foreach($materias AS $c)
   <tr>
  
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