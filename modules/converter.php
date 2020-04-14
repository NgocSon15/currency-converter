<div class="converter">
	<div class="from">
		<div id="from-list" class="list">
			<select>
				<option value="USD" data-id = "2">Đô-la Mỹ (USD)</option>
			</select>
		</div>
		<div>
			<form action="modules/input.php" method="post" enctype="multipart/form-data">
				<input type="text" id="from-text" class="text" name="input-text">
				<input type="submit" name="submit" value="convert">
			</form>
		</div>
	</div>

	<div class="to">
		<div id="to-list" class="list">
			<select>
				<option value="VND" data-id = "4">Việt Nam Đồng (VND)</option>
			</select>
		</div>
		<div>
		<!--	<?php 
			//	include("output.php");
			?> -->
			<form>
				<input type="text" id="to-text" class="text" name="output-text">
			</form>
		</div>
	</div>
</div>