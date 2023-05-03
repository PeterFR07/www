<?php        
// Recoge los datos a modificar
// Recoge todas las variables 
        $idcliente=$_POST['idcliente'];    
        $nombre_completo=$_POST['nombre_completo'];   
		$usuario=$_POST['usuario']; 
		$contraseña=$_POST['contraseña'];  
		$direccion=$_POST['direccion']; 
        $correo=$_POST['correo'];  
        $telefono=$_POST['telefono'];   

// Invocamos el archivo con la conexión a la base de datos
require_once('gest/conexion.php');
$sentencia="UPDATE cliente SET 
    nombre_completo='$nombre_completo', 
    usuario='$usuario',
    contraseña='$contraseña',
    direccion='$direccion', 
    correo='$correo', 
    telefono='$telefono'
        WHERE idcliente=$idcliente";

if (mysqli_query($c,$sentencia))
              {
			   //si ejecuta correctamente la sentencia de borrado recarga la página de Gestión
              //header("Location: clientesgestion.php");
              echo '<a href="clientesgestion.php" class="close">    
                            Volver...
                    </a>'; 
              }
?>	

