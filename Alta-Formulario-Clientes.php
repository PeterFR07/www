<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de Cliente</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="Alta-Clientes.php">
					<!-- Dato 1-->
					Id_cliente:<br>
					<input type="text" name="idcliente" size="5" value=""><br>
					<!-- Dato 2-->
					Nombre completo:<br>
					<input type="text" name="nombre_completo" size="20" value=""><br>
					<!-- Dato 3-->
					Usuario:<br>
					<input type="text" name="usuario" size="20" value=""><br>
                    <!-- Dato 4-->
					Contraseña:<br>
					<input type="text" name="contraseña" size="20" value=""><br>
                    <!-- Dato 5-->
					Dirección:<br>
					<input type="text" name="direccion" size="20" value=""><br>
                    <!-- Dato 6-->
					Correo:<br>
					<input type="text" name="correo" size="20" value=""><br>
                    <!-- Dato 7-->
					Teléfono:<br>
					<input type="text" name="telefono" size="20" value=""><br>
					
					
					<!-- Botones del Formulario -->					
					<hr>
					<input type="submit" value="ENVIAR">
					- 
					<input type="reset" value="LIMPIAR">
				</form>
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
	require_once('marcoinf.php');
?>	
