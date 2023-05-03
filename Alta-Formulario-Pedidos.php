<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de Pedidos</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="Alta-Pedido.php">
					<!-- Dato 1-->
					Id_pedido:<br>
					<input type="text" name="idpedido" size="5" value=""><br>
					<!-- Dato 2-->
					Fecha:<br>
					<input type="text" name="fecha" size="20" value=""><br>
					<!-- Dato 3-->
					Total:<br>
					<input type="text" name="total" size="20" value=""><br>
                    <!-- Dato 4-->
					Estado:<br>
					<input type="text" name="estado" size="20" value=""><br>
                    <!-- Dato 5-->
					Cantidad:<br>
					<input type="text" name="cantidad" size="20" value=""><br>
                    <!-- Dato 6-->
					Cliente_idcliente:<br>
					<input type="text" name="Cliente_idcliente" size="20" value=""><br>
                    					
					
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
