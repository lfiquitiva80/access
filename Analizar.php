<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<center>

<div class="jumbotron">
  <h1>OBSERVATORIO COLOMBIANO DE CIENCIA Y TECNOLOGIA</h1>
  <p>Test de Estilo de vida y trabajos

  <p>


</div>
<link rel="stylesheet" href="css/bootstrap.min.css"">
	

	<?php 




/*=SI(Y(AE2>=18;AE2<=22);"De 18 a 22 Puntos:  Llevas un estilo de vida sano y estas disfrutando de los beneficios que ello aporta. Ayuda a otras personas que quieran mejorar sus hábitos de salud, pero cuidado: hazlo con mucha delicadeza  y consideración.";SI(Y(AE2>=11;AE2<=17);"De 11 a 17 Puntos:  Lo haces casi todo bien, seguramente disfrutaras de una vida sana, pero aún hay aspectos en lo que puedes mejorar. Sigue así  y procura enriquecer tu estilo de vida con nuevos hábitos saludables.";SI(Y(AE2>=0;AE2<=10);"De 0 a 10 Puntos:  Debes recapacitar seriamente sobre algunos de los hábitos y costumbres  que té están restando salud y vitalidad. Con unos cuantos cambios podrías obtener grandes Resultados. Inténtalo.";"De -11 a -1 Puntos:  Necesita hacer ajustes en tu estilo de vida. Aplicando las recomendaciones  de esta campaña podrás prevenir la aparición de enfermedades y mejorar la calidad de vida")))*/

 ?>






<div class="container">
  <h2>REVISE SU RESULTADO</h2>
  <!-- Trigger the modal with a button -->
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click aqui!!!!</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Resultado de las preguntas realizadas</h4>
        </div>
       <div class="modal-body">
          <p>

          <?php

$seccionPrimera = array();
$seccionSegunda = array();

for ($i = 1; $i <= 11; $i++) {
    
    $a="Seccion".$i;
    $seccionPrimera[$i]=$_POST[$a];
    
}


echo "<p>";

for ($i = 12; $i <= 22; $i++) {
    
    $a="Seccion".$i;
    $seccionSegunda[$i]=$_POST[$a];
    
}

$y=0;
$z=0;
foreach($seccionPrimera as $resultado1) 
	{

		if ($resultado1=="Si") {
			$y++;

			
		} else {
			$z++;
			
		}
		
	

	}

	//echo "El numero de Si de la primera Seccion son :".$y."<br>";
	//echo "El numero de No son :".$z."<br>";

	$y=$y*2;

$x=0;
$w=0;
foreach($seccionSegunda as $resultado2) 
	{

		if ($resultado2=="Si") {
			$x++;

			
		} else {
			$w++;
			
		}
		
	

	}

	//echo "El numero de Si de la Segunda Seccion son :".$x."<br>";
	//echo "El numero de No son :".$z."<br>";

	$resultadoFinal=$y-$x;

	//Echo "Su resultado Final es :".$y."Puntos Menos (-) ".$x."Puntos es igual a : ".$resultadoFinal."Puntos <br>";
  Echo "<H1><B>Su resultado Final es :".$resultadoFinal." Puntos <br></H1></B>";

	echo "<hr>";

if ($resultadoFinal>=18 && $resultadoFinal<=22 ) {
	
	echo "<H2>De 18 a 22 Puntos:  Llevas un estilo de vida sano y estas disfrutando de los beneficios que ello aporta. Ayuda a otras personas que quieran mejorar sus hábitos de salud, pero cuidado: hazlo con mucha delicadeza  y consideración.</H2>";
    }
	elseif ($resultadoFinal>=11 && $resultadoFinal<=17 ) {
		echo "<H2>De 11 a 17 Puntos:  Lo haces casi todo bien, seguramente disfrutaras de una vida sana, pero aún hay aspectos en lo que puedes mejorar. Sigue así  y procura enriquecer tu estilo de vida con nuevos hábitos saludables.</H2>";
	}

    elseif ($resultadoFinal>=0 && $resultadoFinal<=10 ) {
		echo "<H2>De 0 a 10 Puntos:  Debes recapacitar seriamente sobre algunos de los hábitos y costumbres  que té están restando salud y vitalidad. Con unos cuantos cambios podrías obtener grandes Resultados. Inténtalo.</H2>";
	}


 else {

	echo "<H2>De -11 a -1 Puntos:  Necesita hacer ajustes en tu estilo de vida. Aplicando las recomendaciones  de esta campaña podrás prevenir la aparición de enfermedades y mejorar la calidad de vida</H2>";
};

?>
<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('Localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
//echo '<p>Se Conecto exitosamente a la BD';
mysql_select_db('bd_estilos') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM respuestas';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

/* Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";*/


$sql="INSERT INTO `respuestas`(`Seccion 1`, `Seccion 2`, `Seccion 3`, `Seccion 4`, `Seccion 5`, `Seccion 6`, `Seccion 7`, `Seccion 8`, `Seccion 9`, `Seccion 10`, `Seccion 11`, `Seccion 12`, `Seccion 13`, `Seccion 14`, `Seccion 15`, `Seccion 16`, `Seccion 17`, `Seccion 18`, `Seccion 19`, `Seccion 20`, `Seccion 21`, `Seccion 22`) VALUES ('$_POST[Seccion1]','$_POST[Seccion2]','$_POST[Seccion3]','$_POST[Seccion4]','$_POST[Seccion5]','$_POST[Seccion6]','$_POST[Seccion7]','$_POST[Seccion8]','$_POST[Seccion9]','$_POST[Seccion10]','$_POST[Seccion11]','$_POST[Seccion12]','$_POST[Seccion13]','$_POST[Seccion14]','$_POST[Seccion15]','$_POST[Seccion16]','$_POST[Seccion17]','$_POST[Seccion18]','$_POST[Seccion19]','$_POST[Seccion20]','$_POST[Seccion21]',$resultadoFinal)";

/*($seccionPrimera[0],$seccionPrimera[1],$seccionPrimera[2],$seccionPrimera[3],$seccionPrimera[4],$seccionPrimera[5],$seccionPrimera[6],$seccionPrimera[7],$seccionPrimera[8],$seccionPrimera[9],$seccionPrimera[10],$seccionSegunda[0],$seccionSegunda[1],$seccionSegunda[2],$seccionSegunda[3],$seccionSegunda[4],$seccionSegunda[5],$seccionSegunda[6],$seccionSegunda[7],$seccionSegunda[8],$seccionSegunda[9],$resultadoFinal)*/

$resultInsert = mysql_query($sql); 
 
         if($resultInsert)
         {
            //echo "<p><strong>Se ingresaron los registros con exito</strong>. <br>";
         }
         else
         {
            echo "No se ingresaron los registros. <br>";
         }


// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>





          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</center>


</body>
</html>