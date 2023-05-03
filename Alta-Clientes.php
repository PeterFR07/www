<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Visor Alta de datos de Cliente</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
		  <div class="text-center mx-auto col-10">
<?php			
		 // Todas las variables que ha enviado el Formulario
		$idcliente=$_POST['idcliente'];    	// Variable que recoge el...
		$nombre_completo=$_POST['nombre_completo'];    	// Variable que recoge el...	
		$usuario=$_POST['usuario']; 		// Variable que recoge el...
		$contraseña=$_POST['contraseña'];      	// Variable que recoge el...
        $direccion=$_POST['direccion'];      	// Variable que recoge el...
        $correo=$_POST['correo'];      	// Variable que recoge el...
        $telefono=$_POST['telefono'];      	// Variable que recoge el...

		// Muestra los datos recogidos durante la fase de desarrollo. 
		// Luego se ocultan o comentan estas líneas
		echo "<hr>Para comprobar muestra los datos recogidos: ";
		echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
		echo "<tr><td>Id Cliente: </td><td><b>$idcliente</b></td></tr>";
		echo "<tr><td>Nombre Completo: </td><td><b>",$nombre_completo,"</b></td></tr>";
		echo "<tr><td>Usuario: </td><td><b>",$usuario,"</b></td></tr>";
		echo "<tr><td>Contraseña: </td><td><b>",$contraseña,"</b></td></tr>";
        echo "<tr><td>Direccion: </td><td><b>",$direccion,"</b></td></tr>";
        echo "<tr><td>Correo: </td><td><b>",$correo,"</b></td></tr>";
        echo "<tr><td>Telefono: </td><td><b>",$telefono,"</b></td></tr>";
		echo "</table>";
   
		// Indica la tabla sobre la que va a realizar la operación de alta
		$tabla="cliente"; // Entre comillas indicamos el nombre de la tabla
		
		// Construye la sentencia de inserción de los datos
		$sentencia="INSERT INTO $tabla (idcliente, nombre_completo, usuario, contraseña, direccion, correo, telefono) VALUES ('$idcliente','$nombre_completo','$usuario','$contraseña', '$direccion', '$correo', '$telefono');";
		// Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
		//echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

		// A continuación ejecuta la sentencia
		 if (mysqli_query($c,$sentencia)) {			 
			 echo "<h2>Confirmada Alta como del registro: ".$idcliente." - ".$nombre_completo." - ".$usuario." - ".$contraseña." - ".$direccion." - ".$correo." - ".$telefono."</h2>";
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
