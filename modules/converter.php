<div class="converter">
	<form action="modules/input.php" method="post" enctype="multipart/form-data">
		<div class="from">
			<div id="from-list" class="list">
				<select name="input-currency">
					<option value="USD" data-id = "2">Đô-la Mỹ (USD)</option><br>
					<option value="VND" data-id = "1">Việt Nam Đồng (VND)</option><br>
					<option value="EUR" data-id = "3">Euro (EUR)</option><br>
				</select>
			</div>
			<div>
				<input type="text" id="from-text" class="text" name="input-text">
			</div>
		</div>

		<input type="submit" name="submit-button" value="Convert">

		<div class="to">
			<div id="to-list" class="list">
				<select name="output-currency">
					<option value="VND" data-id = "1">Việt Nam Đồng (VND)</option><br>
					<option value="USD" data-id = "2">Đô-la Mỹ (USD)</option><br>
					<option value="EUR" data-id = "3">Euro (EUR)</option>
				</select>
			</div>
			<div>
				<?php 
					include("output.php");
				?>
			</div>
		</div>
	</form>
</div>