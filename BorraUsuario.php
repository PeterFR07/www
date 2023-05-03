<?php        
// Recoge el identificador de la empresa seleccionada y enviada mediante método POST
$id=$_POST['codigo'];
// Invocamos el archivo con la conexión a la base de datos
require_once('marcosup.php');
if (mysqli_query($c,"DELETE FROM cliente WHERE idcliente='$id'"))
              {
			        //si ejecuta correctamente la sentencia de borrado recarga la página de Gestión
                          //header("Location: clientesgestion.php"); 
                            echo '<a href="clientesgestion.php" class="close">    
                                    Volver...
                                  </a>';
              }
?>	

