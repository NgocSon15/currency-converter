
<div class="show_table">
		<h1 class="h1">Bảng tỷ giá tiền tệ</h1>
		<table border="1px" style="border-collapse: collapse;">
			<tr>
				<th>STT</th>
				<th>Quốc Gia </th>
				<th>Đơn vị tiền</th>
				<th>Giá đổi sang đồng VND</th>
			</tr>	
			<?php
				include('lib/database.php');
				$sqlSelect = "SELECT country.country_id, country.country_name, currency.currency_name, currency.ti_gia FROM currency JOIN country ON country.country_id = currency.country_id";
				 $result = mysqli_query($conn,$sqlSelect) or die("failed");
				if($result -> num_rows >0){
					while ($row = $result -> fetch_assoc()) {
						# code...
						echo "<tr><td>".$row["country_id"] ."</td><td>". $row["country_name"]."</td><td>". $row["currency_name"]."</td><td>". $row["ti_gia"];
					}
				}							
			?>	
	</table>
</div>