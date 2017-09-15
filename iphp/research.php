<form id="fResearch" class="formulario-inline" style="width: 100%;">
	<div style="margin-top: 5px;">
		<div class="form-group">
			<div class="col-xs-2">
				<label for="research_date">Research Date</label>
				<div class="input-group date">
				  <input type="text" id="research_date" name="research_date" class="form-control input-sm form-control-enabled" placeholder="<?php echo $formato_general_fecha; ?>" readonly><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
			<div class="col-xs-4">
				<label for="product">Product</label>
				<select class="form-control input-sm" name="product">
					<option>-</option>
				</select>
			</div>
			<div class="col-xs-4">
				<label for="result">Result</label>
				<select class="form-control input-sm" name="result">
					<option>-</option>
				</select>
			</div>
			<div class="btn-group col-xs-2" style="margin-top: 24px;">
				<button type="submit" class="btn btn-primary btn-sm" style="width: 100%;">Proccess</button>
			</div>
		</div>
	</div>
	<div style="clear: both; margin-right: 2px;">
		<div id="tabla-research" class="tabla-personalizada">
			<div class="tabla-header">
				<div class="tabla-row">
					<div class="col-2">Research Date</div>
					<div class="col-5">Product Name</div>
					<div class="col-5">Result</div>
				</div>
			</div>
			<div id="tabla-research-result" class="tabla-contain">
				<!-- Se carga con Get JQuery -->
			</div>
		</div>
	</div>
</form>