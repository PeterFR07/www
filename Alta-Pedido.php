<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Visor Alta de datos de Pedidos</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
		  <div class="text-center mx-auto col-10">
<?php			
		 // Todas las variables que ha enviado el Formulario
		$idpedido=$_POST['idpedido'];    	// Variable que recoge el...
		$fecha=$_POST['fecha'];    	// Variable que recoge el...	
		$total=$_POST['total']; 		// Variable que recoge el...
		$estado=$_POST['estado'];      	// Variable que recoge el...
        $cantidad=$_POST['cantidad'];      	// Variable que recoge el...
        $Cliente_idcliente=$_POST['Cliente_idcliente'];      	// Variable que recoge el...

		// Muestra los datos recogidos durante la fase de desarrollo. 
		// Luego se ocultan o comentan estas líneas
		echo "<hr>Para comprobar muestra los datos recogidos: ";
		echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
		echo "<tr><td>Id Pedido: </td><td><b>$idpedido</b></td></tr>";
		echo "<tr><td>Fecha: </td><td><b>",$fecha,"</b></td></tr>";
		echo "<tr><td>Total: </td><td><b>",$total,"</b></td></tr>";
		echo "<tr><td>Estado: </td><td><b>",$estado,"</b></td></tr>";
        echo "<tr><td>Cantidad: </td><td><b>",$cantidad,"</b></td></tr>";
        echo "<tr><td>Cliente_idcliente: </td><td><b>",$Cliente_idcliente,"</b></td></tr>";
		echo "</table>";
   
		// Indica la tabla sobre la que va a realizar la operación de alta
		$tabla="pedido"; // Entre comillas indicamos el nombre de la tabla
		
		// Construye la sentencia de inserción de los datos
		$sentencia="INSERT INTO $tabla (idpedido, fecha, total, estado, cantidad, Cliente_idcliente) VALUES ('$idpedido','$fecha','$total','$estado', '$cantidad', '$Cliente_idcliente');";
		// Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
		//echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

		// A continuación ejecuta la sentencia
		 if (mysqli_query($c,$sentencia)) {			 
			 echo "<h2>Confirmada Alta como del registro: ".$idpedido." - ".$fecha." - ".$total." - ".$estado." - ".$cantidad." - ".$Cliente_idcliente."</h2>";
		 }
		 else {
			 echo "<br><h2>No insertado. Compruebe errores en los datos de entrada.</h2>";
		 }	
?>
          </div>           
        </div> 
		<div class="row text-center">
		  <div class="col">
			<hr>	
		  </div>		
		</div>
      </div>
    </div>
<?php							 
// Cargamos el marco inferior de páginas
   require_once('marcoinf.php');		
?>
