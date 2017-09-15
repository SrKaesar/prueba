<form id="fSymptoms">
	<div class="form-block-full">
		<div class="col-sm-5" style="height: 100%;">
			<h2 style="margin-bottom: 10px;"><?php echo $symptoms['avalible-symptoms']; ?></h2>
			<div class="form-control-div">
				<select id="avalible_symptoms" class="form-control-list" multiple>
					<option value="Roble">Roble</option>
					<option value="Pino">Pino</option>
					<option value="Maple">Maple</option>
					<option value="Sause">Sause</option>
				</select>
			</div>
		</div>
		<div class="col-sm-2" style="padding: 0; position: relative; overflow: hidden; height: 100%;">
			<div class="vetical-align-middle">
				<button id="btn_right_symptoms" type="button" class="btn btn-primary col-sm-12" style="opacity: .85;  margin-bottom: 100px;">
					<i class="fa fa-arrow-right" style="color: #fff;"></i>
				</button>
				<button id="btn_left_symptoms" type="button" class="btn btn-primary col-sm-12" style="opacity: .85;">
					<i class="fa fa-arrow-left" style="color: #fff;"></i>
				</button>
			</div>
		</div>
		<div class="col-sm-5" style="height: 100%;">
			<h2 style="margin-bottom: 10px;"><?php echo $symptoms['customers-symptoms']; ?></h2>
			<div class="form-control-div">
				<select id="customers_symptoms" class="form-control-list" multiple>
					<option value="">Opcion</option>
					<option value="">Opcion</option>
					<option value="">Opcion</option>
					<option value="">Opcion</option>
					<option value="">Opcion</option>
					<option value="">Opcion</option>
				</select>
			</div>
		</div>
	</div>
</form>