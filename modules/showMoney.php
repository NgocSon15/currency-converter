
<div class="show_table">
		<h1 class="h1">Bảng tỷ giá tiền tệ</h1>
		<table border="1px">
			<tr>
				<th>STT</th>
				<th>Quốc Gia </th>
				<th>Đồng</th>
				<th>Giá đổi sang đồng VND</th>
			</tr>	
			<?php
				include('lib/database.php');
				$sqlSelect = "select * from ti_gia";
				 $result = mysqli_query($conn,$sqlSelect) or die("failed");
				if($result -> num_rows >0){
					while ($row = $result -> fetch_assoc()) {
						# code...
						echo "<tr><td>".$row["countryid"] ."</td><td>". $row["country_name"]."</td><td>". $row["currency"]."</td><td>". $row["tigia"];
					}
				}
					
					
			?>
		 	
	</table>
</div>