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
		$idproducto=$_POST['idproducto'];    	// Variable que recoge el...
		$nombre_producto=$_POST['nombre_producto'];    	// Variable que recoge el...	
		$imagen=$_POST['imagen']; 		// Variable que recoge el...
		$peso_productokg=$_POST['peso_productokg'];      	// Variable que recoge el...
        $precio_producto€=$_POST['precio_producto€'];      	// Variable que recoge el...
        $existencias=$_POST['existencias'];      	// Variable que recoge el...
        $Proveedor_idproveedor=$_POST['Proveedor_idproveedor'];      	// Variable que recoge el...
        $Categoria_idcategoria=$_POST['Categoria_idcategoria'];      	// Variable que recoge el...

		// Muestra los datos recogidos durante la fase de desarrollo. 
		// Luego se ocultan o comentan estas líneas
		echo "<hr>Para comprobar muestra los datos recogidos: ";
		echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
		echo "<tr><td>idproducto: </td><td><b>$idproducto</b></td></tr>";
		echo "<tr><td>nombre_producto: </td><td><b>",$nombre_producto,"</b></td></tr>";
		echo "<tr><td>imagen: </td><td><b>",$imagen,"</b></td></tr>";
		echo "<tr><td>peso_productokg: </td><td><b>",$peso_productokg,"</b></td></tr>";
        echo "<tr><td>precio_producto€: </td><td><b>",$precio_producto€,"</b></td></tr>";
        echo "<tr><td>existencias: </td><td><b>",$existencias,"</b></td></tr>";
        echo "<tr><td>Proveedor_idproveedor: </td><td><b>",$Proveedor_idproveedor,"</b></td></tr>";
        echo "<tr><td>Categoria_idcategoria: </td><td><b>",$Categoria_idcategoria,"</b></td></tr>";
		echo "</table>";
   
		// Indica la tabla sobre la que va a realizar la operación de alta
		$tabla="producto"; // Entre comillas indicamos el nombre de la tabla
		
		// Construye la sentencia de inserción de los datos
		$sentencia="INSERT INTO $tabla (idproducto, nombre_producto, imagen, peso_productokg, precio_producto€, existencias, Proveedor_idproveedor, Categoria_idcategoria) VALUES ('$idproducto','$nombre_producto','$imagen','$peso_productokg', '$precio_producto€', '$existencias', '$Proveedor_idproveedor', '$Categoria_idcategoria');";
		// Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
		//echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

		// A continuación ejecuta la sentencia
		 if (mysqli_query($c,$sentencia)) {			 
			 echo "<h2>Confirmada Alta como del registro: ".$idproducto." - ".$nombre_producto." - ".$imagen." - ".$peso_productokg." - ".$precio_producto€." - ".$existencias." - ".$Proveedor_idproveedor." - ".$Categoria_idcategoria."</h2>";
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
