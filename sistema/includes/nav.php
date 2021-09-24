<nav>
			<ul>
				<li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
				<?php 
					if($_SESSION['rol'] ==1 ){
				 ?>

				<li class="principal">
					<a href="#"><i class="fas fa-child"></i> Usuarios</a>
					<ul>
						<li><a href="registro_usuarios.php"><i class="fas fa-user-plus" _mstvisible="2"></i> Nuevo Usuario</a></li>
						<li><a href="lista_usuarios.php"><i class="fas fa-child"></i> Lista de Usuarios</a></li>
					</ul>
				</li>
			<?php } ?>
				<li class="principal">

					
					<a href="#"><i class="fas fa-child"></i>Clientes</a>
					<ul>
						<li><a href="registro_cliente.php"><i class="fas fa-user-plus" _mstvisible="2"></i>Nuevo Cliente</a></li>
						<li><a href="lista_clientes.php"><i class="fas fa-child"></i>Lista de Clientes</a></li>
					</ul>
				</li>


				<?php 
					if($_SESSION['rol'] ==1 || $_SESSION['rol'] ==2) {
				 ?>
				<li class="principal">
					<a href="#"><i class="far fa-building"></i>Proveedores</a>
					<ul>
						<li><a href="registro_proveedor.php"><i class="fas fa-user-plus" _mstvisible="2"></i>Nuevo Proveedor</a></li>
						<li><a href="lista_proveedor.php"><i class="fas fa-child"></i>Lista de Proveedores</a></li>
					</ul>
				</li>
				<?php } ?>
				<li class="principal">
					<a href="#"><i class="fas fa-cube"></i> Productos</a>
					<ul>
						<?php 
					if($_SESSION['rol'] ==1 || $_SESSION['rol'] ==2) {
				 ?>

						<li><a href="registro_producto.php">Nuevo Producto</a></li>
						<?php } ?>
						<li><a href="#">Lista de Productos</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Facturas</a>
					<ul>
						<li><a href="#">Nuevo Factura</a></li>
						<li><a href="#">Facturas</a></li>
					</ul>
				</li>
			</ul>
		</nav>