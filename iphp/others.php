<form id="fOthers">
	<div class="form-block">
		<div class="form-group">
			<label for="ocupation"><?php echo $others['label-ocupation']; ?>:</label>
			<select class="form-control input-sm" id="ocupation">
				<option value="" selected disabled>...</option>
			</select>
		</div>
		<div class="form-group">
			<label for="email"><?php echo $others['label-email']; ?>:</label>
			<input type="email" class="form-control input-sm" id="email">
		</div>
		<div class="form-group">
			<label for="marital-status"><?php echo $others['label-marital-status']; ?>:</label>
			<select class="form-control input-sm" id="marital-status">
				<option value="" selected disabled>...</option>
			</select>
		</div>
		<div class="form-group">
			<div class="col-xs-6">
				<label for="height"><?php echo $others['label-height']; ?>:</label>
				<input type="number" class="form-control input-sm" id="height">
			</div>
			<div class="col-xs-6">
				<label for="width"><?php echo $others['label-width']; ?>:</label>
				<input type="number" class="form-control input-sm" id="width">
			</div>
		</div>
		<div class="form-group">
			<label for="hours-of-rest"><?php echo $others['label-hours-of-rest']; ?>:</label>
			<input type="number" class="form-control input-sm" id="hours-of-rest">
		</div>
		<div class="form-group">
			<label for="glasses-water"><?php echo $others['label-glasses-water']; ?>:</label>
			<input type="number" class="form-control input-sm" id="glasses-water">
		</div>
		<div class="form-group">
			<label for="eye-color"><?php echo $others['label-eye-color']; ?>:</label>
			<select class="form-control input-sm" id="eye-color">
				<option value="" selected disabled>...</option>
			</select>
		</div>
		<div class="form-group">
			<label for="age"><?php echo $others['label-age']; ?>:</label>
			<input type="number" class="form-control input-sm" id="age">
		</div>
	</div>
	<div class="form-block">
		<div class="form-group">
			<label for="gender"><?php echo $others['label-gender']; ?>:</label>
			<select class="form-control input-sm" id="gender">
				<option value="" selected disabled>...</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</div>
		<div class="form-group">
			<label for="medical-plan"><?php echo $others['label-medical-plan']; ?>:</label>
			<select class="form-control input-sm" id="medical-plan">
				<option value="" selected disabled>...</option>
			</select>
		</div>
		<div class="form-group">
			<label for="policy-no"><?php echo $others['label-policy-no']; ?>:</label>
			<input type="text" class="form-control input-sm" id="policy-no">
		</div>
		<div class="form-group">
			<div class="col-xs-4 text-center">
				<label for="excercise"><?php echo $others['label-excercise']; ?>:</label>
				<div class="checkbox">
					<label class="switch">
						<input type="checkbox" id="excercise">
						<div class="slider"></div>
					</label>
				</div>
			</div>
			<div class="col-xs-4 text-center">
				<label for="diet"><?php echo $others['label-diet']; ?>:</label>
				<div class="checkbox">
					<label class="switch">
						<input type="checkbox" id="diet">
						<div class="slider"></div>
					</label>
				</div>
			</div>
			<div class="col-xs-4 text-center">
				<label for="believe"><?php echo $others['label-believe']; ?>:</label>
				<div class="checkbox">
					<label class="switch">
						<input type="checkbox" id="believe">
						<div class="slider"></div>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="notes"><?php echo $others['label-notes']; ?>:</label>
			<textarea id="notes" class="form-control input-sm" style="resize: none; height: 138px;"></textarea>
		</div>
	</div>
</form>
