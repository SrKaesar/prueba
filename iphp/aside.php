<?php include('idioma/cargar_idioma.php'); ?>
<nav id="menu-navegacion">
	<ul>
		<li><a href="customers.php" <?php if($option == 'customers') echo 'class="active"'; ?>><span class="fa fa-vcard"></span> <?php echo $aside['clientes']; ?></a></li>
		<li><a href="appointments.php" <?php if($option == 'appointments') echo 'class="active"'; ?>><span class="fa fa-book"></span> <?php echo $aside['citas']; ?></a></li>
		<li><a href="invoices.php" <?php if($option == 'invoices') echo 'class="active"'; ?>><span class="fa fa-wpforms"></span> <?php echo $aside['orden-tiendas']; ?></a></li>
		<li><a href="orders.php" <?php if($option == 'orders') echo 'class="active"'; ?>><span class="fa fa-upload"></span> <?php echo $aside['orden']; ?></a></li>
		<li><a href="product.php" <?php if($option == 'product') echo 'class="active"'; ?>><span class="fa fa-search"></span> <?php echo $aside['buscar-producto']; ?></a></li>
		<li><a href="administration.php" <?php if($option == 'administration') echo 'class="active"'; ?>><span class="fa fa-gears"></span> <?php echo $aside['administracion']; ?></a></li>
		<li><a href="fphp/logout.php"><span class="fa fa-sign-out"></span> <?php echo $aside['cerrar-sesion']; ?></a></li>
	</ul>
</nav>