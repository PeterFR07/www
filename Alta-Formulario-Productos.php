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
					Id_producto:<br>
					<input type="text" name="idcliente" size="5" value=""><br>
					<!-- Dato 2-->
					Nombre producto:<br>
					<input type="text" name="nombre_producto" size="20" value=""><br>
					<!-- Dato 3-->
					Imagen:<br>
					<input type="text" name="imagen" size="20" value=""><br>
                    <!-- Dato 4-->
					Peso producto:<br>
					<input type="text" name="peso_productokg" size="20" value=""><br>
                    <!-- Dato 5-->
					Precio producto:<br>
					<input type="text" name="precio_producto€" size="20" value=""><br>
                    <!-- Dato 6-->
					Existencias:<br>
					<input type="text" name="existencias" size="20" value=""><br>
                    <!-- Dato 7-->
					Proveedor_idproveedor:<br>
					<input type="text" name="Proveedor_idproveedor" size="20" value=""><br>
                    <!-- Dato 8-->
                    Categoria_idcategoria:<br>
					<input type="text" name="Categoria_idcategoria" size="20" value=""><br>
					
					
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
