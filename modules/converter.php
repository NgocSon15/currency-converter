<div class="converter">	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
		<div class="box">
		<div class="from">
			<div id="from-list" class="list">
				<select class="choose" name="input-currency">
					<option value="USD">Đô-la Mỹ (USD)</option>
					<option value="VND" <?php if($currency1 == "VND") echo "selected" ?> >Việt Nam Đồng (VND)</option>
					<option value="EUR" <?php if($currency1 == "EUR") echo "selected" ?> >Euro (EUR)</option>
					<option value="CNY" <?php if($currency1 == "CNY") echo "selected" ?> >Đồng Yuan Trung Quốc (CNY)</option>
					<option value="JPY" <?php if($currency1 == "JPY") echo "selected" ?> >Yên Nhật (JPY)</option>
					<option value="GBP" <?php if($currency1 == "GBP") echo "selected" ?> >Bảng Anh (GBP)</option>
					<option value="CAD" <?php if($currency1 == "CAD") echo "selected" ?> >Đô-la Canada (CAD)</option>
					<option value="CHF" <?php if($currency1 == "CHF") echo "selected" ?> >Đồng Franc Thụy Sĩ (CHF)</option>
					<option value="AUD" <?php if($currency1 == "AUD") echo "selected" ?> >Đô-la Australia (AUD)</option>
					<option value="HKD" <?php if($currency1 == "HKD") echo "selected" ?> >Đô-la Hồng Kông (HKD)</option>
					<option value="SGD" <?php if($currency1 == "SGD") echo "selected" ?> >Đô-la Singapore (SGD)</option>
					<option value="MYR" <?php if($currency1 == "MYR") echo "selected" ?> >Đồng Ringgit Malaysia (MYR)</option>
					<option value="IDR" <?php if($currency1 == "IDR") echo "selected" ?> >Đồng Rupia Indonesia (IDR)</option>
					<option value="THB" <?php if($currency1 == "THB") echo "selected" ?> >Đồng Baht Thái Lan (THB)</option>
					<option value="PHP" <?php if($currency1 == "PHP") echo "selected" ?> >Đồng Peso Philippines (PHP)</option>
					<option value="MMK" <?php if($currency1 == "MMK") echo "selected" ?> >Đồng Kyat Myanmar (MMK)</option>
					<option value="RUB" <?php if($currency1 == "RUB") echo "selected" ?> >Đồng Rúp Nga (RUB)</option>
				</select>
			</div>
			<div>
				<input type="text" id="from-text" class="text" name="input-text" value="<?php echo $amount1 ?>">
			</div>
		</div>

		<div class="centerBox"><input type="submit" name="submit-button" value="CHUYỂN" class="button"></div>

		<div class="to">
			<div id="to-list" class="list">
				<select class="choose" name="output-currency">
					<option value="VND">Việt Nam Đồng (VND)</option>
					<option value="USD" <?php if($currency2 == "USD") echo "selected" ?> >Đô-la Mỹ (USD)</option>
					<option value="EUR" <?php if($currency2 == "EUR") echo "selected" ?> >Euro (EUR)</option>
					<option value="CNY" <?php if($currency2 == "CNY") echo "selected" ?> >Đồng Yuan Trung Quốc (CNY)</option>
					<option value="JPY" <?php if($currency2 == "JPY") echo "selected" ?> >Yên Nhật (JPY)</option>
					<option value="GBP" <?php if($currency2 == "GBP") echo "selected" ?> >Bảng Anh (GBP)</option>
					<option value="CAD" <?php if($currency2 == "CAD") echo "selected" ?> >Đô-la Canada (CAD)</option>
					<option value="CHF" <?php if($currency2 == "CHF") echo "selected" ?> >Đồng Franc Thụy Sĩ (CHF)</option>
					<option value="AUD" <?php if($currency2 == "AUD") echo "selected" ?> >Đô-la Australia (AUD)</option>
					<option value="HKD" <?php if($currency2 == "HKD") echo "selected" ?> >Đô-la Hồng Kông (HKD)</option>
					<option value="SGD" <?php if($currency2 == "SGD") echo "selected" ?> >Đô-la Singapore (SGD)</option>
					<option value="MYR" <?php if($currency2 == "MYR") echo "selected" ?> >Đồng Ringgit Malaysia (MYR)</option>
					<option value="IDR" <?php if($currency2 == "IDR") echo "selected" ?> >Đồng Rupia Indonesia (IDR)</option>
					<option value="THB" <?php if($currency2 == "THB") echo "selected" ?> >Đồng Baht Thái Lan (THB)</option>
					<option value="PHP" <?php if($currency2 == "PHP") echo "selected" ?> >Đồng Peso Philippines (PHP)</option>
					<option value="MMK" <?php if($currency2 == "MMK") echo "selected" ?> >Đồng Kyat Myanmar (MMK)</option>
					<option value="RUB" <?php if($currency2 == "RUB") echo "selected" ?> >Đồng Rúp Nga (RUB)</option>
				</select>
			</div>
			<?php 
					include("output.php");
			?>
		</div>
		</div>
	</form>
</div>