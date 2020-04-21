<?php
	$run=mysqli_query($conn, "select * from converter");
?>
<form class="output">
	<?php
	while($dong=mysqli_fetch_array($run)){
	?>
		<output>
			<?php 
				echo $dong['amount2'] 
			?>		
		</output>	
	<?php
	}
	?>
</form>