<form id="fDemographics">
	<div class="form-block">
		<div class="form-group">
			<label for="customers-no"><?php echo $demographics['label-customer-no']; ?>:</label>
			<input type="text" class="form-control input-sm" id="customers-no">
		</div>
		<div class="form-group">
			<div class="col-xs-6">
				<label for="cell-phone"><?php echo $demographics['label-cell-phone']; ?>:</label>
				<input type="text" class="form-control input-sm" id="cell-phone">
			</div>
			<div class="col-xs-6">
				<label for="home-phone"><?php echo $demographics['label-home-phone']; ?>:</label>
				<input type="text" class="form-control input-sm" id="home-phone">
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-6">
				<label for="first-name"><?php echo $demographics['label-first-name']; ?>:</label>
				<input type="text" class="form-control input-sm" id="first-name">
			</div>
			<div class="col-xs-6">
				<label for="last-name"><?php echo $demographics['label-last-name']; ?>:</label>
				<input type="text" class="form-control input-sm" id="last-name">
			</div>
		</div>
		<div class="form-group">
			<label for="address"><?php echo $demographics['label-address']; ?>:</label>
			<textarea class="form-control input-sm" id="address" style="resize: none; height: 60px;"></textarea>
		</div>
		<div class="form-group">
			<label for="address-continued"><?php echo $demographics['label-address-continued']; ?>:</label>
			<input type="text" class="form-control input-sm" id="address-continued">
		</div>
		<div class="form-group">
			<div class="col-xs-6">
				<label for="zip-code"><?php echo $demographics['label-zip-code']; ?>:</label>
				<input type="text" class="form-control input-sm" id="zip-code">
			</div>
			<div class="col-xs-6">
				<label for="state"><?php echo $demographics['label-state']; ?>:</label>
				<select class="form-control input-sm" id="state">
					<option value="" selected disabled>...</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="city"><?php echo $demographics['label-city']; ?>:</label>
			<input type="text" class="form-control input-sm" id="city">
		</div>
		<div class="form-group">
			<label for="dbo"><?php echo $demographics['label-dbo']; ?>:</label>
			<input type="text" class="form-control input-sm" id="dbo">
		</div>
	</div>
	<div class="form-block">
		<div class="form-group ">
			<div class="col-xs-6">
				<label for="customers-type"><?php echo $demographics['label-customers-type']; ?>:</label>
				<select type="text" class="form-control input-sm" id="customers-type">
					<option value="" selected disabled>...</option>
				</select>
			</div>
			<div class="col-xs-6">
				<label for="active-since"><?php echo $demographics['label-active-since']; ?>:</label>
				<div class="input-group date">
				  <input type="text" id="active-since" name="active_since" class="form-control input-sm form-control-enabled" placeholder="<?php echo $formato_general_fecha; ?>" readonly><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="member-no"><?php echo $demographics['label-member-no']; ?>:</label>
			<input type="text" class="form-control input-sm" id="member-no" readonly>
		</div>
		<div class="form-group">
			<label for="member-ending-date"><?php echo $demographics['label-member-ending-date']; ?>:</label>
			<div class="input-group date">
				<input type="text" id="member-ending-date" name="member-ending-date" class="form-control input-sm form-control-enabled" placeholder="<?php echo $formato_general_fecha; ?>" readonly disabled><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
			</div>
		</div>
		<div class="form-group">
			<label for="source"><?php echo $demographics['label-source']; ?>:</label>
			<select type="text" class="form-control input-sm" id="source">
				<option value="" selected disabled>...</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sales-person"><?php echo $demographics['label-sales-person']; ?>:</label>
			<select type="text" class="form-control input-sm" id="sales-person">
				<option value="" selected disabled>...</option>
			</select>
		</div>
		<div class="form-group">
			<div class="col-xs-3 text-center">
				<b style="vertical-align: middle;"><?php echo $demographics['label-taxt-exempt']; ?>:</b>
				<div class="checkbox">
					<label class="switch">
						<input type="checkbox" id="tax-exempt">
						<div class="slider"></div>
					</label>
				</div>
			</div>
			<div class="col-xs-9">
				<div class="form-group text-left">
					<label for="ssn"><?php echo $demographics['label-ssn']; ?>:</label>
					<input type="text" class="form-control input-sm" id="ssn">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="member-type"><?php echo $demographics['label-member-type']; ?>:</label>
			<select class="form-control input-sm" id="member-type">
				<option value="" selected disabled>...</option>
			</select>
		</div>
		<div class="form-group">
			<label for="osa"><?php echo $demographics['label-osa']; ?>: (No se ve en orden!!)</label>
			<textarea class="form-control input-sm" id="osa" style="resize: none; height: 60px;"></textarea>
		</div>
	</div>
</form>
