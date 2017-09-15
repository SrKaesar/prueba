<form id="fCallLog">
	<div class="form-block-full">
		<div class="form-group">
			<select class="form-control input-sm" id="comment">
				<option value="" selected disabled>- <?php echo $call_log['label-comment']; ?> -</option>
			</select>
		</div>
		<div class="form-group">
			<textarea class="form-control input-sm" id="clh" style="resize: vertical; min-height: 360px; max-height: 410px;" placeholder="<?php echo $call_log['label-clh']; ?>"></textarea>
		</div>
	</div>
</form>