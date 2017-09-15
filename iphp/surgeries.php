<form id="fSymptoms">
	<div class="form-block-full">
		<div class="col-sm-5" style="height: 100%;">
			<h2 style="margin-bottom: 10px;"><?php echo $symptoms['avalible-surgeries']; ?></h2>
			<div class="form-control-div">
				<select id="avalible_surgeries" class="form-control-list" multiple>
					<option>Opcion 1</option>
					<option>Opcion 2</option>
					<option>Opcion 3</option>
					<option>Opcion 4</option>
					<option>Opcion 5</option>
					<option>Opcion 6</option>
				</select>
			</div>
		</div>
		<div class="col-sm-2" style="padding: 0; position: relative; overflow: hidden; height: 100%;">
			<div class="vetical-align-middle">
				<button id="btn_right_surgeries" type="button" class="btn btn-primary col-sm-12" style="opacity: .85; margin-bottom: 100px;">
					<i class="fa fa-arrow-right" style="color: #fff;"></i>
				</button>
				<button id="btn_left_surgeries" type="button" class="btn btn-primary col-sm-12" style="opacity: .85;">
					<i class="fa fa-arrow-left" style="color: #fff;"></i>
				</button>
			</div>
		</div>
		<div class="col-sm-5" style="height: 100%;">
			<h2 style="margin-bottom: 10px;"><?php echo $symptoms['customers-surgeries']; ?></h2>
			<div class="form-control-div">
				<select id="customers_surgeries" class="form-control-list" multiple></select>
			</div>
		</div>
	</div>
</form>