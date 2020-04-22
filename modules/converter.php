<div class="converter">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
		<div class="from">
			<div id="from-list" class="list">
				<select name="input-currency">
					<option value="USD" data-id = "2">Đô-la Mỹ (USD)</option>
					<option value="VND" data-id = "1" <?php if($currency1 == "VND") echo "selected" ?> >Việt Nam Đồng (VND)</option>
					<option value="EUR" data-id = "3" <?php if($currency1 == "EUR") echo "selected" ?> >Euro (EUR)</option>
				</select>
			</div>
			<div>
				<input type="text" id="from-text" class="text" name="input-text" value="<?php echo $amount1 ?>">
			</div>
		</div>

		<input type="submit" name="submit-button" value="Convert" class="button">

		<div class="to">
			<div id="to-list" class="list">
				<select name="output-currency">
					<option value="VND" data-id = "1">Việt Nam Đồng (VND)</option>
					<option value="USD" data-id = "2" <?php if($currency2 == "USD") echo "selected" ?> >Đô-la Mỹ (USD)</option>
					<option value="EUR" data-id = "3" <?php if($currency2 == "VND") echo "selected" ?> >Euro (EUR)</option>
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