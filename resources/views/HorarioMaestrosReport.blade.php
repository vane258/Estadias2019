<!--Se extiende el diseno del admin a cada una de las vistas esto incluyendo el dashboard 
el cual debe estar en cada una de las vistas-->
<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  border-collapse: black 10 px;
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

@page { margin: 200px 60px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT; }

table {
margin: auto;
}
</style>
</head>
<!--son los div que van en la cabecera del reporte en formato pdf -->

<div id="header">
<img src="./images/logo.png" width="150" height="100" >
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Horario Maestros</h3>
</div>
<br>
<br>
<div> <b>Maestro:</b> {{$alumno->Nombre_Maestro}}
<div><b> Fecha de Impresion:</b>  @php echo date("d-m-Y"); @endphp
</div>
</div>
<!--  son espacios entre la cabecera y la tabla-->

<br>
<br>
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de la bd en-->
<table  cellspacing="0" cellpadding="8">
  <tr>
   <th>Clave Maestro</th>
   <th>Nombre Aula</th>
   <th>Dia</th>
   <th>Hora</th>
   </tr>
   <!-- ciclo que recorre y ayuda a mostrar todos los registros en la 
  tabla del reporte-->
   @foreach($materias AS $m)
   <tr>
   <td>{{$m->clave_maestro}}</td>
   <td>{{$m->Nombre_aula}}</td>
   <td>{{$m->dia}}</td>
   <td>{{$m->hora}}</td>

    </tr>
    @endforeach
   </table>
   

   </body>
   </html>