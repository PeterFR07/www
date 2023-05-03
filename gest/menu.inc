<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index.php">Inicio</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Tablas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="cliente.php">Cliente</a>
              <a class="dropdown-item" href="producto.php">Producto</a>
              <a class="dropdown-item" href="pedido.php">Pedido</a>
              <a class="dropdown-item" href="proveedor.php">Proveedor</a>
              <a class="dropdown-item" href="producto_has_pedido.php">Producto_has_pedido</a>
              <a class="dropdown-item" href="categoria.php">Categoria</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Vistas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="pedidos_detalles.php">Pedidos detalles</a>
              <a class="dropdown-item" href="productos_por_categoria.php">Productos por categoria</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Altas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="Alta-Formulario-Clientes.php">Alta Clientes</a>
              <a class="dropdown-item" href="Alta-Formulario-Pedidos.php">Alta Pedidos</a>
              <a class="dropdown-item" href="Alta-Formulario-Categoria.php">Alta Categoría</a>
              <a class="dropdown-item" href="Alta-Formulario-Productos.php">Alta Producto</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Gestion</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="clientesgestion.php">Gestion Clientes</a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="servicios.php">Servicios</a> </li>
          <li class="nav-item"> <a class="nav-link" href="contacto.php">Contacto</a> </li>
          <li class="nav-item"> <a class="nav-link" href="ayuda.php">Ayuda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"></a> </li>          
          <li class="nav-item"> <a class="nav-link" href="#">ENTRAR</a> </li>
        </ul>
          ';
		 
}
################################################
?>
