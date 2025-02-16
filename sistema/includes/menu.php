<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-text mx-3">Distribuidora Santa Beatriz</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-hospital"></i>
			<span>Proveedores</span>
		</a>
		<div id="collapseProveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_proveedor.php">Nuevo Proveedor</a>
				<a class="collapse-item" href="lista_proveedor.php">Proveedores</a>
			</div>
		</div>
	</li>
	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecliente" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Clientes</span>
		</a>
		<div id="collapsecliente" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
			
				<a class="collapse-item" href="registro_cliente.php">Nuevo cliente</a>
				<a class="collapse-item" href="lista_cliente.php">Clientes</a>
			</div>
		</div>
	</li>
		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePrecio" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Precio Diario</span>
		</a>
		<div id="collapsePrecio" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
			
				<a class="collapse-item" href="registro_precios.php">Nuevo Precio</a>
				<a class="collapse-item" href="lista_precios.php">Precios</a>
			</div>
		</div>
	</li>
	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePedido" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Registro de Pedido</span>
		</a>
		<div id="collapsePedido" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
			
				<a class="collapse-item" href="registro_pedido.php">Nuevo Pedido</a>
				<a class="collapse-item" href="lista_pedido.php">Pedidos</a>
			</div>
		</div>
	</li>
	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Lista de Ventas</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="nueva_venta.php">Nueva venta</a>
				<a class="collapse-item" href="ventas.php">Ventas</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Productos Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Lista de Productos</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_producto.php">Nuevo Producto</a>
				<a class="collapse-item" href="lista_productos.php">Productos</a>
			</div>
		</div>
	</li>
<!-- Nav Item - Productos Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCuentas" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Lista de Cuentas</span>
		</a>
		<div id="collapseCuentas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
			
				<a class="collapse-item" href="registro_registrocuenta.php">Nuevo Registro de Cuenta</a>
				<a class="collapse-item" href="lista_registrocuenta.php">Lista de Cuentas</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepagoproveedor" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Lista de Pagos de proveedores</span>
		</a>
		<div id="collapsepagoproveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
			
				<a class="collapse-item" href="registro_registropagoproveedor.php">Nuevo Registro de pago </a>
				<a class="collapse-item" href="lista_registropagoproveedor.php">Lista de  pagos </a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagos" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Lista de pagos</span>
		</a>
		<div id="collapsePagos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
			
				<a class="collapse-item" href="registro_registropagos.php">Nuevo Registro de Pago</a>
				<a class="collapse-item" href="lista_registropagos.php">Lista  de pagos</a>
			</div>
		</div>
	</li>
<!-- Nav Item - Productos Collapse Menu -->
	<!-- Nav Item - Utilities Collapse Menu -->
	<?php if ($_SESSION['rol'] == 1) { ?>
		<!-- Nav Item - Usuarios Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-user"></i>
				<span>Lista de Usuarios</span>
			</a>
			<div id="collapseUsuarios" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="registro_usuario.php">Nuevo Usuario</a>
					<a class="collapse-item" href="lista_usuarios.php">Usuarios</a>
				</div>
			</div>
		</li>
	<?php } ?>

</ul>