<form id="fSymptoms">
	<div class="form-block-full">
		<div class="col-sm-5" style="height: 100%;">
			<h2 style="margin-bottom: 10px;"><?php echo $symptoms['avalible-applications']; ?></h2>
			<div class="form-control-div">
				<select id="avalible_applications" class="form-control-list" multiple>
					<option>Opcion A</option>
					<option>Opcion B</option>
					<option>Opcion C</option>
					<option>Opcion D</option>
					<option>Opcion E</option>
					<option>Opcion F</option>
				</select>
			</div>
		</div>
		<div class="col-sm-2" style="padding: 0; position: relative; overflow: hidden; height: 100%;">
			<div class="vetical-align-middle">
				<button id="btn_right_applications" type="button" class="btn btn-primary col-sm-12" style="opacity: .85; margin-bottom: 100px;">
					<i class="fa fa-arrow-right" style="color: #fff;"></i>
				</button>
				<button id="btn_left_applications" type="button" class="btn btn-primary col-sm-12" style="opacity: .85;">
					<i class="fa fa-arrow-left" style="color: #fff;"></i>
				</button>
			</div>
		</div>
		<div class="col-sm-5" style="height: 100%;">
			<h2 style="margin-bottom: 10px;"><?php echo $symptoms['customers-applications']; ?></h2>
			<div class="form-control-div">
				<select id="customers_applications" class="form-control-list" multiple>
					<option>Opcion X</option>
					<option>Opcion Y</option>
				</select>
			</div>
		</div>
	</div>
</form>