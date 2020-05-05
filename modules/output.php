<div>
	<?php
		$run=mysqli_query($conn, "select amount2 from converter");
	?>
	<form type="text" class="text">
		<?php
		while($dong=mysqli_fetch_array($run)){
		?>
			<output> 
				<?php
					echo $dong['amount2'];
			 	?>	
			</output>
		<?php
		}
		?>
	</form>
</div>