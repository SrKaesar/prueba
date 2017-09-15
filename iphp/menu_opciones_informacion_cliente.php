<form id="menu-opciones" class="formulario-inline" style="width: 120%;">
	<div class="col-xs-1">
		<a href="customers.php" class="form-control btn btn-info"><i class="fa fa-arrow-left" style="color: #fff;"></i> <?php echo $main['informacion-cliente']['menu-opciones']['boton-close']; ?></a>
	</div>
	<div class="col-xs-1">
		<a href="?success=Informacion cliente modificada exitosamente." class="form-control btn btn-success"><i class="fa fa-save" style="color: #fff;"></i> <?php echo $main['informacion-cliente']['menu-opciones']['boton-save']; ?></a>
	</div>
	<div class="btn-group col-xs-2">
		<button type="button" class="btn btn-primary no-selectable col-sm-8"><?php echo $main['informacion-cliente']['menu-opciones']['boton-appointment']; ?></button>
		<a href="#" class="btn btn-primary col-sm-2"><i class="fa fa-plus" style="color: #fff;"></i></a>
		<a href="#" class="btn btn-primary col-sm-2"><i class="fa fa-eye" style="color: #fff;"></i></a>
	</div>
	<div class="btn-group col-xs-2">
		<button type="button" class="btn btn-primary no-selectable col-sm-8"><?php echo $main['informacion-cliente']['menu-opciones']['boton-invoice']; ?></button>
		<a href="#" class="btn btn-primary col-sm-2"><i class="fa fa-plus" style="color: #fff;"></i></a>
		<a href="#" class="btn btn-primary col-sm-2"><i class="fa fa-eye" style="color: #fff;"></i></a>
	</div>
	<div class="btn-group col-xs-2">
		<button type="button" class="btn btn-primary no-selectable col-sm-8"><?php echo $main['informacion-cliente']['menu-opciones']['boton-order']; ?></button>
		<a href="#" class="btn btn-primary col-sm-2"><i class="fa fa-plus" style="color: #fff;"></i></a>
		<a href="#" class="btn btn-primary col-sm-2"><i class="fa fa-eye" style="color: #fff;"></i></a>
	</div>
	<div class="col-xs-2">
		<button class="form-control btn btn-primary"><i class="fa fa-plus" style="color: #fff;"></i> <?php echo $main['informacion-cliente']['menu-opciones']['boton-new-followup']; ?></button>
	</div>
</form>