<?php
	require_once('marcosup.php');
	
?>
    <div class="py-2 bg-dark" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;  height: 600px;">
            <div class="row py-1 bg-dark text-info"> 		
                <div class="col-1">
                </div>
                <div class="col-11">
                    <br><h1>Modificar Usuario</h1>                     
    <?php
		// Recoge todas las variables 
		$ID=$_POST['codigo']; 
		
		// Busca los datos del usuario seleccionado
        $sentencia="select * from cliente where idcliente=$ID";

        // Recopilar las filas almacenadas en la tabla
		$resultado=mysqli_query($c,$sentencia);

		// Recorremos $resultado mostrando cada fila de la tabla
        while ($registro = mysqli_fetch_row($resultado)){
            // Construimos la entrada para cada fila de la tabla
            echo '<div class="col-md-8 col-sm-8">';
            echo '<form name="ficha" action="modificaUsuario.php" method="POST">';	
                echo "<table class='table table-sm text-info'> ";
                echo "<tr><td class='text-right text-warning'>ID_CLIENTE: </td><td><h5>",$registro[0],"</h5><input class='form-control' type='hidden' name='idcliente' value='$registro[0]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>NOMBRE: </td><td><input class='form-control' type='text' name='nombre_completo' size='20' value='$registro[1]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>USUSARIO: </td><td><input class='form-control' type='text' name='usuario' size='20' value='$registro[2]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>CONTRASEÑA: </td><td><input class='form-control' type='text' name='contraseña' size='40' value='$registro[3]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>DIRECCION: </td><td><input class='form-control' type='text' name='direccion' size='40' value='$registro[4]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>CORREO: </td><td><input class='form-control' type='text' name='correo' size='40' value='$registro[5]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>TELEFONO: </td><td><input class='form-control' type='text' name='telefono' size='40' value='$registro[6]'></td></tr>";

                //echo "<input class='form-control' type='text' name='nivel' size='4' value='$registro[4]'>";
                echo "</td></tr>";
		    echo "</table>";
            echo '</div>';					
        }
							
        // Muestra la sentencia de inserción que va a ejecutar
         //echo "<br>Sentencia:", $sentencia;
 
			// Cerramos la conexión con la base de datos
			mysqli_close($c);
		?>
            </div>
        </div>
        <div class="row py-1 bg-dark text-info">
            <div class="col-1 text-center">
            </div>
            <div class="col-3 text-center">
                    <input type="hidden" name="id" value="<?php echo $ID;?>">
                    <p class="close">Confirmar cambios
                    <input type="image" SRC="estilos/confirmar.jpg" name="Confirmar" height="30" ALT="Cambiar">
                    </p> 
                </form>
            </div>
            <div class="col-3 text-center"> 
                <form action="clientesgestion.php" method="post">
                    <p class="close">Cancelar
                    <input type="image" SRC="estilos/cancelar.png" name="cancelar" height="30" ALT="cancelar">
                    </p> 
                </form>
            </div> 
            <div class="col-5 text-center">
            </div>
        </div>    
    </div>
    <?php
            //Cargar el marco inferior
            require_once('marcoinf.php');
            // Fin del código PHP
		?>